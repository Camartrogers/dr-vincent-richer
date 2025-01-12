<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/favicon/richer-favicon.svg">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <?php echo get_field('google_tag','options');?>    
    <?php wp_head(); ?>

</head>
<?php 
if (get_field('background_green')) {
    $background = 'bg-secondary';
    $siteLogo = get_field('site_logo', 'option');


} else {
    $background = 'bg-whitish';
    $siteLogo = get_field('site_logo_dark', 'option');
}
?>
<body 
x-data="{ mobileNav: false}" 
:class="mobileNav == false ? '' : 'h-screen overflow-hidden' "
class="<?= $background;?> ">

    <div id="page" class="min-h-screen flex flex-col overflow-x-hidden">
        <div id="content" class="flex-grow overflow-hidden">
            <main 
            
            class="grid fluid-container px-8 grid-cols-1 md:grid-cols-10 md:gap-x-4 pt-12 relative">
                <header class='col-span-full md:col-span-3'>
                    
                    <div class='md:fixed md:top-10 w-[290px] md:w-[28%] lg:w-[24%]'>
                        <div class='fixed top-0 md:static left-0 right-0 flex flex-nowrap justify-between pl-8 md:pl-0 z-10 pt-10 pb-4 md:pt-0 <?= $background;?>'>
                            <a class='md:col-span-4 z-30' href="<?= get_home_url(); ?>">
                                <img src="<?= $siteLogo['url'];?>" alt="<?=$siteLogo['alt'] ;?>" class='lg:max-w-72 w-full'>
                            </a>
                            <button @click="mobileNav == true ? mobileNav = false : mobileNav = true" class='rounded-full h-[50px] w-[50px] border flex flex-col flex-shrink-0 justify-center items-center relative md:hidden mr-8 <?php if (is_front_page()){
                                echo 'border-white';
                            } else {
                                echo 'border-black';
                            };?>'>
                                <svg 
                                x-show="!mobileNav"
                                x-transition.duration.300ms
                                class="absolute"
                                xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17">
                                    <g id="Group_135" data-name="Group 135" transform="translate(-356.5 -49.5)">
                                        <line id="Line_1" data-name="Line 1" x2="19" transform="translate(356.5 50)" fill="none" stroke="<?php if (is_front_page()){echo '#fff';} else {echo '#000';};?>" stroke-width="1"/>
                                        <line id="Line_2" data-name="Line 2" x2="19" transform="translate(356.5 58)" fill="none" stroke="<?php if (is_front_page()){echo '#fff';} else {echo '#000';};?>" stroke-width="1"/>
                                        <line id="Line_3" data-name="Line 3" x2="19" transform="translate(356.5 66)" fill="none" stroke="<?php if (is_front_page()){echo '#fff';} else {echo '#000';};?>" stroke-width="1"/>
                                    </g>
                                </svg>
                                <svg 
                                x-show="mobileNav"
                                x-cloak 
                                x-transition.duration.300ms
                                class="absolute"
                                xmlns="http://www.w3.org/2000/svg" width="14.142" height="14.142" viewBox="0 0 14.142 14.142">
                                    <g id="Group_136" data-name="Group 136" transform="translate(-366.929 -50.929)">
                                        <line id="Line_2" data-name="Line 2" x2="19" transform="translate(367.282 51.282) rotate(45)" fill="none" stroke="#f5f5f5" stroke-width="1"/>
                                        <line id="Line_14" data-name="Line 14" x2="19" transform="translate(380.718 51.282) rotate(135)" fill="none" stroke="#f5f5f5" stroke-width="1"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
<!-- BEGIN MOBILE NAV -->
                        <div 
                        :class="mobileNav == false ? 'left-full' : 'left-0'"
                        class="fixed top-0 w-screen bottom-0 bg-blue z-10 md:hidden transition-all duration-500">
                            <div class="h-full w-full flex flex-col justify-center items-center text-center text-white px-8 relative mobile-menu">
                                <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_id' => 'primary-menu',
                                    'container' => 'nav',
                                    'container_class' => 'main-nav',
                                ) );?>
                                <button
                                @click='mobileNav = false'
                                aria-label='scroll to contact form'
                                class='rounded-full py-2 px-8 uppercase text-white font-roboto scroll-contact bg-primary w-4/5 absolute bottom-12'>Contact</button>
                                <button
                                @click='mobileNav = false'
                                class='absolute top-8 right-8 w-16 h-16' 
                                aria-label='close hamburger menu'>
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill='#F5F5F5'><path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"/></svg>
                                </button>
                            </div>
                        </div>

<!-- BEGIN DESKTOP NAV -->
                        <div class="hidden md:block md:col-span-3 md:col-start-1 pt-24">
                            <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id' => 'primary-menu',
                                'container' => 'nav',
                                'container_class' => 'main-nav',
                            ) );?>
                            <button class='rounded-full py-2 px-8 uppercase text-white font-roboto scroll-contact  transition-all <?php if (is_front_page()){
                                echo 'bg-blue hover:bg-white hover:text-blackish';
                            } else {
                                echo 'bg-primary hover:bg-blackish hover:text-white';
                            };?>'>Contact</button>
                        </div>
                    </div>
                </header>
                <div class='col-span-full md:col-start-4 md:col-span-7 pt-16 lg:pt-0'>
                    <?php if (is_home()) :?>
                    <h1 class='md:block md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 font-roboto font-normal md:relative'>
                        Blog
                    </h1>
                <?php elseif ( !get_field('hide_title_in_header') && !is_single()) : ?>
                    <h1 class='md:block md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 md:relative font-roboto font-normal'>
                        <?= the_title();?>
                    </h1>
                <?php endif;?>

