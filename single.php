<?php
get_header();
if (have_rows('sections')) {
    while (have_rows('sections')) {
        the_row();

        $templateName = get_row_layout();
        $fileName = str_replace('_', '-', $templateName);

        echo "<!-- single/" . $fileName . " -->";

        if (get_row_layout() == 'image_single')
            get_template_part('templates/sections/single-post/image', null, ['data' => get_sub_field('image-single')]);
    }
}
$explore = get_field('explore', 'option');
$contact = get_field('contact', 'option');
get_template_part('templates/sections/global/explore', null, ['data' => $explore]);
get_template_part('templates/sections/global/contact', null, ['data' => $contact]);


get_footer();