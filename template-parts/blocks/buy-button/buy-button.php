<?php
/**
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var boolean $is_preview True during backend preview render, i.e., when rendering inside the block editor’s content, or rendered inside the block editor when adding a new block, showing a preview when hovering over the new block. This variable is only set to true when is_admin() and current screen is_block_editor() both return true.
 * @var integer $post_id The Post ID of the current context. This will be the page/post a block is saved against, or if the block is used in a template, synced pattern or query loop block, it will be the post_id of the currently displayed item.
 * @var array $context The context provided to the block by the post or its parent block.
 */
$url   = get_field( 'buy_url' );
$text  = get_field( 'buy_text' );
$price = get_field( 'price' );

$class_name = 'buy_button';

if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

$align = 'text-' . ( $block['align'] ?? 'left' );
?>
<div class="<?php esc_attr_e( $class_name ); ?> <?php esc_attr_e( $align ); ?> my-10">
	<a href="<?php echo esc_url( $url ); ?>"
	   class="<?php echo ! $is_preview ? 'text-white text-2xl bg-gradient-to-r from-secondary-500 to-pink-600 px-6 py-3 no-underline font-black rounded-lg leading-none shadow-md text-shadow-sm uppercase hover:shadow-sm transition-shadow duration-300' : ''; ?>"
	   target="_blank"
	   rel="noopener">
		<?php echo wp_kses( $text, 'post' ); ?>
	</a>
</div>
