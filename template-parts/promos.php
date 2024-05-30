<section>
	<div class="max-w-7xl mx-auto px-6 mt-10">
		<div class="grid grid-cols-1 sm:grid-cols-3 gap-8">

			<?php $post_id = 778; ?>
			<a href="<?php echo esc_url( get_permalink( $post_id ) ); ?>"
			   class="bg-gradient-to-br from-primary-500 via-primary-600 to-emerald-600 text-white p-6 shadow hover:shadow-xl group transition-shadow duration-300 rounded-md">
				<div class="flex flex-col text-pretty">
					<div>
						<?php echo get_the_post_thumbnail( $post_id, 'post-thumbnail', [ 'class' => 'object-cover w-full md:h-24 md:w-auto shadow rounded-sm' ] ); ?>
					</div>
					<h5 class="font-bold leading-tight mt-3 text-pretty">
						120 Most Common Chinese Radicals Flashcard Set
					</h5>
					<p class="text-sm mt-1">
						Supercharge your Chinese characters by learning the most common radicals.
					</p>
					<button
						class="bg-white text-primary-900 p-2 mt-4 rounded-md text-center shadow-lg font-bold text-sm ring-2 ring-primary-800">
						Download Now →
					</button>
				</div>
			</a>

			<?php $post_id = 817; ?>
			<a href="<?php echo esc_url( get_permalink( $post_id ) ); ?>"
			   class="bg-gradient-to-br from-secondary-500 to-pink-600 text-white p-6 shadow hover:shadow-xl group transition-shadow duration-300 rounded-md">
				<div class="flex flex-col text-pretty">
					<div>
						<?php echo get_the_post_thumbnail( $post_id, 'post-thumbnail', [ 'class' => 'object-cover w-full md:h-24 md:w-auto shadow rounded-sm' ] ); ?>
					</div>
					<h5 class="font-bold leading-tight mt-3">
						188 Printable Chinese Character Practice Writing Grids
					</h5>
					<p class="text-sm mt-1">
						The new PDF with 188 printable Chinese character practice writing grids. Save 40% until June 30!
					</p>
					<button
						class="bg-white text-secondary-900 p-2 mt-4 rounded-md text-center shadow-lg font-bold text-sm ring-2 ring-secondary-800">
						Download Now →
					</button>
				</div>
			</a>


			<div class="bg-grey-600 text-white p-6 shadow rounded-md">
				<div class="flex flex-col gap-2 text-pretty">
					<h5 class="font-bold leading-tight">
						Subscribe to our newsletter
					</h5>
					<p class="text-grey-300 text-pretty">
						Sign up to receive email updates
						when we release new worksheets and flashcards.
					</p>
					<div>
						<form action="https://gumroad.com/follow_from_embed_form"
						      method="post"
						      class="flex flex-col gap-y-2 mt-2">
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
				</div>
			</div>
		</div>
	</div>
</section>