<?php
    $results = [
        ["question"=>"what are public goods?", "answer"=>"Public Goods are things that everyone can use and enjoy, like clean air, parks, public art, and free software. They are available to everyone and using them doesn't take them away from others."],
        ["question"=>"what is pgc?", "answer"=>"We're a community of public goods enthusiasts with this simple mission: fund badass public goods projects. This idea started with <a href='https://x.com/BigTrav205' target='_blank'>Contributor #1</a>, and is being brought to life by <a href='https://w3bbie.xyz/'' target='_blank'>W3bbie</a>."],
        ["question"=>"is this the future of philanthropy?", "answer"=>"yes, pgc is transparent and effective."],
        ["question"=>"how can i support the public goods club?", "answer"=>"you can support PGC by contributing your skills, following us on socials, collecting our free mints, or purchasing a membership token."],
        ["question"=>"how can i become a member?", "answer"=>"purchase a membership token to become a voting member."],
        ["question"=>"how can i obtain a grant?", "answer"=>"once the public goods challenge is announced, submit a proposal for your project idea. voting members of PGC will then decide on grant recipients."],
        ["question"=>"do i need a crypto wallet to buy?", "answer"=>"yes, but we'll handle that for you if you don't have one already thanks to <a href='https://www.coinbase.com/wallet/smart-wallet' target='_blank'>coinbase smart wallet</a>."],
        ["question"=>"what is base?", "answer"=>"<a href='https://www.base.org/'' target='_blank'>base</a> is coinbase's blockchain. also, base simplifies the building of onchain apps. Plus, Coinbase is the gold standard in crypto trustworthiness."]
    ];
    $COUNTER            = 0;

?>
<!DOCTYPE html>
<html>
<head>
     <link rel="icon"        type="image/x-icon" href="../public/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/typeface-lineal.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/global-nav.css">
    <link rel="stylesheet" type="text/css" href="../css/faq.css">
    <link rel="stylesheet" type="text/css" href="../css/member-form.css">
    <link rel="stylesheet" type="text/css" href="../css/clouds.css">
    <title><?php echo $PAGE_TITLE;?></title>
</head>
<body id="page">
    <?php include "../templates/global-nav.html.php"; ?>
    <?php include "../templates/membership-form.html.php"; ?>
    <div class="faqs">
        <?php
            foreach ( $results as $RESULT )
            {
                echo "<div class='faq-container' id='faq-$COUNTER'>";
                    echo "<section class='faq-content' id='faq-question-content-$COUNTER'>";
                        echo "<h2 class='faq-question' id='faq-question-$COUNTER'>" . $RESULT["question"] . "</h2>";
                    echo "</section>";
                    echo "<section class='faq-content' id='faq-answer-content-$COUNTER'>";
                        echo "<p class='faq-answer' id='faq-answer-$COUNTER'>" . $RESULT["answer"] . "</p>";
                    echo "</section>";
                    echo "<div class='overlay' id='faq-overlay'></div>";
                echo "</div>";
                $COUNTER += 1;
            }
        ?>
    </div>
    <?php include "../templates/clouds.html.php";?>
    <?php include "../templates/member-form.html.php";?>
    <script src="../js/cloud_mgmt.js"></script>
    <script>
        const faq_answer_links = document.querySelectorAll(".faq-answer > a");
        faq_answer_links.forEach( (link) => {
            link.className              = "faq-answer-link";
            link.style.textDecoration   = "underline";
            link.style.color            = "inherit";
            link.onmouseover = () => 
            { 
                link.style.background       = "var(--pgc_base_white)";
                link.style.color            = "var(--pgc_blue_main)";
                link.style.textDecoration   = "none";
            };
            link.onmouseout = () => {
                link.style.background       = "none";
                link.style.color            = "var(--pgc_base_white)";
                link.style.textDecoration   = "underline";
            };
        });
    </script>
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