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
                    <form action="<?php echo URLROOT; ?>/Hrmanagers/markAttendence" method="POST">
                        <label>Employee</label><br>

                        <input type="text" id="sesTitle" name="sesTitle" placeholder="Search">
                        <input type="hidden" id="sesTitle" name="sid" placeholder="Search" value="<?php echo $_GET["SID"]; ?>">
                        <br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="form-side">
              <h1>Attendance of Employees</h1>
              <table>
                <th>EmployeeID</th>
                <th>Employee Name</th>
              <?php if(isset($data['attendEmployees'])) { ?>
                <?php foreach($data['attendEmployees'] as $emp) {?>
                  <tr>
                    <td><?php echo $emp->employeeID ?> </td>
                    <td><?php echo $emp->fullName ?> </td>
                  </tr>
                <?php } ?>
              <?php } ?>
</div>      </table>
            </body>

    </html>