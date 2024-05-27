<?php get_header(); ?>


	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="py-24 max-w-4xl mx-auto flex flex-col">
				<a href="<?php echo get_permalink( get_page_by_path( 'worksheets' ) ); ?>"
				   class="font-bold uppercase text-center text-balance opacity-50 tracking-widest">
					Worksheets
				</a>
				<h1 class="text-6xl text-balance text-center font-black tracking-tighter py-2">
					Free Chinese writing <span
						class="bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">worksheets for beginners</span>
				</h1>
				<p class="text-xl text-balance text-center mt-6 text-grey-700 leading-relaxed">
					Over <strong class="font-black">100 free printable Chinese writing worksheets</strong>
					for those just starting to learn how to read and write Chinese!
				</p>
			</div>
		</div>
	</section>

<?php do_action( 'wm_after_hero' ); ?>

<?php $themes = wm_get_all_worksheet_themes(); ?>

	<div class="grid md:grid-cols-3 gap-6 mx-auto max-w-7xl mb-12 mt-12 px-6">
		<?php foreach ( $themes as $theme ) : ?>
			<a href="<?php echo get_term_link( $theme->term_id ); ?>"
			   class="bg-white shadow rounded overflow-hidden hover:shadow-xl transition-shadow duration-300">
				<div class="h-0.5 bg-gradient-to-r from-primary-500 to-secondary-500"></div>
				<div class="flex flex-col p-10 gap-y-4">
					<h2 class="text-primary-950 text-xl font-bold text-balance"><?php esc_html_e( $theme->name ); ?></h2>
					<p class="flex flex-row items-center text-lg text-grey-600 gap-x-2">
							<span
								class="bg-grey-100 text-grey-600 w-10 h-10 flex flex-row items-center justify-center"><?php esc_html_e( $theme->count ); ?></span>
						<span>Worksheets</span>
					</p>
				</div>
			</a>
		<?php endforeach; ?>
	</div>


<?php
get_footer();
