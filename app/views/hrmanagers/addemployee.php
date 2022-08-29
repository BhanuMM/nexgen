 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 1){ 
      header('location: ' . URLROOT .  '/pages/index');
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/editProfStyles.css" />
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
    <header>
      <!-- <div class="order-title">
        <h2>HELLO <?php echo $_SESSION['username']?> !</h2>
      </div> -->
      
    </header>
    <hr>
    <div class="order-content" style="width:100%">
      
      <div class="stock-details" style="margin-left:auto; margin-right:auto; margin-bottom:0px">
          
          <div class="details" style=" display:flex; justify-content:center">
          <form action="<?php echo URLROOT; ?>/Hrmanagers/addemployee" method="POST" name="createAccount" >
          
          <h2>Account Info</h2>

          <div class="info-row">
              <div class="take-info">Username : </div><div class="info"><input type="text" name="uname" ></div>
            </div>

            <div class="info-row">
              <div class="take-info">Password : </div><div class="info"><input type="password" name="psw" ></div>
            </div>
            
            <h2>Personal Info</h2>

            <div class="info-row">
              <div class="take-info">Full Name : </div><div class="info"><input type="text" name="fname" value=""></div>
            </div>
            

            <div class="info-row">
              <div class="take-info">Email : </div><div class="info"><input type="email" name="email" value=""></div>
            </div>
          

              
            
            
            
            <div class="info-row">

            
              
              <div class="take-info">Date of Birth : </div><div class="info"><input type="date" name="dob" value=""></div>
            </div>
            
            <span class="invalidFeedback" style="color: red;">
                
              </span>
            <div class="info-row">
              <div class="take-info">Address : </div><div class="info"><input type="textarea" name="address" ></div>
            </div>
            

            <span class="invalidFeedback" style="color: red;">
                
              </span>
            <div class="info-row">
              <div class="take-info">NIC: </div><div class="info"><input type="text" name="nic" ></div>
            </div>

            <span class="invalidFeedback" style="color: red;">
                
              </span>
            <div class="info-row">
              <div class="take-info">Telephone Number : </div>
              <div class="info"><input type="text" name="tpno" ></div>
            </div>
            
          </div>

          <div class="proceed-button" style=" display:flex; justify-content:center">
          <button class="btn-proceed" type="submit">ADD EMPLOYEE</button>
              
          </div>
          
          </form>
      </div>    
    </div>

    
  </body>

</html>
