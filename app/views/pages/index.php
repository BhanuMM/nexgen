<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/main.css" />
    <title>NexGen</title>
</head>
<body>
    <div class="container">
    <form class="login-form" method="POST" action ="<?php echo URLROOT; ?>/pages/index">
        <h1>Login</h1>
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
</div>
</body>
</html>