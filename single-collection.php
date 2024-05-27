<?php get_header(); ?>


<?php $words = get_field( 'words', get_the_ID() ); ?>
<?php $page_count = get_field( 'page_count', get_the_ID() ); ?>
<?php $word_count = get_field( 'word_count', get_the_ID() ); ?>
<?php $plural_title = get_field( 'plural_title', get_the_ID() ); ?>
<?php $related_collections = get_field( 'related', get_the_ID() ); ?>

	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 py-8 sm:py-12">
				<div class="md:col-span-8 order-2 md:order-1 flex flex-row items-center justify-center">
					<div class="max-w-4xl mx-auto flex flex-col">
						<a href="<?php echo get_permalink( get_page_by_path( 'collections' ) ); ?>"
						   class="font-bold uppercase text-center md:text-left text-balance opacity-50 tracking-widest">
							Collections
						</a>
						<h1 class="py-2 text-5xl sm:text-6xl text-balance text-center md:text-left font-black tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">
							<?php esc_html_e( get_the_title() ); ?>
						</h1>
						<p class="text-xl text-balance text-center md:text-left mt-6 text-grey-700 leading-relaxed">
							This free worksheet collection contains
							<span class="font-black"><?php esc_html_e( $page_count ); ?> printable PDF pages</span>
							for learning how to write
							<span class="font-black">
									<?php esc_html_e( $word_count ); ?>
									<?php esc_html_e( $plural_title ); ?>
								</span>
							in simplified and traditional Mandarin Chinese.
						</p>
					</div>
				</div>
				<div class="md:col-span-4 order-1 md:order-2">
					<div class="flex flex-row items-center justify-center h-full">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail', [ 'class' => 'object-cover object-top w-full shadow aspect-[1340/1000]' ] ); ?>
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
								class="rounded-sm bg-secondary-700 px-1.5 pt-0.5 pb-1 text-sm text-white leading-none font-medium">
								Traditional
							</div>
							<div
								class="rounded-sm bg-primary-800 px-1.5 pt-0.5 pb-1 text-sm text-white leading-none font-medium">
								Simplified
							</div>
						</div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Printable Pages</div>
						<div class=""><?php esc_html_e( $page_count ); ?></div>
					</div>
					<div class="flex flex-row items-center justify-between py-3 lg:px-2 border-b border-grey-200">
						<div class="font-bold">Vocabulary Words</div>
						<div class=""><?php esc_html_e( $word_count ); ?></div>
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

	<section class="border-t border-grey-200 mt-12 py-12 lg:py-20 bg-grey-100">
		<div class="max-w-7xl mx-auto px-6">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
				<div class="">
					<h4 class="text-2xl font-black tracking-tighter">Word List</h4>
					<p class="text-sm text-grey-600 mt-2">
						This worksheet collection contains the following Chinese vocabulary words.
					</p>
					<div
						class="flex flex-col text-xs sm:text-sm bg-gradient-to-b from-secondary-50/15 to-white p-6 shadow-xl border-t-2 border-secondary-400 py-5 mt-6">
						<div class="flex flex-row items-center font-black gap-4 mb-4">
							<div class="w-1/3">English</div>
							<div class="w-1/3">Chinese</div>
							<div class="w-1/3">Pinyin</div>
						</div>
						<?php foreach ( $words as $word ): ?>
							<?php $has_variation = $word['zhs'] !== $word['zht']; ?>
							<div class="flex flex-row items-center py-2 gap-4 text-secondary-950">
								<div class="w-1/3 whitespace-nowrap truncate">
									<?php esc_html_e( $word['eng'] ); ?>
								</div>
								<div class="w-1/3 whitespace-nowrap truncate flex flex-row items-center gap-x-2">
									<span class="font-zhs"><?php esc_html_e( $word['zhs'] ); ?></span>
									<?php if ( $has_variation ): ?>
										<span
											class="bg-secondary-50 leading-none px-0.5 py-0.5 rounded-sm font-zht">
												<?php esc_html_e( $word['zht'] ); ?>
											</span>
									<?php endif; ?>
								</div>
								<div class="w-1/3 whitespace-nowrap truncate">
									<?php esc_html_e( $word['pyt'] ); ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="">
					<h4 class="text-2xl font-black tracking-tighter px-4">Sample Worksheets</h4>
					<p class="px-4 text-sm text-grey-600 mt-2">
						When you download this worksheet collection, you will
						receive <strong class="font-black">one ZIP file</strong> which contains the following files
						in both simplified and traditional
						Mandarin Chinese. Below are <strong class="font-black">examples of the types of worksheets
							included</strong> in the ZIP
						file.
					</p>
					<div class="md:max-h-96 md:overflow-y-auto mt-6">
						<div class="md:px-4">
							<?php $samples = wm_get_all_samples(); ?>
							<div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
								<?php foreach ( $samples as $sample ) : ?>
									<?php $sample_img = get_field( 'sample_image', $sample->ID ); ?>
									<a href="<?php esc_html_e( $sample_img['url'] ); ?>"
									   target="_blank"
									   rel="noopener"
									   class="flex flex-col text-xs bg-white p-2 shadow">
										<?php echo get_the_post_thumbnail( $sample->ID, 'post-thumbnail', [ 'class' => 'border border-grey-300' ] ); ?>
										<div
											class="font-bold mt-2 leading-tight"><?php esc_html_e( $sample->post_title ); ?></div>
										<div
											class="text-grey-600 mt-1"><?php esc_html_e( get_field( 'extra_info', $sample->ID ) ); ?></div>
									</a>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php if ( count( $related_collections ) > 0 ) : ?>
	<section
		class="border-t border-secondary-200 py-12 lg:py-20 bg-gradient-to-br from-secondary-100/50 to-secondary-50/50">
		<div class="max-w-7xl mx-auto px-6">
			<div class="grid grid-cols-1 gap-10">
				<div class="">
					<h4 class="text-2xl font-black tracking-tighter text-secondary-950">
						Related Collections
					</h4>
					<p class="text-lg max-w-3xl mt-2 text-secondary-950/80">
						You may also be interested in these <?php esc_html_e( count( $related_collections ) ); ?>
						worksheet collections which are <strong
							class="font-black">related to the
							<?php esc_html_e( get_the_title() ); ?> worksheet collection</strong>.
					</p>
					<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-4 mt-6">
						<?php foreach ( $related_collections as $related_collection ) : ?>
							<a href="<?php echo esc_url( get_permalink( $related_collection->ID ) ); ?>"
							   class="bg-white shadow">
								<?php echo get_the_post_thumbnail( $related_collection->ID, 'post-thumbnail', [ 'class' => 'object-cover object-top w-full aspect-[1340/1000]' ] ); ?>
<!--								--><?php //echo get_the_post_thumbnail( $related_collection->ID, 'wm-collection-top' ); ?>
								<div class="text-sm font-semibold mt-2 truncate px-4 pb-2 text-grey-600">
									<?php esc_html_e( $related_collection->post_title ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</div>
	</section>
<?php endif; ?>

<?php
get_footer();
