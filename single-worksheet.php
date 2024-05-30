<?php get_header(); ?>


<?php $eng = get_field( 'eng', get_the_ID() ); ?>
<?php $zhs = get_field( 'zhs', get_the_ID() ); ?>
<?php $term = wp_get_post_terms( get_the_ID(), 'worksheet_theme' )[0]; ?>
<?php $related_worksheets = wm_get_all_worksheets( [
	'tax_query'    => [
		[
			'taxonomy' => 'worksheet_theme',
			'field'    => 'term_id',
			'terms'    => [ $term->term_id ]
		]
	],
	'post__not_in' => [ get_the_ID() ],
] ); ?>

	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 py-8 sm:py-12">
				<div class="md:col-span-8 order-2 md:order-1 flex flex-row items-center justify-center">
					<div class="max-w-4xl mx-auto flex flex-col">
						<a href="<?php echo get_permalink( get_page_by_path( 'worksheets' ) ); ?>"
						   class="font-bold uppercase text-center md:text-left text-balance opacity-50 tracking-widest">
							Worksheets
						</a>
						<h1 class="py-2 text-5xl sm:text-6xl text-balance text-center md:text-left font-black tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">
							<?php esc_html_e( $eng ); ?> <span class="font-zhs"><?php esc_html_e( $zhs ); ?></span>
						</h1>
						<p class="text-xl text-balance text-center md:text-left mt-6 text-grey-700 leading-relaxed">
							Practice writing the simplified Chinese character for
							<strong class="font-black"><?php esc_html_e( $eng ); ?> (<span
									class="font-zhs"><?php esc_html_e( $zhs ); ?></span>)</strong>
							with this <strong class="font-black">free printable worksheet</strong>.
						</p>
					</div>
				</div>
				<div class="md:col-span-4 order-1 md:order-2">
					<div class="flex flex-row items-center justify-center h-full">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'wm-collection-top', [
							'class'   => 'object-cover object-top w-full shadow',
							'loading' => 'lazy',
							'alt'     => 'Preview image of ' . esc_attr( get_the_title() ) . ' writing worksheet',
						] ); ?>
					</div>
				</div>
			</div>
	</section>

<?php do_action( 'wm_after_hero' ); ?>

	<section>
		<div class="mx-auto max-w-7xl px-6 mt-12">
			<div class="grid grid-cols-1 sm:grid-cols-12 gap-8 sm:gap-12">
				<div class="prose max-w-none sm:col-span-6 lg:col-span-8">
					<?php the_content(); ?>
				</div>
				<div class="sm:col-span-6 lg:col-span-4 flex flex-col text-sm">
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Versions</div>
						<div class="flex flex-row items-center gap-x-1">
							<div
								class="rounded-sm bg-primary-800 px-1.5 pt-0.5 pb-1 text-sm text-white leading-none font-medium">
								Simplified
							</div>
						</div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Printable Pages</div>
						<div class="">1</div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Vocabulary Words</div>
						<div class="">1</div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Created</div>
						<div class=""><?php esc_html_e( get_the_date( 'F j, Y', ) ); ?></div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2">
						<div class="font-bold">Price</div>
						<div class="">Free</div>
					</div>
					<a href="<?php echo esc_url( wm_get_download_url( get_the_ID() ) ); ?>"
					   target="_blank" rel="noopener"
					   class="w-full mt-6 text-center font-bold uppercase shadow px-6 py-3 bg-gradient-to-b from-grey-700 to-grey-900 text-white rounded-lg whitespace-nowrap">
						Download Now
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="border-t border-grey-200 mt-12 py-12 bg-grey-100">
		<div class="max-w-7xl mx-auto px-6">
			<div class="grid grid-cols-1 gap-10">
				<div class="">
					<h4 class="text-2xl font-black tracking-tighter">
						More Chinese writing worksheets for <?php esc_html_e( $term->name ); ?>
					</h4>
					<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-4 mt-6">
						<?php foreach ( $related_worksheets as $related_worksheet ) : ?>
							<a href="<?php echo esc_url( get_permalink( $related_worksheet->ID ) ); ?>"
							   class="bg-white shadow p-2">
								<?php echo get_the_post_thumbnail( $related_worksheet->ID, 'post-thumbnail', [
									'loading' => 'lazy',
									'alt'     => 'Preview image of related writing worksheet',
								] ); ?>
								<div class="text-sm font-medium">
									<?php esc_html_e( $related_worksheet->post_title ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</div>
	</section>


<?php
get_footer();
