<section id="comments" class="comments">
	<div class="comments-number">
		<h2>
			<?php
			comments_number( __('Aún no hay comentarios', 'potwebprimero'), __('1 comentario', 'potwebprimero'), __('% comentarios', 'potwebprimero') );
			?>
		</h2>
	</div><!-- .comments-number -->
	<ol class="comments-list">
	<?php
		wp_list_comments(array(
			'callback' => 'potwebprimero_comment'
		));
	?>
	</ol><!-- .comments-list -->

	<?php comment_form(); ?>
	<!-- #respond -->
</section><!-- #comments -->