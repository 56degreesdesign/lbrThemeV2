<?php 
$section = $args['data'] ?? false;
$team = $section['team'] ?? false;
$vision = $section['vision'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige pt-24 pb-12 md:pt-28 md:pb-16 lg:pt-32 lg:pb-20 xl:pt-44 xl:pb-28">
    <div class="container grid-layout">
        <?php if($vision['label']) :?>
            <h4 class="txt-h4 col-span-full mb-8 lg:col-span-6 lg:mb-16 xl:mb-24"><?php echo $vision['label'] ?></h4>
        <?php endif ;?>
        <?php if($team['label']) :?>
            <h4 class="txt-h4 col-span-full mb-8 lg:mb-16 lg:col-span-6 xl:mb-24"><?php echo $team['label'] ?></h4>
        <?php endif ;?>
        <?php if($vision['content']) :?>
            <div class="col-span-full row-start-2 mb-8 lg:mb-0 lg:row-start-auto lg:col-span-6">
                <p class="txt-1 lg:w-4/6"><?php echo $vision['content'] ?></p>
            </div>
        <?php endif ;?>
        <div class="col-span-full flex flex-col gap-y-8 lg:gap-y-12 lg:col-span-6 xl:gap-y-16">
            <?php foreach ($team['team'] as $item) : ?>
            <div class="flex flex-col lg:flex-row">
                <h6 class="text-15 font-bold uppercase mb-4 lg:mb-0 lg:w-2/6"><?php echo $item['label'] ?></h6>
                <div class="lg:w-4/6">
                    <?php if ($item['logo']) : ?> 
                    <div class="mb-5">
                        <img src="<?php echo $item['logo']['url'] ?>" alt="">
                    </div>
                    <?php endif ;?>
                    <div class="wysiwyg">
                        <?php echo $item['content'] ?>
                    </div>
                </div>

            </div>
            <?php endforeach ;?>
        </div>
    </div>
</section>
<?php endif ;?>
