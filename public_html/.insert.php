<!-- insert.php -->
<?php
    $PAGE_TITLE  = "Public Goods Club | New Member";
?>
<html>
<head>
    <link rel="icon"        type="image/x-icon" href="./public/assets/favicon.ico">
    <link rel="stylesheet"  type="text/css"     href="./css/typeface-lineal.css">
    <link rel="stylesheet"  type="text/css"     href="./css/main.css">
    <link rel="stylesheet"  type="text/css"     href="./css/background.css">
    <link rel="stylesheet"  type="text/css"     href="./css/global-nav.css">
    <link rel="stylesheet"  type="text/css"     href="./css/clouds.css">
    <title><?php echo $PAGE_TITLE;?></title>
</head>
    <body id="page">
    <nav class="global-navigation">
    <a class="global-nav-link" id="" href="./index.php">home</a>
    <a class="global-nav-link" id="" href="./background.php">background</a>
    <a class="global-nav-link" id="" href="./membership.php">membership</a>
    <a class="global-nav-link" id="not-yet-available" href="" disabled>challenge</a>
    <a class="global-nav-link" id="" target="_blank" href="https://zora.co/collect/base:0xa6735cb18ea3e233c535dacd7276d64db02fd9e3">collectibles</a>
    <a class="global-nav-link" id="" href="./faq.php">faq</a>
    <script>
        document.querySelector("#not-yet-available").onclick = (event) => { event.preventDefault(); }
    </script>
</nav>
    <h1 class="background-heading">You are one step closer to Public Goods Club VIP status</h1>        
    <?php 
        include "./config.php";
        if ($CONNECTION === false)
            die(mysqli_connect_error());
        else
        {
            $NAME = $_POST["alias"];
            $NUMBER = $_POST["phone_number"];
            $QUERY      = $mysqli->prepare("insert into member_list (alias, phone_number) values ('$NAME','$NUMBER');");
            $QUERY->execute();
            $mysqli->close();
        }
    ?>
    <?php include "./templates/clouds.html.php";?>
    <script src="./js/cloud_mgmt.js"></script>
    </body>
</html>