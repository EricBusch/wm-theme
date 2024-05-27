<?php get_header(); ?>

	<div class="max-w-4xl mx-auto px-6 py-12">

		<h1 class="text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500"><?php esc_html_e( get_the_title() ); ?></h1>

		<div class="prose max-w-none mt-6">
			<?php the_content(); ?>
		</div>

	</div>

<?php
get_footer();
