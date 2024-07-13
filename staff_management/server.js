const express = require('express');
const cors = require('cors');
const multer = require('multer');
const session = require('express-session');
const app = express();
const port = 5000;

// Use CORS middleware
app.use(cors());

// Set up multer for handling `multipart/form-data`
const storage = multer.memoryStorage(); 
const upload = multer({ storage: storage });
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Use session middleware
app.use(session({
    secret: 'your-secret-key', // Replace with a strong secret key
    resave: false,
    saveUninitialized: true,
    cookie: { secure: false } // Set to true if using HTTPS
}));

// Add a middleware to log session data for every request
app.use((req, res, next) => {
    console.log('Session data before handling request:', req.session);
    next();
});

let staffData = [];

app.post('/api/staffRegistrationForm', upload.any(), (req, res) => {
    let capturedImageBase64 = '';
    const qualificationsBase64 = {};
    
    // Convert the captured image and other files to base64 strings
    if (req.files) {
        req.files.forEach(file => {
            if (file.fieldname === 'capturedImage') {
                capturedImageBase64 = `data:${file.mimetype};base64,${file.buffer.toString('base64')}`;
            } else if (file.fieldname === 'qualification') {
                qualificationsBase64.qualification = `data:${file.mimetype};base64,${file.buffer.toString('base64')}`;
            } else if (file.fieldname === 'certification') {
                qualificationsBase64.certification = `data:${file.mimetype};base64,${file.buffer.toString('base64')}`;
            } else if (file.fieldname === 'resume') {
                qualificationsBase64.resume = `data:${file.mimetype};base64,${file.buffer.toString('base64')}`;
            }
        });
    }

    // Store form data in memory (for demonstration purposes)
    const staffEntry = {
        formData: req.body,
        capturedImage: capturedImageBase64,
        qualifications: qualificationsBase64
    };
    staffData.push(staffEntry);

    // Example response
    res.status(201).json({
        status: 'success',
        staffEntry
    });
});

// Route to handle GET request for fetching staff data
app.get('/api/staffRegistrationForm', (req, res) => {
    res.status(200).json({
        status: 'success',
        result: staffData.length,
        staffData
    });
    console.log(staffData);
});

app.get('/api/v1/staffProfile/:id', (req, res) => {
    const staffId = req.params.id;
    const staffProfile = staffData.find(staff => staff.formData.staffId === staffId);
    if (staffProfile) {
        res.status(200).json({
            status: 'success',
            staffProfile
        });
    } else {
        res.status(404).json({
            status: 'failed',
            message: 'Staff not found',
        });
    }
});

// Route to handle clock-in
app.post('/api/v1/clockinstaff/:id', (req, res) => {
    const staffId = req.params.id;
    const staffExists = staffData.find(staff => staff.formData.staffId === staffId);
    if (!staffExists) {
        return res.status(404).json({
            status: 'failed',
            message: 'Staff Does Not Exist'
        });
    }

    const now = new Date();
    req.session.staffAttendance = req.session.staffAttendance || {};
    req.session.staffAttendance[staffId] = req.session.staffAttendance[staffId] || {};

    if (req.session.staffAttendance[staffId].clockIn) {
        console.log(`Staff ${staffId} already clocked in.`);
        return res.status(400).json({
            status: 'failed',
            message: 'Already clocked in'
        });
    }

    req.session.staffAttendance[staffId].clockIn = now;

    req.session.save((err) => {
        if (err) {
            console.error('Session save error:', err);
            return res.status(500).json({
                status: 'failed',
                message: 'Internal server error'
            });
        }
        console.log(`Staff ${staffId} clocked in at ${now}.`);
        res.status(200).json({
            status: 'success',
            message: 'Clocked in',
            time: now
        });
    });
});

// Route to handle clock-out
app.post('/api/v1/clockoutstaff/:id', (req, res) => {
    const staffId = req.params.id;
    const staffExists = staffData.find(staff => staff.formData.staffId === staffId);
    if (!staffExists) {
        return res.status(404).json({
            status: 'failed',
            message: 'Staff not found'
        });
    }

    if (!req.session.staffAttendance || !req.session.staffAttendance[staffId] || !req.session.staffAttendance[staffId].clockIn) {
        console.log(`Staff ${staffId} attempted to clock out without clocking in.`);
        return res.status(400).json({
            status: 'failed',
            message: 'Clock in first'
        });
    }

    const now = new Date();
    req.session.staffAttendance[staffId].clockOut = now;

    req.session.save((err) => {
        if (err) {
            console.error('Session save error:', err);
            return res.status(500).json({
                status: 'failed',
                message: 'Internal server error'
            });
        }
        console.log(`Staff ${staffId} clocked out at ${now}.`);
        res.status(200).json({
            status: 'success',
            message: 'Clocked out',
            time: now
        });
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});
