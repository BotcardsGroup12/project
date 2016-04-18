<div class="login">
    <h2>User Registration</h2>
    <form id="login" name="login" action="<?= site_url('../Register/do_register') ?>" method="post" enctype="multipart/form-data">
        <label for="username">Login ID</label>
        <input type="text" id="username" name="username" required>
        <br />
        <label for="username">Nickname</label>
        <input type="text" id="nickname" name="nickname" required>
        <br />
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br />
        <label for="avatar">Avatar</label>
        <input type="file" id="userfile" name="userfile"/>
        <br />
        <input id="submit" class="abutton" type="submit" name="register" value="Submit" />
    </form>  
</div>     