<?php get_header(); ?>


<?php $term = get_term( get_queried_object()->term_id ); ?>

	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="py-24 max-w-4xl mx-auto flex flex-col">
				<a href="<?php echo get_permalink( get_page_by_path( 'collections' ) ); ?>"
				   class="font-bold uppercase text-center text-balance opacity-50 tracking-widest">
					Collections
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

<?php $collections = wm_get_all_collections( [
	'tax_query' => [
		[
			'taxonomy' => 'group',
			'field'    => 'term_id',
			'terms'    => [ $term->term_id ]
		]
	]
] ); ?>

	<div class="grid md:grid-cols-3 gap-6 mx-auto max-w-7xl mb-12 mt-12 px-6">
		<?php foreach ( $collections as $collection ) : ?>
			<?php $words = get_field( 'words', $collection->ID ); ?>
			<?php $page_count = get_field( 'page_count', $collection->ID ); ?>
			<?php $word_count = get_field( 'word_count', $collection->ID ); ?>
			<?php $plural_title = get_field( 'plural_title', $collection->ID ); ?>
			<a href="<?php echo get_permalink( $collection->ID ); ?>"
			   class="bg-white shadow rounded overflow-hidden hover:shadow-xl transition-shadow duration-300">
				<div class="flex flex-col px-6 gap-y-4 mt-6 mb-3">
					<h2 class="text-primary-950 text-lg font-bold text-balance"><?php esc_html_e( $collection->post_title ); ?></h2>
				</div>
				<p class="px-6 mb-6 text-sm text-grey-600">
					Learn to write <?php esc_html_e( $word_count ); ?> <?php esc_html_e( $plural_title ); ?> with
					these <?php esc_html_e( $page_count ); ?> printable PDF worksheets.
				</p>
				<div class="">
					<?php echo get_the_post_thumbnail( $collection->ID, 'post-thumbnail', [
						'class'   => 'object-cover object-top w-full aspect-[400/108]',
						'loading' => 'lazy',
						'alt'     => 'Preview image of ' . esc_attr( $collection->post_title ) . ' worksheet collection',
					] ); ?>
				</div>
				<div class="flex flex-col gap-y-2.5 px-6 pb-6 mt-6">
					<?php foreach ( $words as $word ) : ?>
						<?php $has_variation = $word['zhs'] !== $word['zht']; ?>
						<div class="flex flex-row items-center justify-between gap-x-1.5">
							<div class="text-sm text-primary-800">
								<?php esc_html_e( $word['eng'] ); ?>
							</div>
							<div class="flex flex-row items-center gap-x-1">
								<?php if ( $has_variation ) : ?>
									<div
										class="font-zht rounded-sm bg-secondary-700 px-1.5 pt-0.5 pb-1 text-sm text-white leading-none font-medium">
										<?php esc_html_e( $word['zht'] ); ?>
									</div>
								<?php endif; ?>
								<div
									class="font-zhs rounded-sm bg-primary-800 px-1.5 pt-0.5 pb-1 text-sm text-white leading-none font-medium">
									<?php esc_html_e( $word['zhs'] ); ?>
								</div>

							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</a>
		<?php endforeach; ?>
	</div>


<?php
get_footer();
