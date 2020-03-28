<?php get_header();?>	
	
	<!-- Area Posts & Sidebar -->
	<div class="row">
		<div class="col-md-8 posts-area">
			<div class="breadcrumb">
				<a href="#">All Posts</a> &nbsp; &raquo; &nbsp;<a href=""><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></a> &nbsp; &raquo; &nbsp;<?php the_title();?>
			</div>
			<div class="post-contents">	
				<?php if ( have_posts() ): while ( have_posts() ): the_post();?>
				<h1 class="media-heading post-title"><?php the_title();?></h1>
				<p align="center"> <!-- SHARE ON BUTTON -->				
					<a target="popupwindow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>" id="sfacebook" title="Share on Facebook"> Share</a>
					<a target="popupwindow" href="https://twitter.com/share?text=<?php the_title(); ?> - Read:&url=<?php the_permalink();?>" id="stwitter" title="Share on Twitter"> Share</a>
					<a href="whatsapp://send?text=<?php the_permalink();?>" id="sgoogle" title="Share on WhatsApp"> Share</a>
				</p> <!--/ SHARE ON BUTTON -->
				<p class="post-meta">
					by <?php the_author_link();?>&nbsp;&nbsp;					
					<i class="fa fa-calendar"></i> <?php echo get_the_date(get_option('date-format'));?> at <?php echo get_the_time(get_option('time-format')); ?>&nbsp;
					&nbsp;
				</p>
				<?php the_content();?>
				<br>
				<hr>
				<?php endwhile; endif;?>
				<p align="center"> <!-- SHARE ON BUTTON -->				
					<a target="popupwindow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>" id="sfacebook" title="Share on Facebook"> Share</a>
					<a target="popupwindow" href="https://twitter.com/share?text=<?php the_title(); ?> - Read:&url=<?php the_permalink();?>" id="stwitter" title="Share on Twitter"> Share</a>
					<a href="whatsapp://send?text=<?php the_permalink();?>" id="sgoogle" title="Share on WhatsApp"> Share</a>
				</p> <!--/ SHARE ON BUTTON -->
				<hr>
				
				<div class="about-author">
    				<a class="pull-left" href="#"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '100');?></a>
    				<h4 class="about-author-title"><?php the_author_meta('display_name');?></h4>
     				<?php the_author_meta('description');?>
				</div>
			</div>
			
			<table align="center" class="post-navigasi">
				<tr>
					<td style="padding: 5px; font-size: 25px;"><i class="fa fa-chevron-left"></i></td><td class="previous-post"><?php previous_post_link('%link');?></td>
					<td class="next-post"><?php next_post_link('%link');?></td><td style="padding: 5px; font-size: 25px;"><i class="fa fa-chevron-right"></i></td>
				</tr>
			</table>
			
			<?php comments_template('/comments.php');?>
		</div>
		
		<div class="col-md-4 sidebar-area">
			<?php get_sidebar();?>
		</div>
	</div>
</div>

<!-- Area Footer -->
<?php get_footer();?>