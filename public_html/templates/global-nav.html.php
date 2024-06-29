<!-- global-nav.html.php -->
<?php?>
<nav class="global-navigation">
    <a class="global-nav-link" id="" href="../index.php">home</a>
    <a class="global-nav-link" id="" href="./background.php">background</a>
    <a class="global-nav-link" id="" href="./membership.php">membership</a>
    <a class="global-nav-link" id="not-yet-available" href="" disabled>challenge</a>
    <a class="global-nav-link" id="" target="_blank" href="https://zora.co/collect/base:0xa6735cb18ea3e233c535dacd7276d64db02fd9e3">collectibles</a>
    <a class="global-nav-link" id="" href="./faq.php">faq</a>
    <script>
        document.querySelector("#not-yet-available").onclick = (event) => { event.preventDefault(); }
    </script>
</nav>