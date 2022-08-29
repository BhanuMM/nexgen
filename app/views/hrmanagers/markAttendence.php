 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 1){ 
      header('location: ' . URLROOT .  '/pages/index');
}?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleAddSession.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navStyles.css" />
        <title>Mark Attendence</title>
    </head>

    <body>
        <nav>
        <div class="nav">
    <div class="logo">
            <h1>NEXGEN</h1>
            
        </div>
        <div class="middle" id ="mid" >
        <ul>
            <li class="right"><a href="<?php echo URLROOT;?>/Hrmanagers/dashboard">Dashboard</a></li>
        
            <li class="right"><a href="<?php echo URLROOT;?>/Hrmanagers/employees">Employees</a></li>
            
                <li class="right"><a href="<?php echo URLROOT;?>/Hrmanagers/sessions">Sessions</a></li>
            
            
                    
            </ul>
          
        </div>
        
        <div class="nav-right">
       <!-- <a  style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> -->
      
                
            <div class="name">
                
                    <a href="<?php echo URLROOT;?>/pages/logout">Log out</a>
                
            </div>
            
        </div>
    </div>
    </nav>
        <div class="content">
            <div class="image">
                <div class="">
                    <div class="topic">
                        <h2 class="main-topic">Mark Attendence</h2>
                    </div>
                    
                </div>
            </div>
            <div class="form-side">
                <?php if (isset($data['attendanceError'])){?>
                    <div style="color:red; display:flex; justify-content:end"><?php echo $data['attendanceError'] ?>!</div>
               <?php } ?>
                <?php if (isset($data['sessions'])) {
                    foreach ($data['sessions'] as $session) { ?>
                        <form method="POST" action="<?php echo URLROOT;?>/Hrmanagers/completeAttendance">
                        <div style="border:1px solid #000">
                            <label>Employee ID</label><br>
                            <input type="hidden" name="key" value="<?php echo $data['key'] ?>">
                            <input type="hidden" name="sid" value="<?php echo $data['sessionID'] ?>">
                            <input type="text" id="sesTitle" name="eid" placeholder="Title" readonly="readonly" value="<?php echo $session->employeeID; ?>">
                            <br>
                            <label>Name</label><br>
                            <input type="text" id="sesTime" name="sesTime" placeholder="Time" readonly="readonly" value="<?php echo $session->fullName; ?>">
                            <br>

                            <label>Date of Birth</label><br>

                            <input type="date" id="sesDate" name="sesDate" placeholder="Date" readonly="readonly" value="<?php echo $session->DOB; ?>">
                            <br>
                            <label>NIC</label><br>

                            <input type="text" id="sesTime" name="sesTime" placeholder="Time" readonly="readonly" value="<?php echo $session->NIC; ?>">
                            <br>
                            <label>Address</label><br>

                            <input type="text" id="sesTime" name="sesTime" placeholder="Time" readonly="readonly" value="<?php echo $session->address; ?>">
                            <br>
                            <label>Telephone Number</label><br>

                            <input type="text" id="sesVenue" name="sesVenue" placeholder="Venue" readonly="readonly" value="<?php echo $session->telephoneNo; ?>">
                            <br>
                            <button type="submit" name="button" style="background-color:green;color:white;">Mark Attendence</button></a>
                        </div>
                    </form>
                    <?php }
                } ?>

            </div>
        </div>
        <div class="footer">
        </div>
    </body>

    </html>


    <script>
        function myFunction(SID) {
            //var txt;
            if (confirm("Are you sure want to delete ?")) {
                var newUrl = "<?php echo URLROOT; ?>/hrmanagers/attendSession?SID=" + SID;
                document.location.href = newUrl;
            } else {
                //txt = "You pressed Cancel!";
            }

        }
    </script>