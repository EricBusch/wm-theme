<?php get_header(); ?>


<?php $term = get_term( get_queried_object()->term_id ); ?>

	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="py-24 max-w-4xl mx-auto flex flex-col">
				<a href="<?php echo get_permalink( get_page_by_path( 'worksheets' ) ); ?>"
				   class="font-bold uppercase text-center text-balance opacity-50 tracking-widest">
					Worksheets
				</a>
				<h1 class="py-2 text-6xl text-balance text-center font-black tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">
					<?php esc_html_e( $term->name ); ?>
				</h1>
				<p class="text-xl text-balance text-center mt-6 text-grey-700 leading-relaxed">
					<?php esc_html_e( $term->description ); ?>
				</p>
			</div>
		</div>
	</section>

<?php do_action( 'wm_after_hero' ); ?>

<?php $worksheets = wm_get_all_worksheets( [
	'tax_query' => [
		[
			'taxonomy' => 'worksheet_theme',
			'field'    => 'term_id',
			'terms'    => [ $term->term_id ]
		]
	]
] ); ?>

	<div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 mx-auto max-w-7xl mb-12 mt-12 px-6">
		<?php foreach ( $worksheets as $worksheet ) : ?>
			<?php $eng = get_field( 'eng', $worksheet->ID ); ?>
			<?php $zhs = get_field( 'zhs', $worksheet->ID ); ?>
			<a href="<?php echo get_permalink( $worksheet->ID ); ?>"
			   class="bg-white shadow rounded overflow-hidden hover:shadow-xl transition-shadow duration-300">
				<div class="">
					<?php echo get_the_post_thumbnail( $worksheet->ID, 'large', [ 'class' => 'p-2' ] ); ?>
				</div>
				<div class="flex flex-col gap-y-2.5 px-6 pb-6 mt-2">
					<div class="flex flex-row items-center justify-between gap-x-1.5">
						<div class="font-black text-xl"><?php esc_html_e( $eng ); ?></div>
						<div
							class="flex flex-row items-center justify-center w-10 h-10 bg-primary-800 text-white rounded-full font-zhs font-medium text-xl">
							<?php esc_html_e( $zhs ); ?>
						</div>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
	</div>


<?php
get_footer();
