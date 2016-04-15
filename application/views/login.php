<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin'); ?>
<div class="login">
    <h2>Login</h2>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <br />
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <br />
    <input class="abutton" type="submit" name="login" value="Login" />

</div>     

