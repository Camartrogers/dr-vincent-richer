<?php // Single Post
?>

<?php get_header(); ?>

<section class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 lg:mt-0 grid md:grid-cols-7 xl:grid-cols-6 mt-14'>

    <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();?>
                <div class="col-span-full overflow-hidden rounded-lg max-h-[603px] scroll-reveal">
                    <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']);
                    }?>
                </div>
                <div class='col-span-full mt-11 md:flex md:flex-row-reverse md:flex-nowrap md:items-center justify-between'>
                    <div><?php echo do_shortcode('[addtoany]'); ?></div>
                    <a 
                    href="<?php $posts_page_id = get_option('page_for_posts');
                        $posts_page_url = get_permalink($posts_page_id);
                        echo $posts_page_url; ?>" 
                    class='rounded-full flex flex-nowrap items-center border border-black py-2 px-5 w-32 md:w-auto transition-all duration-150 hover:bg-blackish  group'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.442" height="16.235" viewBox="0 0 16.442 16.235" class='group-hover:stroke-white '>
                            <g id="Group_88" data-name="Group 88" transform="translate(-207.933 507.057) rotate(-135)">
                                <line id="Line_3" class='group-hover:stroke-white ' data-name="Line 3" y1="10.773" x2="10.773" transform="translate(194.5 500.335)" fill="none" stroke="#272323" stroke-width="1"/>
                                <path id="Path_2" class='group-hover:stroke-white ' data-name="Path 2" d="M0,0,7.544,7.544,0,15.089" transform="translate(194.604 500.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                            </g>
                        </svg>
                        <span class='font-roboto uppercase ml-6 text-black group-hover:text-white'>Back</span>
                    </a>
                </div>
                <article class='col-span-full mt-10 single-page-article'>
                    <h1 class='font-manrope font-light text-4xl md:text-[4.125rem] leading-tight text-black normal-case'>
                        <?= the_title(); ?>
                    </h1>
                    <p class='text-black font-manrope text-2xl'>Dr. Vincent Richer</p>
                        <?php // Display the post content
                        the_content();?>
                </article>


        <?php
            endwhile; // End of the loop.
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>

</section>
<?php
get_footer();
