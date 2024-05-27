<?php get_header(); ?>

<?php
$large_grids = wm_get_all_grids( [
	'tax_query' => [
		[
			'taxonomy' => 'grid-size',
			'field'    => 'slug',
			'terms'    => [ 'large' ]
		]
	]
] );

$medium_grids = wm_get_all_grids( [
	'tax_query' => [
		[
			'taxonomy' => 'grid-size',
			'field'    => 'slug',
			'terms'    => [ 'medium' ]
		]
	]
] );

$small_grids = wm_get_all_grids( [
	'tax_query' => [
		[
			'taxonomy' => 'grid-size',
			'field'    => 'slug',
			'terms'    => [ 'small' ]
		]
	]
] );
?>

	<section class="bg-gradient-to-br from-grey-50 to-grey-200 text-black shadow-inner">
		<div class="mx-auto max-w-7xl px-6">
			<div class="py-24 max-w-4xl mx-auto flex flex-col">
				<a href="<?php echo get_permalink( get_page_by_path( 'grids' ) ); ?>"
				   class="font-bold uppercase text-center text-balance opacity-50 tracking-widest">
					Grids
				</a>
				<h1 class="py-2 text-6xl text-balance text-center font-black tracking-tighter">
					Free printable Chinese <span
						class="bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">character writing grids</span>
				</h1>
				<p class="text-xl text-balance text-center mt-6 text-grey-700 leading-relaxed">
					Download these <strong class="font-black">FREE Chinese character practice writing grids</strong> in three
					different sizes and three different styles.
				</p>
			</div>
		</div>
	</section>

<?php do_action( 'wm_after_hero' ); ?>

	<section>
		<div class="max-w-7xl mx-auto px-6 pb-12">
			<div class="flex flex-col py-12">
				<h2 class="text-2xl font-black px-4">Large Writing Grids</h2>
				<p class="text-xl text-grey-600 max-w-3xl px-4 mt-2">
					These large Chinese Character writing grids are great for learners who are just getting started
					writing simplified and traditional Chinese characters.
				</p>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 lg:gap-12 mt-6">
					<?php foreach ( $large_grids as $large_grid ): ?>
						<a href="<?php echo esc_url( wm_get_download_url( $large_grid->ID ) ); ?>"
						   target="_blank" rel="noopener"
						   class="bg-white p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
							<?php echo get_the_post_thumbnail( $large_grid->ID, 'post-thumbnail', [ 'class' => 'border border-grey-400 shadow rounded' ] ); ?>
							<div class="flex flex-row items-center justify-between mt-4 gap-x-4">
								<div class="text-sm font-bold"><?php esc_html_e( $large_grid->post_title ); ?></div>
								<div class="">
									<svg xmlns="http://www.w3.org/2000/svg" class="size-8 fill-secondary-600"
									     viewBox="0 0 512 512">
										<path
											d="M256 464a208 208 0 1 1 0-416 208 208 0 1 1 0 416zM256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM376.9 294.6c4.5-4.2 7.1-10.1 7.1-16.3c0-12.3-10-22.3-22.3-22.3H304V160c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32v96H150.3C138 256 128 266 128 278.3c0 6.2 2.6 12.1 7.1 16.3l107.1 99.9c3.8 3.5 8.7 5.5 13.8 5.5s10.1-2 13.8-5.5l107.1-99.9z"/>
									</svg>
								</div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="flex flex-col py-12">
				<h2 class="text-2xl font-black px-4">Medium Writing Grids</h2>
				<p class="text-xl text-grey-600 max-w-3xl px-4 mt-2">
					These medium Chinese Character writing grids are great for transitioning from the large grids to the smaller grids for practicing your simplified and traditional Chinese characters.
				</p>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 lg:gap-12 mt-6">
					<?php foreach ( $medium_grids as $medium_grid ): ?>
						<a href="<?php echo esc_url( wm_get_download_url( $medium_grid->ID ) ); ?>"
						   target="_blank" rel="noopener"
						   class="bg-white p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
							<?php echo get_the_post_thumbnail( $medium_grid->ID, 'post-thumbnail', [ 'class' => 'border border-grey-400 shadow rounded' ] ); ?>
							<div class="flex flex-row items-center justify-between mt-4 gap-x-4">
								<div class="text-sm font-bold"><?php esc_html_e( $medium_grid->post_title ); ?></div>
								<div class="">
									<svg xmlns="http://www.w3.org/2000/svg" class="size-8 fill-secondary-600"
									     viewBox="0 0 512 512">
										<path
											d="M256 464a208 208 0 1 1 0-416 208 208 0 1 1 0 416zM256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM376.9 294.6c4.5-4.2 7.1-10.1 7.1-16.3c0-12.3-10-22.3-22.3-22.3H304V160c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32v96H150.3C138 256 128 266 128 278.3c0 6.2 2.6 12.1 7.1 16.3l107.1 99.9c3.8 3.5 8.7 5.5 13.8 5.5s10.1-2 13.8-5.5l107.1-99.9z"/>
									</svg>
								</div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="flex flex-col py-12">
				<h2 class="text-2xl font-black px-4">Small Writing Grids</h2>
				<p class="text-xl text-grey-600 max-w-3xl px-4 mt-2">
					These small Chinese Character writing grids are great for more experienced writers practicing small versions of your simplified and traditional Chinese characters.
				</p>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 lg:gap-12 mt-6">
					<?php foreach ( $small_grids as $small_grid ): ?>
						<a href="<?php echo esc_url( wm_get_download_url( $small_grid->ID ) ); ?>"
						   target="_blank" rel="noopener"
						   class="bg-white p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
							<?php echo get_the_post_thumbnail( $small_grid->ID, 'post-thumbnail', [ 'class' => 'border border-grey-400 shadow rounded' ] ); ?>
							<div class="flex flex-row items-center justify-between mt-4 gap-x-4">
								<div class="text-sm font-bold"><?php esc_html_e( $small_grid->post_title ); ?></div>
								<div class="">
									<svg xmlns="http://www.w3.org/2000/svg" class="size-8 fill-secondary-600"
									     viewBox="0 0 512 512">
										<path
											d="M256 464a208 208 0 1 1 0-416 208 208 0 1 1 0 416zM256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM376.9 294.6c4.5-4.2 7.1-10.1 7.1-16.3c0-12.3-10-22.3-22.3-22.3H304V160c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32v96H150.3C138 256 128 266 128 278.3c0 6.2 2.6 12.1 7.1 16.3l107.1 99.9c3.8 3.5 8.7 5.5 13.8 5.5s10.1-2 13.8-5.5l107.1-99.9z"/>
									</svg>
								</div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
	</section>


<?php
get_footer();
