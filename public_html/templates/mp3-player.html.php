<?php
    $KEY_TRACK_PATH = "./public/media/audio/Stay_Based_My_Friends.mp3";
?>
<div class="mp3-player">
    <h4 class="mp3-track-title">
        <a 
            href="https://zora.co/collect/base:0xa6735cb18ea3e233c535dacd7276d64db02fd9e3/3" 
            target="_blank"
            class="mp3-player-link"
            id="soundcloud-link">
            Stay Based My Friends
        </a>
    </h4>
    <button class="mp3-control" id="play">&#9834; play </button>
    <button class="mp3-control" id="stop">&#9632; stop</button>
    <audio class="" id="">
            <source 
                id="key-track"
                src="./public/media/audio/Stay_Based_My_Friends.mp3" 
                type="audio/mpeg">
                Your browser does not support the audio element.
    </audio>
    <script>
        const audio = new Audio("<?php echo $KEY_TRACK_PATH; ?>");
        const play_button = document.querySelector( "#play" );
        const stop_button = document.querySelector( "#stop" );
        play_button.onclick = () => {
            audio.volume = 0.3;
            audio.play();
        };
        stop_button.onclick = () => {
            audio.pause();
            audio.load();
        };
    </script>
</div>