<?php 
$section = $args['data'] ?? false;
$props = json_encode($section, JSON_HEX_APOS);
?>

<?php if($section) : ?>
    <section id="vue-space" class="resort">
        <div class="bg-beige pt-28 pb-10">
            <resort map='<?php echo $props ?>'/>
        </div>
    </section>
<?php endif ;?>


