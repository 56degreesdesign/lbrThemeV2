<?php 
    $section = $args['data'] ?? false;
    $option = $section['option'] ?? false;
    $color = $section['color'] ?? false; // text-orange text-black
    $content = $section['content'] ?? false;
?>

<section class="wysiwyg wysiwyg--single mb-14">
    <blockquote class="<?= $option; ?> <?= 'text-' . $color; ?>">
        <p>“<?= $content ?>”</p>
    </blockquote>
</section>
