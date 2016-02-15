<?php 
    if (isset($_POST['login']))
    {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
    }

    if (isset($_POST['logout']))
    {
        $_SESSION['username'] = null;
    }

    if (isset($_SESSION['username']))
    {
?>
        <div class="login">
            <h2>Log out</h2>
            <form id="login" name="login" action="login" method="post">
                <br />
                <input class="abutton" type="submit" name="logout" value="Logut" />
            </form>
        </div>     

    <?php        
    }
    else
    {
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
                <input class="abutton" type="submit" name="login" value="Login" />
            </form>
        </div>     
<?php 
    }
?>
