<?php get_header(); ?>

	<div class="relative bg-white border-b border-grey-200">
		<div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-20 lg:text-left">
			<div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
				<h1 class="text-4xl tracking-tight leading-10 font-black text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl text-balance">
					Learn to write Chinese <span
						class="bg-clip-text text-transparent bg-gradient-to-r from-secondary-500 to-pink-500">the easy way!</span>
				</h1>
				<p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl text-pretty">
					Our Chinese language worksheets, flashcards and exercises are engaging, fun, easy-to-use and
					free!
				</p>
				<div class="mt-6 grid grid-cols-2 sm:grid-cols-4 bg-gray-100 gap-px">
					<div class="bg-white p-4">
						<div class="flex flex-col">
                            <span class="text-lg font-black text-primary-900">
                               <?php esc_html_e( number_format( wm_get_total_printable_pdf_page_count() ) ); ?>
                            </span>
							<span class="text-xs text-gray-600 leading-4 font-light uppercase">
                                Printable PDF Pages
                            </span>
						</div>
					</div>
					<div class="bg-white p-4">
						<div class="flex flex-col">
                            <span class="text-lg font-black text-primary-900">
                               <?php esc_html_e( number_format( wm_get_total_vocabulary_word_count() ) ); ?>
                            </span>
							<span class="text-xs text-gray-600 leading-4 font-light uppercase">
                                Vocabulary Words
                            </span>
						</div>
					</div>
					<div class="bg-white p-4">
						<div class="flex flex-col">
                            <span class="text-lg font-black text-primary-900">
                                <?php esc_html_e( number_format( wm_get_total_collections() ) ); ?>
                            </span>
							<span class="text-xs text-gray-600 leading-4 font-light uppercase">
                                Worksheet Collections
                            </span>
						</div>
					</div>
					<div class="bg-white p-4">
						<div class="flex flex-col">
                            <span class="text-lg font-black text-primary-900">
                                <?php esc_html_e( number_format( wm_get_total_worksheets() ) ); ?>
                            </span>
							<span class="text-xs text-gray-600 leading-4 font-light uppercase">
                                Single Worksheets
                            </span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
			<?php echo wp_get_attachment_image( 805, 'large', false, [ 'class' => 'lazy absolute inset-0 w-full h-full object-cover' ] ); ?>
		</div>
	</div>


	<div class="mx-auto max-w-7xl my-12 sm:px-6">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
			<div class="lg:col-span-8 bg-gradient-to-b from-primary-600 to-primary-500 text-white">
				<div class="flex flex-col gap-y-6 p-10 sm:p-16">
					<div class="flex flex-col sm:flex-row gap-6 sm:justify-between sm:items-center">
						<div class="flex flex-col gap-y-1 lg:gap-y-0">
							<div class="uppercase tracking-widest opacity-70 font-black text-xs">Flashcard Set</div>
							<h2 class="text-xl sm:text-2xl font-black uppercase leading-tight text-balance">120 Most
								Common Radicals
							</h2>
						</div>
						<div class="">
							<a href="<?php echo esc_url( get_permalink( '778' ) ); ?>"
							   class="font-bold uppercase shadow px-6 py-3 bg-gradient-to-b from-grey-700 to-grey-900 text-white rounded-lg whitespace-nowrap max-w-sm">
								Download Now
							</a>
						</div>
					</div>
					<p class="text-xl">
						Chinese Radicals <span
							class="font-bold">provide helpful hints to the meaning and sound</span>
						of many characters. Learning the most common Chinese Radicals will help you <span
							class="font-bold">memorize and recall Chinese characters faster!</span>
						Don't wait! Learn these radicals now to <span
							class="font-bold">start learning Chinese faster!</span>
					</p>
					<?php echo wp_get_attachment_image( 793, 'large', false, [ 'class' => 'rounded-xl shadow-xl ring-8 ring-white mt-2' ] ); ?>
				</div>
			</div>
			<div class="lg:col-span-4 bg-secondary-500 text-white">
				<div class="flex flex-col gap-y-6 p-10 sm:p-16">
					<h2 class="text-xl sm:text-2xl font-black uppercase leading-tight text-balance">
						Subscribe to our Newsletter
					</h2>
					<p class="text-lg">
						Sign up to receive email updates
						when we release new worksheets and flashcards.
					</p>
					<div>
						<form action="https://gumroad.com/follow_from_embed_form"
						      method="post"
						      class="flex flex-col gap-y-4">
							<input name="seller_id" type="hidden" value="1001845423033"/>
							<input name="email"
							       aria-label="Email address"
							       type="email"
							       class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out shadow-inner"
							       placeholder="Email address..."
							       required>
							<div class="">
								<button type="submit"
								        class="font-bold uppercase shadow px-6 py-3 bg-gradient-to-b from-grey-700 to-grey-900 text-white rounded-lg whitespace-nowrap max-w-sm">
									Subscribe
								</button>
							</div>
						</form>
					</div>
					<p class="text-sm">No Spam! Unsubscribe anytime.</p>
				</div>
			</div>
		</div>
	</div>


	<a href="<?php echo get_permalink( get_page_by_path( 'collections' ) ); ?>"
	   class="group flex flex-row items-center justify-between mt-12 mx-auto max-w-7xl px-12 gap-x-2"
	   title="See all free collections of Chinese writing worksheets">
		<h2 class="font-light text-3xl text-grey-600">
			Free Collections
		</h2>
		<span
			class="uppercase text-sm text-secondary-600 border border-secondary-600 px-6 py-1 rounded-full group-hover:bg-secondary-600 group-hover:text-white transition-colors duration-300">See all →</span>
	</a>
	<div class="grid md:grid-cols-3 gap-6 mx-auto max-w-7xl mb-12 mt-4 px-6">
		<?php foreach (
			wm_get_all_collections( [
				'orderby'        => 'rand',
				'posts_per_page' => 3
			] ) as $collection
		) : ?>
			<?php
			$groups       = wp_get_post_terms( $collection->ID, 'group' );
			$word_count   = get_field( 'word_count', $collection->ID );
			$page_count   = get_field( 'page_count', $collection->ID );
			$plural_title = get_field( 'plural_title', $collection->ID );
			?>
			<a href="<?php echo get_permalink( $collection->ID ); ?>" class="bg-white p-6 shadow">
				<div class="grid grid-cols-1">
					<div class="">
						<?php echo get_the_post_thumbnail( $collection->ID, 'wm-collection-top', [ 'class' => 'object-cover object-top w-full shadow' ] ); ?>
					</div>
					<div class="flex flex-row items-center gap-x-5 mt-4">
						<?php foreach ( $groups as $group ) : ?>
							<span
								class="text-secondary-600 text-xs font-bold uppercase">
								<?php esc_html_e( $group->name ); ?>
							</span>
						<?php endforeach; ?>
					</div>
					<h3 class="font-bold leading-none mt-4 truncate whitespace-nowrap"><?php esc_html_e( $collection->post_title ); ?></h3>
					<p class="text-grey-600 leading-relaxed mt-3 min-h-24 line-clamp-4">
						Learn how to write <?php esc_html_e( $word_count ); ?> <?php esc_html_e( $plural_title ); ?>
						in simplified or traditional Mandarin Chinese.
					</p>
					<div class="mt-10 text-grey-600 flex flex-row items-center justify-between text-sm">
						<div><?php esc_html_e( $word_count ); ?> words</div>
						<div><?php esc_html_e( $page_count ); ?> pages</div>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
	</div>


	<a href="<?php echo get_permalink( get_page_by_path( 'worksheets' ) ); ?>"
	   class="group flex flex-row items-center justify-between mt-12 mx-auto max-w-7xl px-12 gap-x-2"
	   title="See all free collections of Chinese writing worksheets">
		<h2 class="font-light text-3xl text-grey-600">
			Free Worksheets
		</h2>
		<span
			class="uppercase text-sm text-secondary-600 border border-secondary-600 px-6 py-1 rounded-full group-hover:bg-secondary-600 group-hover:text-white transition-colors duration-300">See all →</span>
	</a>
	<div class="grid md:grid-cols-3 gap-6 mx-auto max-w-7xl mb-12 mt-4 px-6">
		<?php foreach (
			wm_get_all_worksheets( [
				'orderby'        => 'rand',
				'posts_per_page' => 3
			] ) as $worksheet
		) : ?>
			<?php
			$themes = wp_get_post_terms( $worksheet->ID, 'worksheet_theme' );
			$eng    = get_field( 'eng', $worksheet->ID );
			$zhs    = get_field( 'zhs', $worksheet->ID );
			?>
			<a href="<?php echo get_permalink( $worksheet->ID ); ?>" class="bg-white p-6 shadow">
				<div class="grid grid-cols-1">
					<div class="">
						<?php echo get_the_post_thumbnail( $worksheet->ID, 'post-thumbnail', [ 'class' => 'object-cover object-top w-full shadow border border-grey-600' ] ); ?>
					</div>
					<div class="flex flex-row items-center gap-x-5 mt-4">
						<?php foreach ( $themes as $theme ) : ?>
							<span
								class="text-secondary-600 text-xs font-bold uppercase">
								<?php esc_html_e( $theme->name ); ?>
							</span>
						<?php endforeach; ?>
					</div>
					<h3 class="flex flex-row items-center justify-between leading-none mt-4 truncate whitespace-nowrap text-xl">
						<span class="font-bold"><?php esc_html_e( $eng ); ?></span>
						<span
							class="flex flex-row items-center justify-center font-semibold font-zhs w-10 h-10 bg-primary-800 text-white rounded-full text-xl"><?php esc_html_e( $zhs ); ?></span>
					</h3>
				</div>
			</a>
		<?php endforeach; ?>
	</div>


<?php
get_footer();
