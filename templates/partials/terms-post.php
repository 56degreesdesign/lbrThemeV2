<?php 
    $term_list = get_the_terms($post->ID, 'category');
    $types ='';
?>
<?php if ( $term_list ) : ?>
<div class="flex flex-wrap gap-1 post-terms">
    <?php foreach($term_list as $key=>$term_single) : ?>
        <?php
            // Hiding when there are more than 2 elements 
            $hideTerm = $key > 1 ? 'hidden opacity-0' : null;
        ?>
        <div class="post-terms__item bg-black px-4 pt-1 pb-1 text-beige font-bold uppercase rounded-full transition-opacity duration-300 text-10 | lg:text-12 <?= $hideTerm; ?>"><?= $term_single->name; ?></div>
    <?php endforeach; ?>
    <?php 
        // Shows when there are more than two elements
        if (count($term_list) > 2) : 
    ?>
        <div class="post-terms__btn bg-black px-4 pt-1 pb-1 text-beige font-bold uppercase rounded-full cursor-pointer transition-opacity duration-300 text-10 | lg:text-12" aria-label="Show more category">...</div>
    <?php endif; ?>
</div>
<?php endif; ?>