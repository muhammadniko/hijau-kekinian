<div class="comments-area">
<?php comment_form(); ?>

<?php if ( have_comments() ) : ?>

	<h4 id="comments-title"><i class="fa fa-comments"></i><?php comments_number(' 0 Komentar',' 1 Komentar',' % Komentar');?></h4>

	<hr>

<?php wp_list_comments(); ?>

<?php else : // or, if we don't have comments:

	if ( ! comments_open() ) : ?>

		<p class="nocomments"></p>

	<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>
</div>