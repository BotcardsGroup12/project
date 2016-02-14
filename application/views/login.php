<?php 
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
    }
?>
<div class="login">
    <h2>Login</h2>
    <form id="login" name="login" action="login" method="post">
        <label for="username">User name</label>
        <input type="text" id="username" name="username">
        <br />
        <label for="password">Password</label>
        <input type="password" id="password">
        <br />
        <input class="abutton" type="submit" name="submit" value="Login" />
    </form>
</div>     
