<?php

get_header();

?>

<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-4 grid md:grid-cols-7 xl:grid-cols-6 mt-14'>
<h2 class='font-manrope text-black col-span-full leading-tight scroll-reveal text-[2.5rem]'>
    <?php echo the_field('blog_heading', 'options');?>
</h2>
<div class='col-span-full grid md:grid-cols-2 gap-x-4 gap-y-6 mt-24'>
<?php if (have_posts()) :
    while (have_posts()) : the_post();?>
    <article class='overflow-hidden rounded-lg bg-white grid scroll-reveal'>
        <div class='w-full h-[260px] overflow-hidden'>
            <img class='w-full h-hull object-cover object-center' src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        </div>
        <div class='px-11 pb-12 flex flex-col justify-between'>
            <h2 class='text-black font-manrope text-2xl mt-8 mb-12'><?php the_title();?></h2>
            <div>
                <p class='text-black font-manrope text-lg mb-14 line-clamp-3'><?php echo get_the_excerpt();?></p>
                <a class='rounded-full bg-primary font-roboto text-white uppercase py-2 px-10 whitespace-nowrap' href="<?php echo get_permalink();?>">Read More</a>
            </div>
        </div>
    </article>
    <?php     endwhile;
endif;?>
</div>

</section>

<?php 

get_footer();
