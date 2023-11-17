<?php
    $section = $args['data'] ?? false;
    $heading = $section['heading'] ?? false;
    $left_col = $section['left_column'] ?? false;
    $right_col = $section['right_column'] ?? false;

    $term_list = get_the_terms($post->ID, 'category');
    $firstTerm = $term_list[0];

    // Custom WP query query_posts
    $args_query_posts = array(
        'post__not_in' => array($post->ID),
        'post_type' => array('blog'),
        'posts_per_page' => 3,
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array($firstTerm->slug),
                'operator' => 'IN',
            ),
        ),
    );
    
    $query_posts = new WP_Query( $args_query_posts );
    
    if ( $query_posts->have_posts() ) :
?>
    <section class="bg-beige pt-11 pb-11 md:pt-16 md:pb-16 lg:pt-20 lg:pb-20">
        <div class="container grid grid-cols-2">
            <h4 class="col-span-full text-center mb-9 md:mb-14 lg:mb-20 txt-h5">MORE TO DISCOVER In <?= $firstTerm->name; ?></h4>
            <div class="col-span-full grid grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-20">
                <?php
                    while ( $query_posts->have_posts() ) {
                        $query_posts->the_post();

                        get_template_part('templates/partials/box-post', null, null);
                    }
                ?>
            </div>
        </div>
    </section>
<?php
    endif;

    wp_reset_postdata();
?>