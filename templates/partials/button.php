<?php
$button = $args['data'] ?? false;
$class = $args['class'] ?? '';
if ( $button && !empty($button['link']['url'])  ) :
    ?>
    <a class="<?php echo ($button['color'] == 'black' ? 'btn--black' : 'btn--orange') ?> btn <?= $class; ?>" href="<?= $button['link']['url']; ?>" target="<?= $button['link']['target']; ?>">
        <?= $button['link']['title']; ?></a>
<?php endif;
// Use this like this
// get_template_part( 'templates/partials/button', null, ['link' => $ACF_BUTTON_CONPNENT, 'class' => 'w-full'] ) ?>