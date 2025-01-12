<?php
/*
Template Name: Ethos
*/
?>
<?php
get_header();
?>
<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4 grid md:grid-cols-7 xl:grid-cols-6'>
    <div class="md:col-start-3 md:col-span-5 xl:col-start-3 xl:col-span-4 overflow-hidden rounded-lg max-h-[692px] scroll-reveal">
        <?php $image = get_field('banner_image');?>
            <img src="<?= $image['url'];?>" alt="<?=$image['alt'] ;?>" class='w-full '>
    </div>
    <h1 class='text-blue scroll-reveal mt-12'><?= the_title();?></h1>
    <section class='col-span-full single-page-article'>
        <?= the_content();?>
    </section>
</section>
<?php
get_footer();