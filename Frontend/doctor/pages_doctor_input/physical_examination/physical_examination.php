<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="physical_examination.css">
    <link rel="stylesheet" href="../../../awesome-font/css/font-awesome.min.css">
    <title>Physical Examination</title>
</head>
<body>
<nav class="navbar">
    <i class="fa fa-long-arrow-left " id="back_arrow" onClick="back_arrow()"></i>
    <div class="logo">
        <!---Please you would manipulate this span base on the patient clicked-->
        <span style="font-size:2rem; color:#fff;">Patient name Physical Examination</span>
    </div>
    </form>
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
   <div class="system_review-section">
        <div class="drop-down1">
            <span>General</span>
            <i class="fa fa-minus" id="close_id_1"></i>
            <i class="fa fa-plus" id="open_id_1"></i>
        </div>
        <form action="" class="form1 hidden">
            <div class="form-control">
            <label for="physical_examination">Physical Examination</label>
            <input type="text">
</div>
        </form>
        <div class="drop-down2">
            <span>Neurological</span>
            <i class="fa fa-minus" id="close_id_2"></i>
            <i class="fa fa-plus" id="open_id_2"></i>
        </div>
        <form action="" class="form2 hidden">
            <div class="form-control">
            <label for="phyical_status">Mental Status</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="cranial_nerves">Cranial Nerves</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="position_sense">Position Sense</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="vibration_sense">Vibration Sense</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="reflex_technique">Reflex Technique</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="coordination_of_upper">Coordination of upper extremities</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="coordination_of_lower">Coordination of lower extremities</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="gait">Gait</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="glasgow">Glasgow coma scale</label>
            <input type="text">
            </div>
            <div class="form-control">
            <label for="headache">Eye opening response</label>
                <div class="radio">
                <input type="radio" id="spontaneous" name="eye"/>
                <label for="spontaneous">Spontaneous</label>
                <input type="radio" id="to_speech" name="eye"/>
                <label for="to_speech">To speech </label>
                <input type="radio" id="to_pain" name="eye"/>
                <label for="no_response">To Pain </label>
                <input type="radio" id="no_response" name="eye"/>
                <label for="no_response">No Response</label>
                </div>
</div>
            <div class="form-control">
            <label for="headache">Best verbal response</label>
                <div class="radio">
                <input type="radio" id="oriented" name="verbal"/>
                <label for="oriented">Oriented to time, place & person </label>
                <input type="radio" id="confused" name="verbal"/>
                <label for="confused">Confused 3</label>
                <input type="radio" id="inappropraite" name="verbal"/>
                <label for="no_response">Inappropraite words</label>
                <input type="radio" id="incmprehensible" name="verbal"/>
                <label for="response">Incomprehensible sounds</label>
                <input type="radio" id="response" name="verbal"/>
                <label for="response">No Response</label>
                </div>
</div>
            <div class="form-control">
            <label for="headache">Best motor response</label>
                <div class="radio">
                <input type="radio" id="obey" name="motor"/>
                <label for="obey">Obey command</label>
                <input type="radio" id="localized" name="motor"/>
                <label for="localized">Moved to localised pain</label>
                <input type="radio" id="flexion" name="motor"/>
                <label for="flexion">Flexion withdrawal from pain</label>
                <input type="radio" id="abnornal" name="motor"/>
                <label for="abnormal">Abnormal flexion(decorticate)</label>
                <input type="radio" id="response" name="motor"/>
                <label for="response">No Response</label>
                </div>
</div>
            <button id="btn">Enter</button>
        </form>
        </div>
</div>
   <script src="physical_examination.js"></script>
</body>
</html>