<?php
/*
Template Name: Bonjour
*/
?>
<?php
get_header();
?>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4 grid md:grid-cols-7 xl:grid-cols-6 mt-14'>
    <div class="md:col-start-3 md:col-span-5 xl:col-start-3 xl:col-span-4 overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('banner');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
    </div>

    <section class='md:col-span-6 xl:col-span-5 flex flex-col mt-10 md:mt-0'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="24.094" viewBox="0 0 36 24.094">
            <defs>
                <clipPath id="clip-path">
                <rect id="Rectangle_322" data-name="Rectangle 322" width="36" height="24.093" fill="#8f8e70"/>
                </clipPath>
            </defs>
            <g id="Group_65" data-name="Group 65" transform="translate(0 0)">
                <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                <path id="Path_9" data-name="Path 9" d="M15.9,15.735c.774,4.332-2.552,8.355-8.122,8.355S-.814,16.741.191,10.4C1.124,4.512,7.512.827,12.137.012a.825.825,0,0,1,.954.671A.8.8,0,0,1,13.1.9l-.165,1.952a.805.805,0,0,1-.648.736c-4.987.846-7.954,8.32-4.9,7.425,3.171-.927,7.735.393,8.509,4.722m19.993,0c-.774-4.332-5.338-5.647-8.51-4.719-3.052.893-.082-6.581,4.9-7.425a.805.805,0,0,0,.648-.736L33.093.9a.825.825,0,0,0-.746-.9.837.837,0,0,0-.218.009C27.5.829,21.116,4.516,20.183,10.4c-1.006,6.343,2.011,13.694,7.581,13.694s8.9-4.026,8.124-8.358" transform="translate(0 0)" fill="#8f8e70"/>
                </g>
            </g>
        </svg> 
        <blockquote class='leading-tight mt-14 mb-12 md:mb-6 font-light font-manrope text-4xl md:text-[4.125rem] text-blackish scroll-reveal'>
            <?= get_field('main_heading') ;?>
        </blockquote>
        <svg class='ml-auto' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="24.094" viewBox="0 0 36 24.094">
            <defs>
                <clipPath id="clip-path">
                <rect id="Rectangle_322" data-name="Rectangle 322" width="36" height="24.093" fill="#8f8e70"/>
                </clipPath>
            </defs>
            <g id="Group_66" data-name="Group 66" transform="translate(36 24.094) rotate(180)">
                <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                <path id="Path_9" data-name="Path 9" d="M15.9,15.735c.774,4.332-2.552,8.355-8.122,8.355S-.814,16.741.191,10.4C1.124,4.512,7.512.827,12.137.012a.825.825,0,0,1,.954.671A.8.8,0,0,1,13.1.9l-.165,1.952a.805.805,0,0,1-.648.736c-4.987.846-7.954,8.32-4.9,7.425,3.171-.927,7.735.393,8.509,4.722m19.993,0c-.774-4.332-5.338-5.647-8.51-4.719-3.052.893-.082-6.581,4.9-7.425a.805.805,0,0,0,.648-.736L33.093.9a.825.825,0,0,0-.746-.9.837.837,0,0,0-.218.009C27.5.829,21.116,4.516,20.183,10.4c-1.006,6.343,2.011,13.694,7.581,13.694s8.9-4.026,8.124-8.358" transform="translate(0 0)" fill="#8f8e70"/>
                </g>
            </g>
        </svg>
    </section>

    <section class='col-span-full grid md:grid md:grid-cols-2 mt-28 md:mt-48 gap-x-4'>
        <h2 class='text-base font-mono mb-7 uppercase col-span-full'>Bonjour</h2>
        <h3 class='font-manrope text-blackish col-span-full leading-none scroll-reveal'><?= get_field('about_heading');?></h3>
        <div class='font-manrope text-blackish'>
            <?= get_field('about_column_1');?>
        </div>
        <div class='font-manrope flex h-full items-end text-blackish'>
            <?= get_field('about_column_2');?>
        </div>
        <div></div>
        <a class='uppercase border border-blackish text-blackish flex justify-between font-roboto rounded-full px-2 my-10 transition-all duration-150 hover:bg-blackish hover:text-white ' href="<?= get_field('publications_link');?>">
            See Publications
            <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                    <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                    <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                </g>
            </svg>
        </a>
        <div class='text-blackish font-manrope md:hidden'>
            <?= get_field('about_column_3');?>
        </div>
        <div>
            <?php $image = get_field('about_image');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='md:w-2/3 rounded-lg scroll-reveal'>
        </div>
        <div class='text-blackish font-manrope hidden md:block'>
            <?= get_field('about_column_3');?>
        </div>
    </section>
    <section class='md:col-span-7 xl:col-span-6 grid md:grid-cols-7 xl:grid-cols-6 mt-20 md:mt-32'>
        <h2 class='md:col-span-full text-blackish font-manrope text-[2.5rem] mb-5 md:mb-14 scroll-reveal'><?= get_field('credentials_section_title');?></h2>
        <ul class='md:col-span-full grid md:grid-cols-2 gap-4 list-none ml-0'>
            <?php if( have_rows('affiliations') ):
            while( have_rows('affiliations') ) : the_row(); ?>
                <li class='border border-blackish rounded-lg px-4 flex flex-col items-center justify-between <?php if (get_sub_field('full_width')){ 
                    echo 'col-span-full py-4'; } else { echo 'pt-8 pb-4';};?>'>
                    <?php
                    if (get_sub_field('logo')): 
                        $image = get_sub_field('logo');?>
                        <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='mb-7'>
                    <?php endif;?>
                    <p class='text-blackish text-center font-manrope'><?= get_sub_field('title')?></p>
                </li>
            <?php endwhile;
            endif;?>
        </ul>
        <div class='relative border border-blackish rounded-lg md:col-span-7 xl:col-span-6 pt-20 pb-[6.25rem]'>
            <h3 class='absolute text-center w-full bottom-8 text-blackish text-base font-manrope m-0 font-medium'>Consultant</h3>
            <ul class='grid md:grid-cols-2 lg:grid-cols-3 gap-y-12 gap-x-6  list-none  '>
                
                <?php if( have_rows('partnerships') ):
                    while( have_rows('partnerships') ) : the_row(); ?>
                    <li class='flex  items-center justify-center'>
                        <?php $image = get_sub_field('logo');?>
                        <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class=''>
                    </li>
                    <?php endwhile;
                endif;?>
            </ul>
        </div>
    </section>
    <section class='md:col-span-7 xl:col-span-6 mt-20 md:mt-32'>
        <h2 class='text-base font-mono mb-4 md:mb-7 uppercase col-span-full'>Reviews</h2>
        <h3 class='md:text-[2.5rem] font-manrope leading-none text-black mb-9 md:mb-10 scroll-reveal'><?= get_field('testimonials_heading');?></h3>
                <div id='testimonials' class="splide relative hidden md:block" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'testimonials'
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <li class="splide__slide">
                                    <div class='bg-white p-8 rounded-lg h-full w-full flex flex-col justify-between'>
                                        <!-- 5 STARS -->
                                        <div class='flex flex-row flex-nowrap justify-center space-x-1'>
                                            <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                                </g>
                                            </svg>
                                            <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                                </g>
                                            </svg>
                                            <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                                </g>
                                            </svg>
                                            <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                                </g>
                                            </svg>
                                            <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class='flex flex-col justify-between flex-grow pt-8'>
                                            <svg id="Group_71" data-name="Group 71" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.413" height="15" viewBox="0 0 22.413 15">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_322" data-name="Rectangle 322" width="22.413" height="15" fill="#272323"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                    <path id="Path_9" data-name="Path 9" d="M9.9,9.8c.482,2.7-1.589,5.2-5.057,5.2S-.507,10.422.119,6.472C.7,2.809,4.677.515,7.556.008a.514.514,0,0,1,.594.418.5.5,0,0,1,.006.136l-.1,1.215a.5.5,0,0,1-.4.458C4.545,2.761,2.7,7.414,4.6,6.856,6.573,6.279,9.414,7.1,9.9,9.8m12.447,0c-.482-2.7-3.323-3.516-5.3-2.938-1.9.556-.051-4.1,3.051-4.622a.5.5,0,0,0,.4-.458L20.6.563A.514.514,0,0,0,20.138,0,.521.521,0,0,0,20,.01c-2.879.506-6.856,2.8-7.437,6.465C11.939,10.423,13.818,15,17.285,15s5.539-2.506,5.058-5.2" transform="translate(0 0)" fill="#272323"/>
                                                </g>
                                            </svg>
                                            <p class='font-manrope text-blackish px-6 py-5'><?=  get_field('testimonial'); ?></p>
                                            <svg class='ml-auto' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.413" height="15" viewBox="0 0 22.413 15">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_322" data-name="Rectangle 322" width="22.413" height="15" fill="#272323"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_74" data-name="Group 74" transform="translate(22.413 15) rotate(180)">
                                                    <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                    <path id="Path_9" data-name="Path 9" d="M9.9,9.8c.482,2.7-1.589,5.2-5.057,5.2S-.507,10.422.119,6.472C.7,2.809,4.677.515,7.556.008a.514.514,0,0,1,.594.418.5.5,0,0,1,.006.136l-.1,1.215a.5.5,0,0,1-.4.458C4.545,2.761,2.7,7.414,4.6,6.856,6.573,6.279,9.414,7.1,9.9,9.8m12.447,0c-.482-2.7-3.323-3.516-5.3-2.938-1.9.556-.051-4.1,3.051-4.622a.5.5,0,0,0,.4-.458L20.6.563A.514.514,0,0,0,20.138,0,.521.521,0,0,0,20,.01c-2.879.506-6.856,2.8-7.437,6.465C11.939,10.423,13.818,15,17.285,15s5.539-2.506,5.058-5.2" transform="translate(0 0)" fill="#272323"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            // Restore original Post Data
                            wp_reset_postdata();
                        }
                        ?>
                    </ul>
                </div>

            <div class="splide__arrows relative !bottom-0">
                <a href="<?= get_field('rate_my_md', 'options') ?>" class='uppercase font-roboto text-blackish px-2 rounded-full border border-blackish hidden w-72 md:flex flex-nowrap justify-between absolute left-0 top-0 transition-all duration-150 hover:bg-blackish hover:text-white'>
                    <span>Read More Reviews</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                        <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                            <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                            <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                        </g>
                    </svg>
                </a>
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
        <div class='grid grid-cols-1 gap-y-6 auto-rows-fr md:hidden'>
            <?php
                $args = array(
                    'posts_per_page' => 2,
                    'post_type'      => 'testimonials'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                            <article class='bg-white p-8 rounded-lg h-full w-full flex flex-col justify-between'>
                                <!-- 5 STARS -->
                                <div class='flex flex-row flex-nowrap justify-center space-x-1'>
                                    <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                        </g>
                                    </svg>
                                    <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                        </g>
                                    </svg>
                                    <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                        </g>
                                    </svg>
                                    <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                        </g>
                                    </svg>
                                    <svg id="Group_70" data-name="Group 70" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#8f8e70"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#8f8e70"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class='flex flex-col justify-between flex-grow pt-8'>
                                    <svg id="Group_71" data-name="Group 71" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.413" height="15" viewBox="0 0 22.413 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_322" data-name="Rectangle 322" width="22.413" height="15" fill="#272323"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                                            <path id="Path_9" data-name="Path 9" d="M9.9,9.8c.482,2.7-1.589,5.2-5.057,5.2S-.507,10.422.119,6.472C.7,2.809,4.677.515,7.556.008a.514.514,0,0,1,.594.418.5.5,0,0,1,.006.136l-.1,1.215a.5.5,0,0,1-.4.458C4.545,2.761,2.7,7.414,4.6,6.856,6.573,6.279,9.414,7.1,9.9,9.8m12.447,0c-.482-2.7-3.323-3.516-5.3-2.938-1.9.556-.051-4.1,3.051-4.622a.5.5,0,0,0,.4-.458L20.6.563A.514.514,0,0,0,20.138,0,.521.521,0,0,0,20,.01c-2.879.506-6.856,2.8-7.437,6.465C11.939,10.423,13.818,15,17.285,15s5.539-2.506,5.058-5.2" transform="translate(0 0)" fill="#272323"/>
                                        </g>
                                    </svg>
                                    <p class='font-manrope text-blackish px-6 py-5 ml-0'>
                                        <?=  get_field('testimonial'); ?>
                                    </p>
                                    <svg class='ml-auto' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.413" height="15" viewBox="0 0 22.413 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_322" data-name="Rectangle 322" width="22.413" height="15" fill="#272323"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_74" data-name="Group 74" transform="translate(22.413 15) rotate(180)">
                                            <g id="Group_32" data-name="Group 32" transform="translate(0 0)" clip-path="url(#clip-path)">
                                            <path id="Path_9" data-name="Path 9" d="M9.9,9.8c.482,2.7-1.589,5.2-5.057,5.2S-.507,10.422.119,6.472C.7,2.809,4.677.515,7.556.008a.514.514,0,0,1,.594.418.5.5,0,0,1,.006.136l-.1,1.215a.5.5,0,0,1-.4.458C4.545,2.761,2.7,7.414,4.6,6.856,6.573,6.279,9.414,7.1,9.9,9.8m12.447,0c-.482-2.7-3.323-3.516-5.3-2.938-1.9.556-.051-4.1,3.051-4.622a.5.5,0,0,0,.4-.458L20.6.563A.514.514,0,0,0,20.138,0,.521.521,0,0,0,20,.01c-2.879.506-6.856,2.8-7.437,6.465C11.939,10.423,13.818,15,17.285,15s5.539-2.506,5.058-5.2" transform="translate(0 0)" fill="#272323"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </article>
                        <?php
                    }
                // Restore original Post Data
                wp_reset_postdata();
            }
            ?>
        </div>
        <a href="<?= get_field('rate_my_md', 'options') ?>" class='uppercase font-roboto text-blackish px-2 rounded-full border border-blackish w-full md:hidden flex flex-nowrap justify-between mt-8'>
           <span>Read More Reviews</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                    <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                    <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                </g>
            </svg>
        </a>
    </section>
</section>
<?php
get_footer();