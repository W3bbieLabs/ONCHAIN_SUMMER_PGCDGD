<?php 
    $MESSAGE = "Hey, " . getenv("REMOTE_ADDR") . " welcome to ";
?>
<div class="hot-items">
    <section class="hot-nav">
    <h1 class="platform-title"><?php echo $PLATFORM_TITLE; ?></h1>
    
    <details>
        <summary class="hot-items-heading">Explore Here</summary>
        <section class="social-links-navigation" id="main-links">
            <a class="hot-items-link" id="" href="./index.php">home</a>
            <a class="hot-items-link" id="" href="./pages/background.php">background</a>
            <a class="hot-items-link" id="" href="./pages/membership.php">membership</a>
            <a class="hot-items-link" id="not-yet-available" href="" disabled>challenge</a>
            <a class="hot-items-link" id="" target="_blank" href="https://zora.co/collect/base:0xa6735cb18ea3e233c535dacd7276d64db02fd9e3">collectibles</a>
            <a class="hot-items-link" id="" href="./pages/faq.php">faq</a>
            <script>
                document.querySelector("#not-yet-available").onclick = (event) => { event.preventDefault(); }
            </script>
        </section>
    </details>

    <details>
        <summary class="hot-items-heading">outbound links</summary>
        <section class="social-links-navigation" id="outbound-links">
            <a class="hot-items-link" href="https://mirror.xyz/bigtrav.eth/_GeVdMm8DSEIS36EwbqlGCljoddrVgvK69kq62uRCHc" target="_blank">the bluest paper ever written</a>
            <a class="hot-items-link" href="https://x.com/publicgoodsclub?s=21" target="_blank">blue checks and facts</a>
            <a class="hot-items-link" href="https://www.instagram.com/publicgoodsclub?igsh=MWtjazg2OW8weDA5aA==" target="_blank">feed land</a>
            <a class="hot-items-link" href="mailto:publicgoodsclub@gmail.com" target="_blank">email</a>
        </section>
    </details>

    <details>
        <summary class="hot-items-heading">updates</summary>
         <section class="social-links-navigation" id="recent-updates">
            <p class="update" id="">held twitter spaces on 17 june</pi>
            <p class="update" id="">achieved first 100 followers</pi>
            <p class="update" id="">accepted into nights/weekend season 5</p>
        </section>
    </details>
</div>