<?php
get_header();
if ( have_rows('sections') ) {
    while ( have_rows('sections') ) {
        the_row();
        $templateName = get_row_layout();
        $fileName = str_replace('_','-', $templateName);
        $path = get_template_directory().'/templates/sections/global/'.$fileName.'.php';
        $data = null;

        if ( file_exists($path) ) {
            $data = get_sub_field($templateName);

            echo "<!-- ".$fileName." -->";
            get_template_part('templates/sections/global/'.$fileName, null, ['data' => $data]);
        }
//            else {
//                echo "<p style='color: red;'>no find file: ".$fileName." in template: ".$templateName."</p>";
//            }
    }
}
$explore = get_field('explore', 'option');
$contact = get_field('contact', 'option');
get_template_part('templates/sections/global/explore', null, ['data' => $explore]);
get_template_part('templates/sections/global/contact', null, ['data' => $contact]);


get_footer();