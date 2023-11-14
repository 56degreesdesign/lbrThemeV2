<?php 
    $section = $args['data'] ?? false;
    $content = $section['content'] ?? false;
    $buttons = $section['buttons'] ?? false;
    $image = $section['image'] ?? false;
    $button = $section['button'] ?? false;
?>


<section class="bg-beige pb-16 md:pb-24 lg:pb-32">
    <div class="container grid-layout">
        <div class="col-span-full">
            <iframe class="w-full" src="https://hotels.cloudbeds.com/reservation/cStQ7x?widget=1" frameborder="0" width="100%" scrolling="no" id="cloudbeds"></iframe>
            <!-- Add script to auto-resize the iFrame -->
            <script type="text/javascript" src="https://hotels.cloudbeds.com/widget/iFrameResizer"></script><script>window.iFrameResize({}, '#cloudbeds')</script>
        </div>
    </div>
</section>