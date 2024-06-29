<div class="billboard">
    <div class="bb-outer">
      <div class="bb-container">
        <div class="bb-front"></div>
        <div class="bb-side-left"></div>
        <div class="bb-side-right"></div>
        <div class="bb-top"></div>
        <div class="bb-bottom"></div>
        <div class="bb-back"></div>
      </div>
    </div>
    <script>
        const bb_rotate_point = document.querySelector(".bb-outer");
        const billboard = document.querySelector(".billboard");
        window.onmousemove = (event) => 
        {
            bb_rotate_point.style.transform = `rotateX(${event.clientX / 8}deg) rotateY(-179deg) rotateZ(${event.clientY / 8}deg)`;
        }
        window.onwheel = (event) => 
        {
          
          billboard.style.scale = `${ 0.72 + event.deltaY * 0.003 }`;
        }
    </script>
</div>