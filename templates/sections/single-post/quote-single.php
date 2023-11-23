<?php 
    $section = $args['data'] ?? false;
    $option = $section['option'] ?? false;
    $color = $section['color'] ?? false; // text-orange text-black
    $content = $section['content'] ?? false;
?>

<section class="wysiwyg wysiwyg--single mb-11 | xl:mb-14">
    <blockquote class="<?= $option; ?> <?= 'text-' . $color; ?>">
        <span class="<?= $option === 'big' ? 'txt-h2' : ''; ?>">“<?= $content ?>”</span>
    </blockquote>
</section>
