<html>
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="/css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/lightbox.css" />
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/lightbox.min.js"></script> 
    </head>
    <body>
        <div class="logo-container">
            <a href="/"><img src="/img/logo.gif"/></a>
        </div>
        <div class="menu-placeholder">
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/assembly">Assemble</a></li>
                    <?php
                    if (!isset($_SESSION['logged_in'])) {
                        echo '<li style="float:right;"><a href="/register">Register</a></li>'
                        . '<li style="float:right;"><a href="/login" >💀 Login</a></li>';
                    } else {
                        echo '<li style="float:right;"><a href="home/logout">💀 Logout </a></li>';
                    }
                    if(isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {
                        echo '<li style="float:right;"><a href="/admin" >Admin</a></li>';
                    }
                    ?>

                </ul>                
            </div>
        </div>        
        <div id="wrapper">
            <div id="content">
                {content}
            </div>
        </div>
        <div id="footer" class="span12">
            Wise Botler by Pablo R. and Damian K., A4850 Group 12 <a href="https://github.com/BotcardsGroup12/project">Github</a>.
        </div>        

    </body>
</html>
