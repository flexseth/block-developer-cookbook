<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>>
	<?php echo( 'Consumer – ' . $block->context['provider/message'] ); ?>
</p>
