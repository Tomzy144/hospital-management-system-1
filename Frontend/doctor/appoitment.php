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
                <input type="text" placeholder="Search here">
            </div>
        </div>
    </div>
    </div>
    <script src="appoitment.js"></script>
</body>
</html>