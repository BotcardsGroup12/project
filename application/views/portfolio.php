<div class="home-box switchplayer">
    <h2>Switch Player</h2>
    <select onchange="window.location.href = this.value">
        {playersOptions}
    </select>
</div>
<div class="home-box playerinfo">
    <h2>{playerName}</h2>
    <table class="inventory">
        <tr>
            <th></th>
            <th>Series</th>
            <th>Quantity</th>
        </tr>
        {inventory}
     </table>
</div>
<div class="home-box activity">
    <h2>Trading Activity</h2>
    <ul>
        {trades}
    </ul>
</div>

