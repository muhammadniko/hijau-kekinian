<div class="comments-area">
<?php comment_form(); ?>

	<h4 id="comments-title"><i class="fa fa-comments"></i> <?php comments_number();?></h4>

	<hr>

<?php wp_list_comments(); ?>
</div>