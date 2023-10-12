<?php 
$section = $args['data'] ?? false;
$props = json_encode($section, JSON_HEX_APOS);
?>

<?php if($section) : ?>
    <section id="vue-space" class="resort">
        <div class="bg-beige pb-10 pt-14 md:pt-20 lg:pt-24 xl:pt-28">
            <resort map='<?php echo $props ?>'/>
        </div>
    </section>
<?php endif ;?>


