
<html>
<head>
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css" type="text/css">  
    <title>Dashboard</title> 
</head>
<body>
<?php if(isset($_GET['status'])){ ?>
<?php if($_GET['status']=='success'){ ?>
        <script>window.alert("stock successfully added");</script>
    <?php } }?>
<?php

include_once(APPROOT.'/views/includes/navigation.php');
?>  
    <div id="dashboard">
        
            <div class="profile-upper">
                <h1>Hello</h1>
                <h2>Manager Dashboard</h2>
                <hr>
            </div>
        <br>
        <br>
        <br>
        
        <div class="card-line">
            <a href="<?php echo URLROOT;?>/stocks/addStock">
                <div class="dash-card">
                    <h1>Add Session</h1>
                    
                </div>
            </a>
            <a href="<?php echo URLROOT;?>/farmers/myStock">
            <div class="dash-card">
                <h1>View Sessions</h1>
                
            </div>
            </a>
            <a href="<?php echo URLROOT;?>/farmers/offersSent">
            <div class="dash-card">
                <h1>Add Employee</h1>
                
            </div>
            </a>
            <a href="<?php echo URLROOT;?>/farmers/offersSent">
            <div class="dash-card">
                <h1>Edit Profile</h1>
                
            </div>
            </a>
        </div>
    </div>
    
</body>
</html>