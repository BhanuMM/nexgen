
 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 1){ 
      header('location: ' . URLROOT .  '/pages/index');
}?>
    <html>

    <head>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navStyles.css" />
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css" type="text/css">
        <title>Sessions</title>
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
        <div style="text-align:center;">
            <h1>Sessions list</h1>
            <div id="order-table" style="width:90%;margin:auto;float:none;">
                <a href="<?php echo URLROOT; ?>/Hrmanagers/addTrainingSession">
                    <div id="addMod">Add Session</div>
                </a>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['sessions'] as $session) { ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $session->sessionID; ?></td>
                                <td style="text-align: center;"><?php echo $session->title; ?></td>
                                <td style="text-align: center;"><?php echo $session->date; ?></td>
                                <td style="text-align: center;"><?php echo $session->time; ?></td>
                                <td style="text-align: center;"><?php echo $session->venue; ?></td>
                                <td style="text-align: center;">

                                    <button onclick="myFunction2(<?php echo $session->sessionID ?>)" type="button" name="button" style="">Update</button></a>
                                    <button onclick="myFunction3(<?php echo $session->sessionID ?>)" type="button" name="button" style="background-color:green;color:white;">Mark Attendence</button></a>
                                    <button onclick="myFunction(<?php echo $session->sessionID ?>)" type="button" name="button" style="background-color:red;color:white;">Delete</button></a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

    </html>

    <script>
        function myFunction(SID) {
            //var txt;
            if (confirm("Are you sure want to delete ?")) {
                var newUrl = "<?php echo URLROOT; ?>/hrmanagers/deleteSession?SID=" + SID;
                document.location.href = newUrl;
            } else {
                //txt = "You pressed Cancel!";
            }
            // document.getElementById("demo").innerHTML = txt;
        }

        function myFunction2(SID) {

            var newUrl = "<?php echo URLROOT; ?>/Hrmanagers/updateSession?SID=" + SID;
            document.location.href = newUrl;

        }
        function myFunction3(SID) {

            var newUrl = "<?php echo URLROOT; ?>/Hrmanagers/searchEmployee?SID=" + SID;
            document.location.href = newUrl;

        }
    </script>




