<?php 
$section = $args['data'] ?? false;
$cards = $section['cards'] ?? false;
$counter = 1;
?>

<section class="bg-beige-light">
    <?php foreach ($cards as $card) :?>
    <div class="container grid-layout h-screen py-28">
        <div class="col-span-5 relative pb-[118%] w-full">
            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $card['image'], 'class' => 'w-full']); ?>
        </div>
        <div class="col-start-8 col-span-4 wysiwyg flex flex-col items-center justify-center">
            <div class="txt-h5 mb-14"><?php echo $card['label'] ?></div>
            <div class="text-orange txt-1 rounded-[50%] w-7 h-7 border border-orange flex items-center justify-center mb-14"><?php echo $counter ?></div>
            <?php echo $card['content'] ?></div>
    </div>
    <?php 
        $counter++; 
        endforeach; ?>
</section>