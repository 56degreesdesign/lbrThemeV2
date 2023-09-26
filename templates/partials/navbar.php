<?php 
$colour = $args['colour'] ?? 'black';
?>

<div class="w-full <?php echo ($colour === 'black' ? 'bg-beige' : '' ) ?>">
    <div class="container flex justify-between py-8 <?php echo ($colour === 'black' ? 'bg-beige' : '' ) ?>">
        <a class="flex items-center" href="/">
            <?php get_template_part('templates/partials/lbr-logo', null, ['colour' => $colour]) ?>
        </a>
        <div class="toggle-menu txt-h4 cursor-pointer <?php echo ($colour === 'black' ? 'text-black' : 'text-white' ) ?>">MENU</div>
    </div>
</div>
