<?php 
$data = $args['data'] ?? false;
$section = get_field('availability_global', 'option') ?? false;
$anchor = $data['anchor'] ?? false;

$interactive = $data['interactive'] ?? false;
$settings = json_encode($data, JSON_HEX_APOS);
$props = json_encode($section, JSON_HEX_APOS);
?>

<?php if($section && $interactive) : ?>
    <section id="vue-space" class="resort">
        <div class="bg-beige min-[700px]:py-10 md:pt-20 lg:pb-10 lg:pt-24 xl:pt-28">
            <resort map='<?php echo $props ?>' settings='<?php echo $settings ?>'/>
        </div>
    </section>
<?php endif ;?>

<?php if($data && !$interactive) :?> 
<section id="<?php echo $anchor ?>" class="bg-beige pt-16 pb-72  lg:pt-28 lg:pb-16 min-[700px]:h-auto min-[700px]:py-14">
    <div class="container grid-layout">
        <h3 class="col-span-full text-center lg:text-left lg:col-start-1 lg:col-span-3 txt-h3 mb-10 lg:mb-10 xl:mb-14 xl:mt-6 xl:col-span-3"><?php echo $data['heading'] ?></h3>
        <div class="col-span-full flex flex-col items-center justify-center min-[700px]:hidden">
            <svg class="mt-32" xmlns="http://www.w3.org/2000/svg" width="99" height="78.081" viewBox="0 0 99 78.081">
                <g id="Rotate_Device_Icon" data-name="Rotate Device Icon" transform="translate(0 0.081)">
                    <g id="Rectangle_336" data-name="Rectangle 336" fill="none" stroke="#565d45" stroke-width="1">
                        <rect width="44" height="78" rx="10" stroke="none"/>
                        <rect x="0.5" y="0.5" width="43" height="77" rx="9.5" fill="none"/>
                    </g>
                    <g id="Rectangle_337" data-name="Rectangle 337" transform="translate(99 34) rotate(90)" fill="none" stroke="#565d45" stroke-width="1">
                        <rect width="44" height="78" rx="9" stroke="none"/>
                        <rect x="0.5" y="0.5" width="43" height="77" rx="8.5" fill="none"/>
                    </g>
                    <g id="Group_5764" data-name="Group 5764" transform="translate(60.071 0.419)">
                        <path id="Path_8170" data-name="Path 8170" d="M8577.93,7070.158l-4.5,4.5-4.5-4.5" transform="translate(-8559.41 -7056.032)" fill="none" stroke="#565d45" stroke-width="1"/>
                        <path id="Path_8171" data-name="Path 8171" d="M8569.625,7065.454s1.493-13.208-14.146-13.208" transform="translate(-8555.479 -7052.246)" fill="none" stroke="#565d45" stroke-width="1"/>
                    </g>
                </g>
            </svg>
            <p class="text-center mt-6">TO VIEW AVAILABILITY MAP PLEASE ROTATE DEVICE INTO LANDSCAPE ORIENTATION OR FOR FULL EXPERIENCE VISIT DESKTOP VARIANT</p>
            
        </div>
        <div class="col-span-full lg:col-start-1 lg:col-span-2 hidden min-[700px]:block">
            <p class="mb-8 hidden xl:block"><?php echo $data['subheading'] ?></p>
            <div class="flex gap-x-5 justify-center mb-10 lg:mb-0 lg:flex-col gap-y-3">
                <?php foreach ($data['buttons'] as $button) : ?>
                   <?php get_template_part('templates/partials/button', null, ['data' => $button['button'], 'class' => 'w-fit btn--desktop-narrow']); ?>
                <?php endforeach; ?>
            </div>
            <img class="mt-24 max-w-[212px] hidden lg:block" src="<?php echo $section['legend']['url']?>" alt="">
        </div>
        <div class="col-span-1 md:col-span-3 flex items-end lg:hidden">
            <img class="max-w-[150px] hidden min-[700px]:block" src="<?php echo $section['legend']['url']?>" alt="">
        </div>
        <div class="col-span-3 pl-5 md:pl-0 md:col-start-4 md:col-span-9 2xl:row-start-1 2xl:row-span-2 hidden min-[700px]:block">
            <?php get_template_part('templates/partials/map-phase-all'); ?>
        </div>
    </div>
</section>
<?php endif ;?>
