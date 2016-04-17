<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  Render bot pieces summary
 */
?>
<div style="text-align: center">
    <h4>Round {round}</h4>
    <p>Game Status:<b style="text-transform: uppercase">{current}</b></p>
    <?php
    if ($_SESSION['register'] == "open") {
        echo '<a href="home/agentregister">Click here to register</a>';
        echo '<a href="home/buy_card">Click here to buy cards</a>';
        echo $_SESSION['token'];
    } else
    if ($_SESSION['register'] == "okay") {
        echo '<a href="home/buy_card()">Click here to buy cards</a>';
    } else {
        echo 'Registration is closed';
        echo '<a href="home/agentregister">Click here to register</a>';
        echo $_SESSION['token'];
    }
    ?>
</div>