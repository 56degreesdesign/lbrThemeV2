<?php 
    $section = $args['data'] ?? false;
    $content = $section['content'] ?? false;
?>

<section class="wysiwyg wysiwyg--single mb-11 | xl:mb-14">
    <?php echo $content ?>
</section>
