<?php 
$section = $args['data'] ?? false;
$cards = $section['cards'] ?? false;
$anchor = $section['anchor'] ?? false;

$counter = 1;

?>

<div id="<?php echo $anchor ?>" class="relative overflow-hidden">
    <div class="cards-animate w-screen">
        <?php foreach ($cards as $key => $card) :?>
        <section data-index="<?= $key; ?>" class="bg-beige-light card-animate__item z-10 lg:overflow-hidden lg:shadow-2xl lg:h-screen <?= $key == 0 ? 'relative' : 'relative lg:absolute w-full top-0 left-0' ?>">
                <div class="container grid-layout lg:h-screen py-10 lg:py-28">
                    <div class="col-span-full flex justify-center lg:hidden">
                        <div class="txt-h5 mb-11"><?php echo $card['label'] ?></div>
                    </div>
                    <div class="col-span-full w-full relative pb-[66.45%] mb-7 lg:mb-0 lg:col-span-5 lg:pb-[118%]">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $card['image'], 'class' => 'w-full']); ?>
                    </div>
                    <div class="col-span-full mb-10 lg:mb-0 lg:row-start-auto lg:col-start-7 lg:col-span-5 xl:col-start-8 xl:col-span-4 wysiwyg flex flex-col items-center justify-center">
                        <div class="txt-h5 mb-5 hidden lg:block lg:mb-10 xl:mb-14"><?php echo $card['label'] ?></div>
                        <div class="text-orange txt-1 rounded-[50%] w-7 h-7 border border-orange items-center justify-center hidden lg:flex lg:mb-10 xl:mb-14"><?php echo $counter ?></div>
                        <div class="text-center">
                            <?php echo $card['content'] ?>
                        </div>
                    </div>
                </div>
                <?php
                $counter++;
            endforeach; ?>
        </section>
    </div>
</div>


