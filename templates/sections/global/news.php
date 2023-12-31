<?php 
$section = $args['data'] ?? false;

$args_query = array(
    'post_type' => 'newsandevents',
    'post_status' => array('publish'),
    'posts_per_page' => -1,
    'order' => 'DESC',
);

$query = new WP_Query($args_query);
$posts = [];

if ($query->have_posts()) {
    $terms = [];
    $terms = get_terms('years');
//    usort($terms, function($a, $b) {
//        return strcmp($a->name, $b->name);
//    });

    while ($query->have_posts()) {
        $query->the_post();

        $posts[] = [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'link' => get_the_permalink(),
            'data' => get_field('section'),
            'terms' => wp_get_post_terms(get_the_ID(), 'years'),
        ];
    }
    wp_reset_postdata();
}


?>
<?php if(count($posts) > 0) :?>
<section id="vue-space" class="news-and-events">
    <news-and-events posts='<?= json_encode($posts, JSON_HEX_APOS); ?>' terms='<?= json_encode($terms, JSON_HEX_APOS); ?>'/>
</section>
<?php endif ;?>


