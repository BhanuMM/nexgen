 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 1){ 
      header('location: ' . URLROOT .  '/pages/index');
}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navStyles.css" />
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/styleAddSession.css">

    <title>Add Session</title>
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
            <div class="img-content">
            </div>
        </div>
        <div class="form-side">
            <div class="topic">
                <span class="main-topic">Add Training Session</span>
            </div>
            <form action ="<?php echo URLROOT; ?>/hrmanagers/addTrainingSession" method="POST">
                <label >Title</label><br>
               
                <input type="text" id="sesTitle" name="sesTitle" placeholder="Title">
                <br>
                <label >Date</label><br>
               
                <input type="date" id="sesDate" name="sesDate" placeholder="Date">
                <br>
                <label >Time</label><br>
                
                <input type="text" id="sesTime" name="sesTime" placeholder="Time">
                <br>
                <label >Venue</label><br>
                
                <input type="text" id="sesVenue" name="sesVenue" placeholder="Venue">
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="footer">
    </div>
</body>
</html>
