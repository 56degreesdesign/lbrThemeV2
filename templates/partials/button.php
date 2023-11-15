<?php
$button = $args['data'] ?? false;
$class = $args['class'] ?? '';
if ( $button && !empty($button['link']['url'])  ) :
    ?>
    <a class="<?php echo ($button['color'] == 'black' ? 'bg-black' : 'bg-orange') ?> uppercase px-5 lg:px-7 xl:px-10 pt-2.5 pb-2 text-14 lg:text-15 text-center text-white font-bold rounded-full hover:opacity-70 duration-300 <?= $class; ?>" href="<?= $button['link']['url']; ?>" target="<?= $button['link']['target']; ?>">
        <?= $button['link']['title']; ?></a>
<?php endif;
// Use this like this
// get_template_part( 'templates/partials/button', null, ['link' => $ACF_BUTTON_CONPNENT, 'class' => 'w-full'] ) ?>