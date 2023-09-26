<?php
$section = $args['data'] ?? false;
$by_air = $section['by_air'] ?? false; 
$by_car = $section['by_car'] ?? false;
$image = $section['image'] ?? false;
$content = $section['content'] ?? false;
$heading = $section['heading'] ?? false;

?>
<?php if($section) : ?>
<section id="vue-space" class="map-directions">
    <map-directions section='<?= json_encode($section, JSON_HEX_APOS); ?>'/>
</section>
<?php endif ;?>
