<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexGen</title>
</head>
<body>
    <form method="POST" action ="<?php echo URLROOT; ?>/pages/index">
        <label for="username">
        Username : 
        </label>
        <input type="text" name="uname">
        <label for="password">
        Password : 
        </label>
        <input type="password" name="psw">
        <button type="submit">Login</button>
        <span class="error">
        <p><?php echo $data['unameError'];?></p>
        </span>
        <span class="error">
        <p><?php echo $data['pswError'];?></p>
      </span>
    </form>
</body>
</html>