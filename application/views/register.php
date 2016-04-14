    <div class="login">
        <h2>User Registration</h2>
        <form id="login" name="login" action="<?=site_url('../Register/do_register')?>" method="post">
            <label for="username">User name</label>
            <input type="text" id="username" name="username" required>
            <br />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <br />
            <label for="avatar">Avatar</label>
            <input type="radio" name="avatar" value="1" required/>#1
            <input type="radio" name="avatar" value="2"/>#2
            <input type="radio" name="avatar" value="3"/>#3
            <br />
            <input class="abutton" type="submit" name="register" value="Submit" />
        </form>
    </div>     
