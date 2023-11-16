<section class="flex justify-between uppercase text-12 | lg:text-20">
    <div class="grid grid-cols-2 gap-x-4 xl:gap-x-12">
        <?php
            $next_post = get_adjacent_post(false, '', false);
            $classNext = empty($next_post) ? 'pointer-events-none cursor-default opacity-50' : null;
            $hrefNext = !empty($next_post) ? get_permalink($next_post->ID) : '';
            echo '<a class="' . $classNext . '" href="' . $hrefNext . '" title="PREVIOUS"><strong>PREVIOUS</strong></a>';
            
            $prev_post = get_adjacent_post(false, '', true);
            $classPrev = empty($prev_post) ? 'pointer-events-none cursor-default opacity-50' : '';
            $hrefPrev = !empty($prev_post) ? get_permalink($prev_post->ID) : '';
            echo '<a class="' . $classPrev . '" href="' . $hrefPrev . '" title="NEXT"><strong>NEXT</strong></a>';
        ?>
    </div>
    <div>
        <a href="/blog/" title="RETURN TO ALL"><strong>RETURN TO ALL</strong></a>
    </div>
</section>