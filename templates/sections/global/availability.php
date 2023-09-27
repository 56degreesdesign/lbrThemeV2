<?php 
$section = $args['data'] ?? false;
?>

<?php if($section) : ?>
    <section id="vue-space" class="resort">
        <div class="bg-beige pt-28 pb-10">
            <resort map='<? echo json_encode($section, JSON_HEX_APOS); ?>'/>
        </div>
    </section>
<?php endif ;?>


