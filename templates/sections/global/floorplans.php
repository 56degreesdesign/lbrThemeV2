<?php 
$section = $args['data'] ?? false;
if($section) :
?>

<section id="vue-floor" class="floorplans">
    <floorplans section='<?= json_encode($section, JSON_HEX_APOS); ?>'/>
</section>

<?php endif ;?>