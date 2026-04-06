</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-grey-800" role="contentinfo">
    <?php do_action( 'tailpress_footer' ); ?>

    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-24">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-grey-100">

            <div class="flex flex-col gap-y-10">
                <h4 class="uppercase font-bold text-grey-400 tracking-wide">Printables</h4>
                <?php wp_nav_menu( [
                        'container_id'    => 'footer-primary-menu',
                        'container_class' => '',
                        'menu_class'      => 'flex flex-col gap-y-6',
                        'theme_location'  => 'secondary',
                        'li_class'        => 'text-grey-300 font-medium',
                        'fallback_cb'     => false,
                        'menu'            => 'primary-menu',
                ] ); ?>
            </div>
            <div class="flex flex-col gap-y-10">
                <h4 class="uppercase font-bold text-grey-400 tracking-wide">Company</h4>
                <?php wp_nav_menu( [
                        'container_id'    => 'footer-secondary-menu',
                        'container_class' => '',
                        'menu_class'      => 'flex flex-col gap-y-6',
                        'theme_location'  => 'secondary',
                        'li_class'        => 'text-grey-300 font-medium',
                        'fallback_cb'     => false,
                        'menu'            => 'secondary-menu',
                ] ); ?>
            </div>

            <div class="flex flex-col gap-y-10">
                <h4 class="uppercase font-bold text-grey-400 tracking-wide">Get free worksheets!</h4>
                <div>
                    <form action="https://app.kit.com/forms/9293683/subscriptions"
                          method="post"
                          data-sv-form="9293683"
                          data-uid="608e888155"
                          class="seva-form formkit-form flex flex-col gap-y-2 mt-2">
                        <input name="email_address"
                               aria-label="Email address"
                               type="email"
                               class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out shadow-inner"
                               placeholder="Email address..."
                               required>
                        <div class="">
                            <button type="submit"
                                    class="font-bold uppercase shadow px-6 py-3 bg-gradient-to-b from-grey-700 to-grey-900 text-white rounded-lg whitespace-nowrap max-w-sm">
                                Join Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="mx-auto text-center text-gray-500 border-t border-grey-700 py-6 bg-grey-900">
        &copy; <?php echo date_i18n( 'Y' ); ?> - <?php echo get_bloginfo( 'name' ); ?>
    </div>

</footer>

</div>

<?php wp_footer(); ?>

<script src="https://f.convertkit.com/ckjs/ck.5.js"></script>

</body>
</html>
