<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Completed Orders</title>
    <link rel="stylesheet" href=" <?php echo URLROOT; ?> /css/styleCompleteOrders.css" />
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navStyles.css" />
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
            
                <li class="right"><a href="<?php echo URLROOT;?>/buyers/ongoingorders">Sessions</a></li>
            
            
                    
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

    <div>
      <a href="<?php echo URLROOT;?>/Hrmanagers/addemployee">Add a new Employee</a>
    </div>

    <div class="detail">
      <div class="dtopic">
        <h1>Completed Orders</h1>
      </div>
      
      
    </div>
    <table>
  <tr>
    <th>UserID</th>
    <th>Username</th>
    <th>FullName</th>
    <th>Email</th>
    <th>DOB</th>
    <th>Address</th>
    <th>NIC</th>
    <th>Telephone</th>
    <th></th>
    <th></th>
  </tr>

  <?php  foreach($data["employees"] as $employee){ ?>
  <?php }?>
  <tr>
    <td><?php echo $employee->userID ;?></td>
    <td><?php echo $employee->username ;?></td>
    <td><?php echo $employee->fullName ;?></td>
    <td><?php echo $employee->email ;?></td>
    <td><?php echo $employee->DOB ;?></td>
    <td><?php echo $employee->address ;?></td>
    <td><?php echo $employee->NIC ;?></td>
    <td><?php echo $employee->telephoneNo ;?></td>
    <td>Remove</td>
    <td>Delete</td>
  </tr>
</table>
      <br><br>
  </body>
</html>

          
  
