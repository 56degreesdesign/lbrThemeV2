<?php
function get_social_share_56(string $class, string $linkClass, array $socials, string $heading = '')
{
    // Get current page URL
    $crunchifyURL = urlencode(get_permalink());

    // Get current page title
    $crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    // URL arrays
    $socialUrls = array(
        'email'    => 'mailto:?subject=' . $crunchifyTitle . '&body=' . $crunchifyURL,
        'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . $crunchifyURL . '&amp;title=' . $crunchifyTitle,
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $crunchifyURL,
        'x'  => 'https://twitter.com/intent/tweet?text=' . $crunchifyTitle . '&amp;url=' . $crunchifyURL . '&amp;via=Crunchify',
    );

    // Add sharing button at the end of page/page content
    echo '<div class="' . $class . '">';

    if ($heading !== '') {
        echo '<span class="' . $class . '__heading">' . $heading . '</span>';
    }
    
    foreach ($socialUrls as $social => $url) {
        if (in_array(strtolower($social), $socials)) {
            // Output clickable icon and link to the social sharing URL with inline CSS for width and height
            echo '<a class="' . $linkClass . ' ' . $social . '" href="' . esc_url($url) . '" target="_blank">';
            echo '<strong>' . $social . '</strong>';
            echo '</a>';
        }
    }

    echo '</div>';
}
