<?php 
$section = $args['data'] ?? false;
$team = $section['team'] ?? false;
$content = $section['content'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige pt-24 pb-20 md:pt-28 md:pb-26 lg:pt-32 lg:pb-40 xl:pt-44 xl:pb-52">
    <div class="container grid-layout">
        <?php if($content) :?>
        <div class="col-span-full wysiwyg text-center mb-20"><?php echo $content ?></div>
        <?php endif ;?>
        <div class="col-span-full grid grid-cols-2 gap-x-14 gap-y-28">
            <?php foreach ($team as $item) : ?>
            <div class="flex flex-col lg:flex-row col-span-1">
                <h6 class="text-15 font-bold uppercase mb-4 lg:mb-0 lg:w-2/6"><?php echo $item['label'] ?></h6>
                <div class="lg:w-4/6">
                    <?php if ($item['logo']) : ?> 
                    <div class="mb-5 min-h-[29px]">
                        <img class="max-h-10" src="<?php echo $item['logo']['url'] ?>" alt="">
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
