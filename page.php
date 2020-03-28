<?php get_header();?>	
	<!-- Area Posts & Sidebar -->
	<div class="row">
		<div class="col-md-8 posts-area">
			<div class="post-contents">	
				<?php
					if ( have_posts() ):
						while ( have_posts() ): the_post();?>
				<h2 class="media-heading post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php the_content();?>
				<br>
				<hr>
				<?php 
						endwhile;
					endif; 
				?>
			</div>
		</div>
		
		<div class="col-md-4 sidebar-area">
			<?php get_sidebar();?>
		</div>
	</div>
</div>

<!-- Area Footer -->
<?php get_footer();?>