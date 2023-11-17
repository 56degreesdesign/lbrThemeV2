<?php
    $section = $args['data'] ?? false;
    $heading = $section['heading'] ?? false;
    $posts = $section['posts'] ?? false;

    $args_query = array(
        'post_type' => 'blog',
        'post_status' => array('publish'),
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
    );
    
    $query = new WP_Query($args_query);
    $posts = [];
    
    if ($query->have_posts()) {
        $terms = [];
    
        $terms = get_terms('category', [
            'hide_empty' => true,
        ]);
    
        while ($query->have_posts()) {
            $query->the_post();
    
            $posts[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'image' => featuredImageToAcfImage(get_post_thumbnail_id()),
                'link' => get_the_permalink(),
                'date' => get_the_date( 'F j, Y' ),
                'terms' => wp_get_post_terms(get_the_ID(), 'category')
            ];
        }
        wp_reset_postdata();
    }
?>
<?php if ( $section ) : ?>
<section id="vue-space" class="list-of-posts bg-beige pt-11 pb-24 md:py-24 lg:py-32 xl:py-40">
    <div class="container grid-layout">
        <h2 class="col-span-full txt-h2 text-center mb-10 md:mb-20 lg:mb-24 xl:mb-28"><?= $heading; ?></h2>
        <list-of-posts 
            pagination='3'
            terms='<?= json_encode($terms, JSON_HEX_APOS); ?>'
            posts='<?= json_encode($posts, JSON_HEX_APOS); ?>'
        >
        </list-of-posts>
    </div>
</section>
<?php endif; ?>