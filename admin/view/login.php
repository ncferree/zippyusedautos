<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p><?=$login_message?> </p>

    <form action="." method="post" class="add_vehicle_form"> 
    <input type="hidden" name="action" value="login">
        <div>
            <label>Username: </label>
            <input type="text" placeholder="" name="action" value="username">
            <label>Password: </label>
            <input type="text" placeholder="" name="action" value="password" >
            <input type="submit">
        </div>
        
    </form>
</body>
</html>