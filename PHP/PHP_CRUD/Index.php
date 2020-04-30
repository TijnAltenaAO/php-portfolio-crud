<?php
session_start();

include_once("bootstrap.php");
bootstrap("functions");
config("config/config.ini");

$con = db_connect();
$inhoud = inhoud($con);
$out1 = css('functions/css', 'css');

$menu = dropdownnav($con);


?>
<html>

</head>
<?php
echo $out1;
?>
</head>

<body>
    <div id="parallex-div">
        <nav>
            <ul id="ulist">
                <?php
                    echo $menu;
                ?>
            </ul>
        </nav>
        <div id="container">
            <header>
                <title><?php echo CONFIGURATIE["website"]["title"] ?> </title>
                <h1>PHP functies</h1>
            </header>
            <main>
                <div id="content">
                    <?php
                    echo $inhoud;
                    ?>
                </div>
            </main>
            <footer>
            </footer>
        </div>

    </div>
</body>



</head>

</html>