<?php
get_header();
?>
    <section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4'>
        <div class="col-span-full overflow-hidden rounded-lg max-h-[603px] scroll-reveal">
            <img class='w-full h-full object-cover' src="<?php echo get_field('banner')?>" alt=""> 
        </div>
        <h1 class="leading-tight mt-40 mb-12 md:mb-6 font-light font-manrope text-4xl md:text-[4.125rem] text-blackish scroll-reveal capitalize">
            <?= get_field('main_heading'); ?>
        </h1>
        <!-- FIRST CONTENT SECTION -->
        <div class='grid md:grid-cols-2 mb-40 gap-y-10'>
            <div class='clinic-info'>
                <?php echo get_field('clinic_info');?>
            </div>
            <div class='flex flex-col justify-end'>
                <a class='rounded-full py-2 px-8 uppercase text-white font-roboto scroll-contact bg-primary text-center transition-all duration-150 hover:bg-blackish hover:text-white hover:border-blackish' href="<?php echo get_field('directions_link'); ?>" target='_blank'>Get Directions</a>
            </div>
        </div>
<!-- MAP -->
        <section class='rounded-lg overflow-hidden'>
            <?php echo do_shortcode(get_field('map')); ?>
        </section>
<!-- FINDING THE CLINIC -->
        <section class='grid md:grid-cols-2 mt-14 gap-x-4'>
            <div class='overflow-hidden rounded-lg max-h-[603px] scroll-reveal'>
                <img class='w-full h-full object-cover' src="<?= get_field('clinic_picture');?>" alt="">
            </div>
            <div class='flex flex-col justify-center mt-14'>
                <h2 class='text-[2.5rem] font-manrope leading-tight text-black scroll-reveal'>
                    <?= get_field('heading');?>
                </h2>
                <p class='font-manrope text-blackish'>
                    <?= get_field('clinic_description');?>
                </p>
            </div>
        </section>
<!-- PARKING -->
        <section class='grid md:grid-cols-2 gap-x-4 my-40'>
            <div class='flex flex-col justify-center'>
                <h2 class='text-[2.5rem] font-manrope leading-tight text-black scroll-reveal'
                ><?= get_field('parking_heading');?>
            </h2>
                <div class='font-manrope text-blackish'>
                    <?= get_field('parking_content');?>
                </div>
            </div>
        </section>
        <?php $image1 = get_field('clinic_image_1');?>
        <div class='grid grid-cols-2 md:grid-cols-8 gap-x-4'>
            <img src="<?= $image1['url'];?>" alt="<?=$image1['alt'] ;?>" class='md:col-span-4 xl:col-span-4 rounded-lg overflow-hidden mb-5 md:mb-0 w-full md:w-auto scroll-reveal'>
            <div class='hidden md:block md:col-span-4' aria-label></div>
            <div class='hidden md:block md:col-span-4'></div>
            <?php $image2 = get_field('clinic_image_2');?>
            <img src="<?= $image2['url'];?>" alt="<?=$image2['alt'] ;?>" class='md:col-span-4 xl:col-span-4 rounded-lg overflow-hidden  w-full md:w-auto scroll-reveal'>
        </div>

    </section>
</main>
<?php
get_footer();