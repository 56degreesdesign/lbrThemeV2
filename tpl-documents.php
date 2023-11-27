<?php
/*
* Template Name: Purchaser documents
* Template Post Type: page
*/;


get_header();

get_template_part('templates/sections/documents/documents', null, ['data' => get_field('documents')]);
get_template_part('templates/sections/global/explore', null, ['data' => get_field('explore')['explore']]);

$contact = get_field('contact', 'option');
get_template_part('templates/sections/global/contact', null, ['data' => $contact]);
get_template_part('templates/partials/book-now-bar');

get_footer();