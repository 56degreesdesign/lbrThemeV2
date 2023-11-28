<?php
$section = $args['data'] ?? false;
$anchor = $section['anchor'] ?? false;

?>
<?php if($section) : ?>
<section id="<?php echo $anchor ?>">
    <div id="vue-space" class="map-directions">
        <map-directions section='<?= json_encode($section, JSON_HEX_APOS); ?>'/>
    </div>
</section>
<?php endif ;?>
