<?php
/*
Template Name: Condition
*/
?>
<?php
get_header();
?>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4 grid md:grid-cols-7 xl:grid-cols-6'>
    <article class='col-span-full'>
        <section>
            <h1 class='font-manrope font-light text-4xl md:text-[4.125rem] leading-tight text-black normal-case'>
                <?= the_title(); ?>
            </h1>
                <div class="single-page-article">
                    <?php // Display the post content
                the_content();?>
                </div>
                <?php
                    $parent_id = wp_get_post_parent_id(get_the_ID()); // Get the parent page ID
                    if ($parent_id) {
                        $parent_url = get_permalink($parent_id); // Get the URL of the parent page
                        ?>
                        <div class="flex">
                            <a href="<?=$parent_url ?>" class='rounded-full flex flex-nowrap items-center border border-black py-2 px-5 transition-all duration-150 hover:bg-blackish  group'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.442" height="16.235" viewBox="0 0 16.442 16.235" class='group-hover:stroke-white '>
                            <g id="Group_88" data-name="Group 88" transform="translate(-207.933 507.057) rotate(-135)">
                                <line id="Line_3" class='group-hover:stroke-white ' data-name="Line 3" y1="10.773" x2="10.773" transform="translate(194.5 500.335)" fill="none" stroke="#272323" stroke-width="1"/>
                                <path id="Path_2" class='group-hover:stroke-white ' data-name="Path 2" d="M0,0,7.544,7.544,0,15.089" transform="translate(194.604 500.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                            </g>
                        </svg>
                        <span class='font-roboto uppercase ml-6 text-black group-hover:text-white'>More Conditions</span>
                        </a>
                        </div>
                    <?php
                    }
                    ?>
        </section>
        <?php if (get_field('gallery')) :?>
        <section id='before-now' class="mt-20 ">
            <h2 class='uppercase text-base font-roboto font-bold mb-4'>Results</h2>
            <h3 class='md:text-[2.5rem] font-manrope leading-none text-black mb-10 scroll-reveal'>Before and Now: <span class='text-primary' x-text="sliderTitle"></span> </h3>
            <div 
            id='gallery-slider'
            class="splide relative " 
            aria-label="Sliding Image Carousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        $imageGallery = get_field('gallery');

                            for ($i = 0; $i < count($imageGallery); $i++) {
                                echo "<li class='splide__slide overflow-hidden'>";
                            
                                // Output the first image in the pair
                                if (isset($imageGallery[$i])) {
                                    echo "<img src='" . esc_url($imageGallery[$i]['url']) . "' class='rounded-lg mx-auto block' alt='" . esc_attr($imageGallery[$i]['alt']) . "'>";
                                }
                                echo "</li>";
                            }?>
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
        </section>
        <?php endif;?>
    </article>
</section>
</main>
<?php
get_footer();