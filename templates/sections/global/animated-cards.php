<?php 
$section = $args['data'] ?? false;
$cards = $section['cards'] ?? false;
$anchor = $section['anchor'] ?? false;

$counter = 1;

?>

<div id="<?php echo $anchor ?>" class="relative lg:overflow-hidden">
    <div class="sticky top-[64px] bg-beige-light txt-h5 text-center pt-7 md:pt-11 pb-7 z-20 lg:hidden">SUSTAINABILITY<br>
        CONSIDERATIONS</div>
    <div class="cards-animate w-screen">
        <?php foreach ($cards as $key => $card) :?>
        <section data-index="<?= $key; ?>" class="bg-beige-light card-animate__item z-10 lg:overflow-hidden lg:shadow-2xl lg:h-screen <?= $key == 0 ? 'relative' : 'relative lg:absolute w-full top-0 left-0' ?>">
            <div class="container grid-layout lg:h-screen pb-20 lg:py-0">
                <div class="col-span-full flex justify-center lg:hidden">
                    <div class="txt-h5 text-center mb-11 hidden lg:block"><?php echo $card['label'] ?></div>
                </div>
                <div class="col-span-full w-full relative mb-11 -mx-[25px] md:-mx-10 lg:mx-0 lg:mb-0 lg:col-span-6 flex items-center xl:col-span-5">
                    <div class="w-full relative pb-[66.45%] lg:pb-[100vh]">
                        <?php get_template_part('templates/partials/images/image', 'preloaded', ['image' => $card['image'], 'class' => 'w-full']); ?>
                    </div>
                </div>
                <div class="col-span-full mb-10 lg:mb-0 lg:row-start-auto lg:pt-24 lg:col-start-8 lg:col-span-5 xl:col-start-8 xl:col-span-4 wysiwyg flex flex-col items-center justify-center">
                    <div class="txt-h5 mb-5 hidden text-center lg:block lg:mb-7 2xl:mb-10"><?php echo $card['label'] ?></div>
                    <div class="text-orange txt-1 rounded-[50%] w-7 h-7 border border-orange items-center justify-center hidden lg:flex lg:mb-7 2xl:mb-10"><?php echo $counter ?></div>
                    <div class="cards-animate__content text-center">
                        <?php echo $card['content'] ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $counter++; endforeach; ?>
    </div>
</div>


