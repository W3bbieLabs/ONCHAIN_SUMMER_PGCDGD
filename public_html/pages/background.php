<?php
    $PAGE_TITLE = "Public Goods Club | Background";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon"        type="image/x-icon" href="../public/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/typeface-lineal.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/global-nav.css">
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <link rel="stylesheet" type="text/css" href="../css/member-form.css">
    <link rel="stylesheet" type="text/css" href="../css/clouds.css">
    <title><?php echo $PAGE_TITLE;?></title>
</head>
<body id="page">
    <?php include "../templates/global-nav.html.php"; ?>
    <div class="background">
        <h2 class="background-heading">We’re not here to make boring speeches about public goods; we’re here to fund the coolest, most badass projects out there.</h2>
    </div>
    <?php include "../templates/clouds.html.php";?>
    <?php include "../templates/member-form.html.php";?>
    <script src="../js/cloud_mgmt.js"></script>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
        import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-analytics.js";
        const firebaseConfig = {
            apiKey: "AIzaSyD7pM_SPRCiWNtrD4lZrpGmt6WWtG0c77Q",
            authDomain: "pgc-db.firebaseapp.com",
            projectId: "pgc-db",
            storageBucket: "pgc-db.appspot.com",
            messagingSenderId: "297418588201",
            appId: "1:297418588201:web:1fb0bbd85902024ac49c38",
            measurementId: "G-JDPZHN0EK5"
        };
        const app = initializeApp(firebaseConfig);
        let db = getDatabase(app);
        const member_form               = document.querySelector(".member-form");
        const member_submit_button      = document.querySelector("#member-form-submit");
        const confirmation_snackbar     = document.querySelector("#confirm-submit");
        const getAlias  = () => { return document.querySelector("#member-alias").value; }
        const getNumber = () => { return document.querySelector("#member-phone-number").value; }
        member_submit_button.onclick    = (event) => { 
            event.preventDefault();
            const member    = { alias: getAlias(), number: getNumber() }
            let save_user = (alias, phone) => {
                set(ref(db, 'users/' + alias), {
                    alias: alias,
                    phone: phone
                });
            }
            save_user(member.alias, member.number);
            confirmation_snackbar.className  = "show";
            member_form.reset();
            setTimeout( ()=>
            { 
                confirmation_snackbar.className = confirmation_snackbar.className.replace("show", ""); 
            }, 1000);
        }
    </script>
</body>
</html>