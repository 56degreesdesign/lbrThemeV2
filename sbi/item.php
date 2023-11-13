<?php
/**
 * Smash Balloon Instagram Feed Item Template
 * Adds an image, link, and other data for each post in the feed
 *
 * @version 2.9 Instagram Feed by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$classes = SB_Instagram_Display_Elements::get_item_classes( $settings, $post );
$post_id = SB_Instagram_Parse::get_post_id( $post );
$timestamp = SB_Instagram_Parse::get_timestamp( $post );
$media_type = SB_Instagram_Parse::get_media_type( $post );
$permalink = SB_Instagram_Parse::get_permalink( $post );
$maybe_carousel_icon = $media_type === 'carousel' ? SB_Instagram_Display_Elements::get_icon( 'carousel', $icon_type ) : '';
$maybe_video_icon = $media_type === 'video' ? SB_Instagram_Display_Elements::get_icon( 'video', $icon_type ) : '';
$media_url = SB_Instagram_Display_Elements::get_optimum_media_url( $post, $settings, $resized_images );
$media_full_res = SB_Instagram_Parse::get_media_url( $post );
$sbi_photo_style_element = SB_Instagram_Display_Elements::get_sbi_photo_style_element( $post, $settings ); // has already been escaped
$media_all_sizes_json = SB_Instagram_Parse::get_media_src_set( $post, $resized_images );

/**
 * Text that appears in the "alt" attribute for this image
 *
 * @param string $img_alt full caption for post
 * @param array $post api data for the post
 *
 * @since 2.1.5
 */
$img_alt = SB_Instagram_Parse::get_caption( $post, sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ) );
$img_alt = apply_filters( 'sbi_img_alt', $img_alt, $post );

/**
 * Text that appears in the visually hidden screen reader element
 *
 * @param string $img_screenreader first 50 characters for post
 * @param array $post api data for the post
 *
 * @since 2.1.5
 */
$img_screenreader = substr( SB_Instagram_Parse::get_caption( $post, sprintf( __( 'Instagram post %s', 'instagram-feed' ), $post_id ) ), 0, 50 );
$img_screenreader = apply_filters( 'sbi_img_screenreader', $img_screenreader, $post );

?>
<div class="swiper-slide h-full w-full sbi_item testing sbi_type_<?php echo esc_attr( $media_type ); ?><?php echo esc_attr( $classes ); ?>" id="sbi_<?php echo esc_html( $post_id ); ?>" data-date="<?php echo esc_html( $timestamp ); ?>">
    <div class="sbi_photo_wrap w-full">
        <div class="relative bg-blue pb-[100%] mr-4 md:mr-8 xl:mr-[21px]">
            <a class="sbi_photo block absolute top-0 left-0 w-full !h-full" href="<?php echo esc_url( $permalink ); ?>" target="_blank" rel="noopener nofollow" data-full-res="<?php echo esc_url( $media_full_res ); ?>" data-img-src-set="<?php echo esc_attr( sbi_json_encode( $media_all_sizes_json ) ); ?>"<?php echo $sbi_photo_style_element; ?>>
                <svg class="absolute top-3.5 left-3.5" xmlns="http://www.w3.org/2000/svg" width="29.61" height="29.61" viewBox="0 0 29.61 29.61">
                    <g id="Group_125387" data-name="Group 125387" transform="translate(-4.079 -4.079)">
                        <path id="Path_128673" data-name="Path 128673" d="M18.884,6.747c3.953,0,4.421.015,5.983.086a8.2,8.2,0,0,1,2.749.51,4.9,4.9,0,0,1,2.81,2.81,8.194,8.194,0,0,1,.51,2.749c.071,1.561.086,2.029.086,5.983s-.015,4.421-.086,5.983a8.2,8.2,0,0,1-.51,2.749,4.9,4.9,0,0,1-2.81,2.81,8.2,8.2,0,0,1-2.749.51c-1.561.071-2.029.086-5.983.086s-4.422-.015-5.983-.086a8.194,8.194,0,0,1-2.749-.51,4.9,4.9,0,0,1-2.81-2.81,8.2,8.2,0,0,1-.51-2.749c-.071-1.561-.086-2.029-.086-5.983s.015-4.421.086-5.983a8.194,8.194,0,0,1,.51-2.749,4.9,4.9,0,0,1,2.81-2.81,8.194,8.194,0,0,1,2.749-.51c1.561-.071,2.029-.086,5.983-.086m0-2.668c-4.021,0-4.525.017-6.1.089a10.867,10.867,0,0,0-3.594.688,7.571,7.571,0,0,0-4.33,4.33,10.867,10.867,0,0,0-.688,3.594c-.072,1.579-.089,2.083-.089,6.1s.017,4.525.089,6.1a10.867,10.867,0,0,0,.688,3.594,7.571,7.571,0,0,0,4.33,4.33,10.867,10.867,0,0,0,3.594.688c1.579.072,2.083.089,6.1.089s4.525-.017,6.1-.089a10.867,10.867,0,0,0,3.594-.688,7.571,7.571,0,0,0,4.33-4.33,10.867,10.867,0,0,0,.688-3.594c.072-1.579.089-2.083.089-6.1s-.017-4.525-.089-6.1a10.867,10.867,0,0,0-.688-3.594,7.571,7.571,0,0,0-4.33-4.33,10.867,10.867,0,0,0-3.594-.688c-1.579-.072-2.083-.089-6.1-.089Z" fill="#eee3d6"></path>
                        <path id="Path_128674" data-name="Path 128674" d="M134.238,126.635a7.6,7.6,0,1,0,7.6,7.6A7.6,7.6,0,0,0,134.238,126.635Zm0,12.538a4.935,4.935,0,1,1,4.935-4.935A4.935,4.935,0,0,1,134.238,139.173Z" transform="translate(-115.353 -115.353)" fill="#eee3d6"></path>
                        <circle id="Ellipse_19" data-name="Ellipse 19" cx="1.777" cy="1.777" r="1.777" transform="translate(25.011 9.205)" fill="#eee3d6"></circle>
                    </g>
                </svg>
                <span class="sbi-screenreader"><?php echo esc_html( $img_screenreader ); ?></span>
                <?php echo $maybe_carousel_icon; ?>
                <?php echo $maybe_video_icon; ?>
                <img src="<?php echo esc_url( $media_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
            </a>
        </div>
    </div>
</div>