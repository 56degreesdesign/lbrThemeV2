<?php 
$section = $args['data'] ?? false;
$team = $section['team'] ?? false;
$vision = $section['vision'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige pt-44 pb-28">
    <div class="container grid-layout">
      <h4 class="txt-h4 col-span-6 mb-24"><?php echo $vision['label'] ?></h4>
        <h4 class="txt-h4 col-span-6 mb-24"><?php echo $team['label'] ?></h4>
        <div class="col-span-6">
            <p class="txt-1 w-4/6"><?php echo $vision['content'] ?></p>
        </div>
        <div class="col-span-6 flex flex-col gap-y-16">
            <?php foreach ($team['team'] as $item) : ?>
            <div class="flex">
                <h6 class="text-15 font-bold uppercase w-2/6"><?php echo $item['label'] ?></h6>
                <div class="w-4/6">
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
