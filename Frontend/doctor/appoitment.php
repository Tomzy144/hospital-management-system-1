<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoitment</title>
    <link rel="stylesheet" href="appoitment.css">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <i class="fa fa-long-arrow-left " id="back_arrow" onClick="back_arrow()"></i>
    <div class="logo">
        <span style="font-size:2rem; color:#fff;">My Appoitment</span>
    </div>
         </nav>
    <div class="sidebar">
    <div class="togglebar">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
    </div>
    <div class="checkbar">
    <i class='fa fa-calendar-check-o active'></i>
    <i class='fa fa-envelope active'></i> 
    <i class='fa fa-user-circle-o active'></i>
    </div>
</div>
    <div class="container">
    <div class="contents">
        <div class="head-sec">
            <span>Appoitment Details</span>
            <div class="appoitment_input_control">
            <i class="fa fa-search" id="search-icon"></i>
                <input type="text" placeholder="Search here">
            </div>
        </div>
        <div class="body_sec">
            <table>
                <thead>
                    <tr>
                        <td>Patient Name</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Request Type</td>
                        <td>Accept/Reject</td>
                    </tr>
                </thead>

                <tbody class="a_1">
                    <tr>
                    <td>Princess Udo Asuquo</td>
                    <td>5-11/2023</td>
                    <td>9.00</td>
                    <td>General checkup</td>
                    <td>
                        <button>Accept</button>
                        <button>Reject</button>
                    </td>
                    </tr>
                </tbody>

                <tbody class="a_2">
                    <tr>
                    <td>Princess Udo Asuquo</td>
                    <td>5-11/2023</td>
                    <td>9.00</td>
                    <td>General checkup</td>
                    <td>
                        <button>Accept</button>
                        <button>Reject</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="appoitment.js"></script>
</body>
</html>