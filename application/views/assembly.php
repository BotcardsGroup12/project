<div class="assembly">
    <h2>Choose your Bot pieces</h2>
    <div class="botSelection">
        <input type="radio" name="top" value="11a"><img src ="img/11a-0.jpeg" alt="avatar">
        <input type="radio" name="top" value="11b"><img src ="img/11b-0.jpeg" alt="avatar">
        <input type="radio" name="top" value="11c"><img src ="img/11c-0.jpeg" alt="avatar">
        <input type="radio" name="top" value="13c"><img src ="img/13c-0.jpeg" alt="avatar">
        <input type="radio" name="top" value="13d"><img src ="img/13d-0.jpeg" alt="avatar">
        <input type="radio" name="top" value="26h"><img src ="img/26h-0.jpeg" alt="avatar">
        <br />
        <input type="radio" name="middle" value="11a"><img src ="img/11a-1.jpeg" alt="middle">
        <input type="radio" name="middle" value="11b"><img src ="img/11b-1.jpeg" alt="middle">
        <input type="radio" name="middle" value="11c"><img src ="img/11c-1.jpeg" alt="middle">
        <input type="radio" name="middle" value="13c"><img src ="img/13c-1.jpeg" alt="middle">
        <input type="radio" name="middle" value="13d"><img src ="img/13d-1.jpeg" alt="middle">
        <input type="radio" name="middle" value="26h"><img src ="img/26h-1.jpeg" alt="middle">     
        <br />
        <input type="radio" name="bottom" value="11a"><img src ="img/11a-2.jpeg" alt="bottom">
        <input type="radio" name="bottom" value="11b"><img src ="img/11b-2.jpeg" alt="bottom">
        <input type="radio" name="bottom" value="11c"><img src ="img/11c-2.jpeg" alt="bottom">
        <input type="radio" name="bottom" value="13c"><img src ="img/13c-2.jpeg" alt="bottom">
        <input type="radio" name="bottom" value="13d"><img src ="img/13d-2.jpeg" alt="bottom">
        <input type="radio" name="bottom" value="26h"><img src ="img/26h-2.jpeg" alt="bottom"> 
    </div>
    <div class="selectedBot">
        <img id="imgTop" src ="img/11a-0.jpeg" alt="avatar" height="64" width="128"><br />
        <img id="imgMiddle" src ="img/11b-1.jpeg" alt="middle" height="64" width="128"><br />
        <img id="imgBottom" src ="img/11c-2.jpeg" alt="bottom" height="64" width="128">
    </div>
    <button class="abutton">Assemble!</button>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("input[type='radio'").click(function () {

            switch ($(this).attr("name"))
            {
                case "top":
                    $("#imgTop").attr("src", "/img/" + $(this).val() + "-0.jpeg");
                    break;
                case "middle":
                    $("#imgMiddle").attr("src", "/img/" + $(this).val() + "-1.jpeg");
                    break;
                case "bottom":
                    $("#imgBottom").attr("src", "/img/" + $(this).val() + "-2.jpeg");
                    break;
            }
        });
    });
</script>