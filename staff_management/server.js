const express = require('express');
const cors = require('cors');
const multer = require('multer');
const app = express();
const port = 5000;

// Use CORS middleware
app.use(cors());

// Set up multer for handling `multipart/form-data`
const storage = multer.memoryStorage(); // or multer.diskStorage() if you want to save files
const upload = multer({ storage: storage });

// Middleware to parse JSON bodies
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

let staffData = []; // In-memory storage for demonstration purposes

// Route to handle POST request for staff registration form
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
    console.log(staffData)
});

app.get('/api/v1/staffProfile/:id', (req, res) => {
const  staffId  = req.params.id;
const staffProfile = staffData.find(staff => staff.formData.staffId === staffId);
if(staffProfile){
  res.status(200).json({
    status:'success',
    staffProfile
  })
}
else{
  res.status(404).json({
    status:'failed',
    message:'Staff not found',
  })
}
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});
