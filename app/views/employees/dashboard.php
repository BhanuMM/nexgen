 <?php if (!isset($_SESSION['userID'])|| $_SESSION["userRoleID"] != 2){ 
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

        <div class="middle" id ="mid" ></div>
        
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
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
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
                                

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

    </html>