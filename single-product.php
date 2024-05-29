<?php get_header(); ?>
	<section>
		<div class="mx-auto max-w-4xl p-6 md:p-12 my-12 shadow bg-white">
			<h1 class="py-2 text-5xl text-pretty font-black tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500"><?php esc_html_e( get_the_title() ); ?></h1>
			<div class="prose max-w-none sm:col-span-6 lg:col-span-8 mt-6 wm-prose">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
<?php
get_footer();
