
<div class="login">
    <h2>User Maintenance</h2>

    <table style="text-align: center; width: 80%;">
        <tr>
            <td><b>Username</b></td>
            <td><b>Nickname</b></td>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->player; ?></td>   
                <td><a href="<?php echo base_url() . "Admin/remove_user/" . $user->username; ?>">Delete</a></td>
            </tr>
            <?php } ?>


    </table>
</div>     

