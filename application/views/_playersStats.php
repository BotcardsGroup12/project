<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  Render players stats
 */
?>
{collection}
<tr>
    <td><img src ="uploads/{avatar}" alt="avatar" style="height:40px;width:40px;"></td>
    <td><a href="/portfolio/{playerName}">{playerName}</a></td>
    <td>{equity}</td>
    <td>{peanuts}</td>
</tr>
{/collection}