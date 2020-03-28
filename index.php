<?php get_header();?>
	
	<!-- Area Posts & Sidebar -->
	<div class="row">
		<div class="col-md-8 posts-area">
			<div class="breadcrumb">
				<a href="#">All Posts</a><?php if ( is_category() ) : ?> &nbsp; &raquo; &nbsp;<?php single_cat_title(); endif;?>
			</div>	
			<div class="post-contents">	
				<hr>
				<?php if ( have_posts() ): while ( have_posts() ): the_post();?>
				<div class="img-thumbnail"><?php the_post_thumbnail('medium', array('class'=>'thumb')); ?></div>
				<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<span class="post-meta">
					<i class="fa fa-calendar"></i> <?php the_date(get_option('date-format'));?> at <?php the_time(get_option('time-format')); ?>&nbsp;
					<i class="fa fa-pencil"></i> <?php the_author_link();?>
				</span>
				<div class="the-post-content"><?php the_excerpt();?></div>
				<p align="right" class="post-meta"><i class="fa fa-tags"></i> <?php the_category(', '); ?> &nbsp;&nbsp;<i class="fa fa-comments"></i> <a href="<?php the_permalink();?>#comment"><?php comments_number();?></a></p>		
				
				<hr>
				<?php endwhile;	endif;?>
			</div>
			<ul class="pager">
  				<li><?php previous_posts_link();?></li>
  				<li><?php next_posts_link();?></li>
			</ul>
		</div>
		<div class="col-md-4 sidebar-area">
			<?php get_sidebar();?>
		</div>
	</div>
</div>

<!-- Area Footer -->
<?php get_footer();?>