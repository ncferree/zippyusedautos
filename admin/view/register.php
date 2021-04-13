<?php include 'view/header.php'; ?>

<?=$errors?>

<form action="." method="post" class="add_vehicle_form">
    <input type="hidden" name="action" value="register">
    <div>
        <label>Username: </label>
        <input type="text" name="username">
        <label>Password: </label>
        <input type="password" name="password" >
        <label>Confirm Password: </label>
        <input type="password" name="confirm_password">
        <input type="submit" value="Register">
    </div>
</form>

<?php include 'view/footer.php'; ?>