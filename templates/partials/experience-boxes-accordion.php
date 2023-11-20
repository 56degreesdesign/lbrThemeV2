<?php 
$boxes = $args['data'] ?? false;
if($boxes) :
?>

<div class="col-span-full accordion-list-group lg:hidden">
    <?php foreach ($boxes as $box) :?>
        <div class="accordion-list border-orange border-t last-of-type:border-b py-2.5">
            <div class="accordion-list-button flex justify-between items-center relative">
                <div class="wysiwyg no-content text-center w-full px-14"><?php echo $box['content'] ?></div>
                <svg class="absolute right-0 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                    <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                        <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                    </g>
                </svg>
            </div>
            <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                <div class="flex flex-col">
                    <div class="swiper small-carousel relative w-full mt-6 mb-7">
                        <?php (count($box['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                        <div class="swiper-wrapper">
                            <?php foreach ($box['slider'] as $slide) : ?>
                                <div class="swiper-slide h-full w-full">
                                    <div class="relative pb-[64.6%]">
                                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="wysiwyg mb-11 no-heading text-center">
                        <?php echo $box['content'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php endif ;?>