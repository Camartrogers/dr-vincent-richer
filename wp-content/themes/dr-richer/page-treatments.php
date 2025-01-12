<?php
get_header();
$hows = get_field('hows');

if( $hows ) {
    // Access the first row
    $first_row = $hows[0];

    // Get the title from the first row
    $first_title = $first_row['title'];
}

?>

    <div 
    x-data="{ beforeNow: 1, sliderTitle: '<?=  $first_title; ?>' }"
    class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5'>
        <section class='mt-14 lg:mt-4'>
            <h2 class="text-[2.5rem] font-manrope leading-tight text-black scroll-reveal"><?= get_field('page_heading'); ?></h2>

            <ul class='grid md:grid-cols-2 list-none gap-x-4 gap-y-5 ml-0 scroll-reveal mt-24'>
            <?php

            // Check rows exists.
            if( have_rows('hows') ):
                $count = 1;
                // Loop through rows.
                while( have_rows('hows') ) : the_row();
                ?>
                    <li class='rounded-[10px] bg-white overflow-hidden grid'>
                        <?php 
                            $images = get_sub_field('images');
                            if( $images ) : ?>
                                    <img src="<?= $images[0]['url'];?>" alt="<?=$images[0]['alt'] ;?>" class='w-full'>
                            <?php endif; ?>
                        <div class='px-8 py-8 text-black font-manrope flex flex-col justify-between'>
                            <div>
                                <p class='font-roboto text-base text-secondary mb-0'><?php echo '0'.$count.'.';?></p>
                            <h3  class='text-2xl font-manrope'><?= get_sub_field('title');?></h3>
                            <div class='text-lg mb-0 [&_a]:underline'><?= get_sub_field('description') ;?></div>
                            </div>
                            <button 
                            @click='beforeNow = <?= $count;?>; sliderTitle = "<?= get_sub_field('title'); ?>"' 
                            class='scroll-to__before-now rounded-full py-2 px-8 uppercase text-primary font-roboto border-primary border-2 transition-all duration-150 hover:bg-blackish hover:text-white hover:border-blackish'>See Results</button>
                        </div>
                    </li>
                <?php
                $count++;
                endwhile;
            endif;?>
            </ul>
        </section>
        <section id='before-now' class="mt-20 lg:mt-[8.75rem]">
            <h2 class='uppercase text-base font-roboto font-bold mb-4'>Results</h2>
            <h3 class='md:text-[2.5rem] font-manrope leading-none text-black mb-10 scroll-reveal'>Before and Now: <span class='text-primary' x-text="sliderTitle"></span></h3>

            <?php 
            if( have_rows('hows') ):
                $count = 1;
                // Loop through rows.
                while( have_rows('hows') ) : the_row();?>
  
            <div 
            x-cloak
            x-show="beforeNow == <?= $count;?>"
            x-transition
            id=''
            class="splide relative before-after" 
            aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                       <?php
                        $imageGallery = get_sub_field('images');

                            for ($i = 1; $i < count($imageGallery); $i += 2) {
                                echo "<li class='splide__slide  overflow-hidden'>";
                            
                                // Output the first image in the pair
                                if (isset($imageGallery[$i])) {
                                    echo "<img src='" . esc_url($imageGallery[$i]['url']) . "' class='rounded-lg mx-auto block mb-8' alt='" . esc_attr($imageGallery[$i]['alt']) . "'>";
                                }
                                
                                // Output the second image in the pair
                                if (isset($imageGallery[$i + 1])) {
                                    echo "<img src='" . esc_url($imageGallery[$i + 1]['url']) . "' class='rounded-lg mx-auto block' alt='" . esc_attr($imageGallery[$i + 1]['alt']) . "'>";
                                }
                                echo "</li>";
                            }
                            $count++;?>
                    </ul>
                </div>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g id="Group_85" data-name="Group 85" transform="translate(-843 -3016)" style="isolation: isolate">
                                <g id="Ellipse_7" data-name="Ellipse 7" transform="translate(843 3016)" fill="none" stroke="#272323" stroke-width="1">
                                <circle cx="20" cy="20" r="20" stroke="none"/>
                                <circle cx="20" cy="20" r="19.5" fill="none"/>
                                </g>
                                <line id="Line_5" data-name="Line 5" y1="10.773" x2="10.773" transform="translate(863 3028.382) rotate(45)" fill="none" stroke="#272323" stroke-width="1"/>
                                <path id="Path_11" data-name="Path 11" d="M0,0,7.544,7.544,0,15.089" transform="translate(863.073 3028.456)" fill="none" stroke="#272323" stroke-width="1"/>
                            </g>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g id="Group_85" data-name="Group 85" transform="translate(-843 -3016)" style="isolation: isolate">
                                <g id="Ellipse_7" data-name="Ellipse 7" transform="translate(843 3016)" fill="none" stroke="#272323" stroke-width="1">
                                <circle cx="20" cy="20" r="20" stroke="none"/>
                                <circle cx="20" cy="20" r="19.5" fill="none"/>
                                </g>
                                <line id="Line_5" data-name="Line 5" y1="10.773" x2="10.773" transform="translate(863 3028.382) rotate(45)" fill="none" stroke="#272323" stroke-width="1"/>
                                <path id="Path_11" data-name="Path 11" d="M0,0,7.544,7.544,0,15.089" transform="translate(863.073 3028.456)" fill="none" stroke="#272323" stroke-width="1"/>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <?php 
                endwhile;
            endif;?>
        </section>
    </div>

</main>
<?php
get_footer();