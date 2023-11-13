<?php
    get_header();
    
    get_template_part('templates/sections/single-post/hero-single', null, null);
?>

<main class="bg-beige-light pt-48 pb-80">
    <div class="container grid-layout">
        <aside class="col-span-full lg:col-span-3 flex flex-col text-17">
            <?php
                $author_id = $post->post_author;
            ?>
            <p class="uppercase mb-14"><strong>by <br><?php the_author_meta( 'display_name', $author_id ); ?></strong></p>
            <p class="uppercase mb-4"><strong>Share</strong></p>
            <?php get_social_share_56('flex flex-col', 'uppercase text-orange', ['email', 'facebook', 'linkedin', 'x']);  ?>
        </aside>
        <article class="col-span-full lg:col-span-6">
            <?php
                if (have_rows('sections')) {
                    while (have_rows('sections')) {
                        the_row();
                
                        $templateName = get_row_layout();
                        $fileName = str_replace('_','-', $templateName);
                        $path = get_template_directory().'/templates/sections/single-post/'.$fileName.'.php';
                        $data = null;
                
                        if ( file_exists($path) ) {
                            $data = get_sub_field($templateName);
                            echo "<!-- ".$fileName." -->";
                            get_template_part('templates/sections/single-post/'.$fileName, null, ['data' => $data]);
                        }
                    }
                }

                get_template_part('templates/sections/single-post/navigation', null, null);
            ?>
        </article>
    </div>
</main>
<?php
    get_template_part('templates/sections/single-post/recent-posts', null, null);
?>
<?php
$explore = get_field('explore', 'option');
$contact = get_field('contact', 'option');
get_template_part('templates/sections/global/explore', null, ['data' => $explore]);
get_template_part('templates/sections/global/contact', null, ['data' => $contact]);


get_footer();