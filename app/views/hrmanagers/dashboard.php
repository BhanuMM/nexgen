 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 1){ 
      header('location: ' . URLROOT .  '/pages/index');
}?>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/hr.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navStyles.css" />
    <title>Dashboard</title> 
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

<div class="hr-dashboard">
    <div>
    <h1>Employees</h1>
    <div class="hr-insight-box-employee" >
        
    </div>
    <h1><?php echo $data['employeeCount'] ?></h1>
    </div>
    <div style="margin-left: 100px;">
        <h1>Sessions</h1>
    <div class="hr-insight-box-session" >

    </div>
    <h1><?php echo $data['sessionCount']?></h1>
    </div>

</div>

    
    
</body>
</html>