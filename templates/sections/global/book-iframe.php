<?php 
    $section = $args['data'] ?? false;
    $content = $section['content'] ?? false;
    $buttons = $section['buttons'] ?? false;
    $image = $section['image'] ?? false;
    $button = $section['button'] ?? false;
?>


<section class="bg-beige pb-20 md:pb-24 2lg:pb-32">
    <div class="container grid-layout">
        <div class="col-span-full">
            <?php
                /*
                 * #room_type=DK - https://myfrontdesk.cloudbeds.com/hc/en-us/articles/115004684433-How-to-redirect-your-guests-to-a-particular-room-type-and-or-rate-plan-in-mybookings-#room-type
                 */
            ?>
            <iframe class="w-full" src="https://hotels.cloudbeds.com/reservation/uWGSeO?widget=1#room_type=DQ;DK" frameborder="0" width="100%" scrolling="no" id="cloudbeds"></iframe>
            <!-- Add script to auto-resize the iFrame -->
            <script type="text/javascript" src="https://hotels.cloudbeds.com/widget/iFrameResizer"></script><script>window.iFrameResize({}, '#cloudbeds')</script>
        </div>
    </div>
</section>