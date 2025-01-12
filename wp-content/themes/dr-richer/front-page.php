<?php
get_header();
?>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-0 grid md:grid-cols-7 xl:grid-cols-6 gap-x-4 mt-14'>
    <section class='col-span-full text-white mb-12'>
        <?php if (get_field('banner_video')) :?>
            <?php
            // Get the video file field
            $video = get_field('video'); // Replace 'your_acf_file_field_name' with the actual name of your ACF file field
            if( $video ): 
                // Extract URL and other data from the file field
                $video_url = $video['url'];
                $video_mime_type = $video['mime_type'];
                ?>
                <div class="overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
                    <video  autoplay loop muted playsinline>
                        <source src="<?php echo esc_url($video_url); ?>" type="<?php echo esc_attr($video_mime_type); ?>">
                        Your browser does not support the video tag.
                    </video>
                </div>
            <?php endif; ?> 
        <?php else : 
            $bannerImage = get_field('banner_image');?>
            <div class='overflow-hidden rounded-lg max-h-[692px] scroll-reveal'>
                <img src="<?= $bannerImage['url'];?>" alt="<?= $bannerImage['alt'];?>">
            </div>
        <?php endif;?>
    </section>
    <div class='col-span-full'>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
            <g id="Group_44" data-name="Group 44" transform="translate(3056 -843) rotate(90)" style="isolation: isolate">
                <circle id="Ellipse_7" data-name="Ellipse 7" cx="20" cy="20" r="20" transform="translate(843 3016)" fill="#2d5155"/>
                <line id="Line_5" data-name="Line 5" y1="10.773" x2="10.773" transform="translate(863 3028.382) rotate(45)" fill="none" stroke="#eeeadc" stroke-width="1"/>
                <path id="Path_11" data-name="Path 11" d="M0,0,7.544,7.544,0,15.089" transform="translate(863.073 3028.456)" fill="none" stroke="#eeeadc" stroke-width="1"/>
            </g>
        </svg>
    </div>
    <h2 class='col-span-full text-blackish font-manrope mt-20 text-5xl lg:text-[4.125rem] scroll-reveal'>
        <?= get_field('main_heading');?>
    </h2>
    <div class='md:col-span-5 md:col-start-3 xl:col-span-4 xl:col-start-3'>
        <p class='text-blackish font-manrope my-[50px]'><?= get_field('intro_paragraph');?></p>
        <button class='uppercase w-full md:w-3/4 text-center text-white font-roboto bg-blue rounded-full py-1 scroll-contact transition-all hover:bg-white hover:text-black duration-150'>Request your cosmetic consultation</button>
    </div>
    <ul class='my-20 md:my-24 md:col-span-full ml-0 grid auto-rows-fr'>
            <?php
                if( have_rows('certification_list') ):
                // Loop through rows.
                while( have_rows('certification_list') ) : the_row();
            ?>
                <li class='mb-6 bg-primary rounded-lg md:rounded-full flex flex-col justify-center md:flex-row items-center md:justify-start flex-nowrap p-6 scroll-reveal'>
                    <svg class='mb-3 md:mb-0' id="Group_8" data-name="Group 8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 35 35">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_54" data-name="Rectangle 54" width="35" height="35" fill="#2d5155"/>
                            </clipPath>
                        </defs>
                        <g id="Group_6" data-name="Group 6" clip-path="url(#clip-path)">
                            <path id="Path_8" data-name="Path 8" d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0m9.606,14.781L16.139,25.748a1.491,1.491,0,0,1-2.109,0L7.756,19.474a1.492,1.492,0,0,1,2.109-2.109l5.219,5.218L25,12.671a1.492,1.492,0,1,1,2.109,2.11" fill="#2d5155"/>
                        </g>
                    </svg>
                    <p class='text-blackish font-manrope md:ml-6 !mb-0 text-center md:text-left  '><?= get_sub_field('step');?></p>
                </li>
                <?php
            endwhile;
        endif;?>
    </ul>

    <?php $image1 = get_field('image_1');?>
    <img src="<?= $image1['url'];?>" alt="<?=$image1['alt'] ;?>" class='md:col-span-2 xl:col-span-2 rounded-lg overflow-hidden mb-5 md:mb-0 w-full md:w-auto scroll-reveal'>
    <?php $image2 = get_field('image_2');?>
    <img src="<?= $image2['url'];?>" alt="<?=$image2['alt'] ;?>" class='md:col-span-5 xl:col-span-4 rounded-lg overflow-hidden md:mt-36 w-full md:w-auto scroll-reveal'>


</section>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-0 grid md:grid-cols-7 xl:grid-cols-6 gap-x-4'>
        <section class='md:col-span-7 xl:col-span-6 mt-20 md:mt-32'>
        <h2 class='text-base font-mono mb-4 md:mb-7 uppercase col-span-full text-white'>Reviews</h2>
        <h3 class='md:text-[2.5rem] font-manrope leading-none text-black mb-9 md:mb-10'><?= get_field('testimonials_heading');?></h3>
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
                                    <div class='bg-primary p-8 rounded-lg h-full w-full flex flex-col justify-between'>
                                        <!-- 5 STARS -->
                                        <div class='flex flex-row flex-nowrap justify-center space-x-1'>
                                            <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                                </g>
                                                </svg>
                                                <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                                </g>
                                                </svg>
                                                <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                                </g>
                                                </svg>
                                                <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                                </g>
                                                </svg>
                                                <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                    <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                                    <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
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
                <a href="<?= get_field('rate_my_md', 'options') ?>" class='uppercase font-roboto text-blackish px-2 rounded-full border border-blackish hidden w-72 md:flex flex-nowrap justify-between absolute left-0 top-0 transition-all hover:bg-white hover:border-white'>
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
                            <article class='bg-primary p-8 rounded-lg h-full w-full flex flex-col justify-between'>
                                <!-- 5 STARS -->
                                <div class='flex flex-row flex-nowrap justify-center space-x-1'>
                                    <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                        </g>
                                        </svg>
                                        <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                        </g>
                                        </svg>
                                        <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                        </g>
                                        </svg>
                                        <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
                                        </g>
                                        </svg>
                                        <svg id="Group_27" data-name="Group 27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                            <rect id="Rectangle_321" data-name="Rectangle 321" width="20" height="20" fill="#2d5155"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_9" data-name="Group 9" clip-path="url(#clip-path)">
                                            <path id="Path_8" data-name="Path 8" d="M19.463,7.209H12.625L10.511.386a.531.531,0,0,0-1.021,0L7.375,7.209H.537A.54.54,0,0,0,.026,7.6a.573.573,0,0,0,.2.625l5.532,4.217-2.11,6.823a.571.571,0,0,0,.193.629.516.516,0,0,0,.629,0L10,15.676l5.535,4.217a.523.523,0,0,0,.629,0,.577.577,0,0,0,.193-.629l-2.11-6.823,5.532-4.217a.573.573,0,0,0,.2-.625A.54.54,0,0,0,19.463,7.209Z" transform="translate(0)" fill="#2d5155"/>
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