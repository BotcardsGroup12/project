<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  Render bot pieces summary
 */
?>
<div style="text-align: center">
    <h4>Round {round}</h4>
    <p>Game Status:<b style="text-transform: uppercase">{current}</b></p>
    <p>Countdown: {countdown}</p>
    <?php
    if ($_SESSION['register'] == "open") {
        if(isset($_SESSION['username']) && (!isset($_SESSION['token']) || ($_SESSION['current_round'] != $_SESSION['registered_round']))){ 
            echo '<a href="home/agentregister">Click here to register</a>';
            if (isset($_SESSION['current_round'])) echo $_SESSION['current_round'];
            if (isset($_SESSION['registered_round'])) echo $_SESSION['registered_round'];
        }
        if (isset($_SESSION['token']) && ($_SESSION['current_round'] == $_SESSION['registered_round'])){
            echo '<a href="home/buy_card">Click here to buy cards</a>';
            echo '<br />Token: '.$_SESSION['token'];
        }
    } 
    else {
        echo 'Registration is closed';
    }
    ?>
</div>