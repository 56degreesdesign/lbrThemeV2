<?php 
    $term_list = get_the_terms($post->ID, 'category');
    $types ='';
?>
<?php if ( $term_list ) : ?>
<div class="flex gap-x-1 post-terms">
    <?php foreach($term_list as $key=>$term_single) : ?>
        <?php
            // Hiding when there are more than 2 elements 
            $hideTerm = $key > 1 ? 'hidden opacity-0' : null;
        ?>
        <div class="bg-black px-4 pt-1 pb-0.5 text-beige text-10 font-bold uppercase rounded-full transition-opacity duration-300 post-terms__item <?= $hideTerm; ?>"><?= $term_single->slug; ?></div>
    <?php endforeach; ?>
    <?php 
        // Shows when there are more than two elements
        if (count($term_list) > 2) : 
    ?>
        <div class="bg-black px-4 pt-1 pb-0.5 text-beige text-10 font-bold uppercase rounded-full cursor-pointer transition-opacity duration-300 post-terms__btn" aria-label="Show more category">...</div>
    <?php endif; ?>
</div>
<?php endif; ?>