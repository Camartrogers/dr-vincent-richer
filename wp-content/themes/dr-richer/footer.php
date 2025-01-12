</div>
</main>

</div>


</div>
<footer class='md:grid md:grid-cols-10 md:gap-x-4 fluid-container'>
    <div id='contact-form' class='md:col-span-6 md:col-start-5 lg:col-span-4 lg:col-start-7 font-bold my-44 scroll-reveal'>
        <h2 class='text-base font-mono mb-3 uppercase col-span-full <?php if (is_front_page()){
                                echo 'text-white';
                            };?>'>Get in touch</h2>
        <h3 class='font-manrope text-blackish col-span-full leading-none mb-6 scroll-reveal'><?= get_field('form_heading', 'options');?></h3>
        <p class='font-manrope text-black text-base'><?= get_field('form_intro', 'options');?></p>
        <div class='<?php if (is_front_page()){
                                echo 'footer-form-home';
                            } else {
                                echo 'footer-form';
                            };?>'>
            <?php echo do_shortcode('[contact-form-7 id="45841b8" title="Contact"]') ;?>
        </div>
    </div>
    <nav class='md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5'>
        <ul class='ml-0 list-none grid sm:grid-cols-2 lg:grid-cols-3 gap-4 font-roboto text-black'>
            <li>
                <a 
                class='uppercase rounded-full border border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                echo 'transition-all duration-150 hover:bg-white hover:border-white';
            } else { 
                echo 'transition-all duration-150 hover:bg-blackish hover:border-blackish hover:text-white';
            };?>'
                href="<?= get_field('facebook', 'options');?>">Facebook 
                <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                    <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                        <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                        <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                    </g>
                </svg></a>
                
            </li>
            <li >
                <a 
                class='uppercase rounded-full border border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                echo 'transition-all duration-150 hover:bg-white hover:border-white';
            } else { 
                echo 'transition-all duration-150 hover:bg-blackish hover:border-blackish hover:text-white';
            };?>'
                href="<?= get_field('clinic_website', 'options');?>" target='_blank'>Pacific Derm
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                        <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                            <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                            <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                        </g>
                    </svg>
                </a>
                
            </li>
            <li class='order-1 lg:order-[unset]'>
                <a 
                class='uppercase rounded-full border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                    echo 'bg-blue text-white transition-all duration-150 hover:bg-white hover:text-blackish';
                    } else { 
                        echo 'bg-primary text-black transition-all duration-150 hover:bg-blackish hover:text-white';
                    };?>'
                href="tel:">Call <?= get_field('clinic_phone', 'options');?></a>
            </li>
            <li >
                <a 
                class='uppercase rounded-full border border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                echo 'transition-all duration-150 hover:bg-white hover:border-white';
                } else { 
                    echo 'transition-all duration-150 hover:bg-blackish hover:border-blackish hover:text-white';
                };?>'
                href="<?= get_field('instagram', 'options');?>" target='_blank'>Instagram
                <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                    <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                        <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                        <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                    </g>
                </svg>
                </a>
                
            </li>
            <li >
                <a 
                class='uppercase rounded-full border border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                    echo 'transition-all duration-150 hover:bg-white hover:border-white';
                } else { 
                    echo 'transition-all duration-150 hover:bg-blackish hover:border-blackish hover:text-white';
                };?>'
                href="<?= get_field('rate_my_md', 'options');?>" target='_blank'>Rate My MD 
                <svg xmlns="http://www.w3.org/2000/svg" width="17.254" height="17.254" viewBox="0 0 17.254 17.254">
                    <g id="Group_137" data-name="Group 137" transform="translate(-260.55 -9.25)">
                        <line id="Line_9" data-name="Line 9" y1="10.773" x2="10.773" transform="translate(260.946 15.335)" fill="none" stroke="#272323" stroke-width="1"/>
                        <path id="Path_16" data-name="Path 16" d="M0,0,7.544,7.544,0,15.089" transform="translate(261.05 15.335) rotate(-45)" fill="none" stroke="#272323" stroke-width="1"/>
                    </g>
                </svg>
                </a>
                
            </li>
            <li>
                <a 
                class='uppercase rounded-full  border-black px-2 flex justify-between text-sm lg:text-base <?php if (is_front_page()) {
                    echo 'bg-blue text-white transition-all duration-150 hover:bg-white hover:text-blackish';
                } else { 
                    echo 'bg-primary text-black transition-all duration-150 hover:bg-blackish hover:text-white';
                };?>'
                href="mailto:<?= get_field('clinic_email', 'options');?>"><?= get_field('clinic_email', 'options');?></a>
            </li>
        </ul>
    </nav>
    <div class="md:col-span-7 md:col-start-4 xl:col-span-6 xl:col-start-5 flex flex-col lg:flex-row justify-between mt-14 lg:mt-16">
        <address class=' not-italic text-black font-manrope'><?= get_field('clinic_address','options');?></address>
        <div class='text-black flex mt-4 lg:mt-0'>
            <p class='font-manrope'>&copy; <?php echo date('Y');?> All rights reserved  |  
            <span class=''><a href="/privacy-policy">Privacy Policy</a></span></p> 
        </div>
    </div>

</footer> 
<?php wp_footer(); ?>

</body>

</html>