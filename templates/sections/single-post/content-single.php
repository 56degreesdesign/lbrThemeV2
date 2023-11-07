<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$show_author = $section['show_author'] ?? false;
$show_share = $section['show_share'] ?? false;
?>

<section>
    <div class="container grid-layout">
        <div class="col-start-1 col-span-2">
          content
        </div>
        <div class="col-start-4 col-span-6">
            <?php echo $content ?>
        </div>
    </div>
</section>
