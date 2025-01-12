<?php
/*
Template Name: Consulting
*/
?>
<?php
get_header();
?>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4 grid md:grid-cols-7 xl:grid-cols-6'>
    <div class="col-span-full overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('banner_image');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
    </div>
    <section class='col-span-full single-page-article my-10'>
        <?= get_field('intro_content');?>
            <div class='relative border border-blackish rounded-lg md:col-span-7 xl:col-span-6 pt-20 pb-[6.25rem]'>
                <ul class='grid md:grid-cols-2 lg:grid-cols-3 gap-y-12 gap-x-6  list-none  '>
                
                <?php
                $images = get_field('logo_grid');
                foreach( $images as $image ):
                ?>
                    <li class='flex  items-center justify-center'>
                        <img class='!ml-0  scroll-reveal' src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class=''>
                    </li>
                <?php endforeach;?>
            </ul>
            </div>
    </section>
    <div class='col-span-full grid md:grid-cols-2 gap-4'>
            <div class="overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('image_1');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
        </div>
        <div class="overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('image_2');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
        </div>
        <div class="md:col-start-2 overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('image_3');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
        </div>
    </div>
    <section class='col-span-full single-page-article mt-10'>
        <?= get_field('section_content'); ?>
                    <div class='relative border border-blackish rounded-lg md:col-span-7 xl:col-span-6 pt-20 pb-[6.25rem]'>
                <ul class='grid md:grid-cols-2 lg:grid-cols-3 gap-y-12 gap-x-6  list-none  '>
                
                <?php
                $images = get_field('logo_grid_2');
                foreach( $images as $image ):
                ?>
                    <li class='flex  items-center justify-center'>
                        <img class='!ml-0 scroll-reveal' src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class=''>
                    </li>
                <?php endforeach;?>
            </ul>
            </div>
    </section>
</section>
<?php
get_footer();