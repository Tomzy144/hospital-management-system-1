<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgical List</title>
    <link rel="stylesheet" href="surgical.css">
    <link rel="stylesheet" href="../../awesome-font/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <i class="fa fa-long-arrow-left " id="back_arrow" onClick="back_arrow()"></i>
    <div class="logo">
        <span style="font-size:2rem; color:#fff;">Procedures</span>
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
            <span>Surgery Procedure</span>
            <div class="surgical_input_control">
            <i class="fa fa-search" id="search-icon"></i>
                <input type="text" placeholder="Search here">
            </div>
        </div>
        <div class="body_sec">
            <table>
                <thead>
                    <tr>
                        <td>Doctor Name</td>
                        <td>Doctor ID</td>
                        <td>Patient Name</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Procedure</td>
                        <td>Phone Number</td>
                        <td>Cost</td>
                    </tr>
                </thead>

                <tbody class="a_1">
                    <tr>
                    <td>Doc. Esther Udo</td>
                    <td>Doc.0001</td>
                    <td>Gift John</td>
                    <td>12-02-2023</td>
                    <td>5.00</td>
                    <td><span>Head Surgery</span></td>
                    <td>08177829333</td>
                    <td>#20,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="surgical.js"></script>
</body>
</html>