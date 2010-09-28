<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/sidebar.php'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
      <div class="post">
          <div class="metainfo">
              <p>Posted<br />
                <?php the_time('j F Y @ ga') ?></p>
                <p>Tagged<br />
                <?php the_category(', ') ?></p>
		    </div>
		    <div class="content">
		        <h3><?php the_title(); ?> 
		        <?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		        <?php the_content('[Read more &rarr;]'); ?>
		        <br clear="left" />
		    </div>
        </div><!-- end post -->

			<?php comments_template(); ?>
			
		<?php endwhile; else: ?>
		
			<h2 class="page_header">Uh oh.</h2>
			<div class="entry">
				<p>Sorry, no posts matched your criteria. Wanna search instead?</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
			
		<?php endif; ?>
		
<div class="posttopline">
	<span class="previous"><?php previous_post_link('&larr; %link') ?></span>
	<span class="next"><?php next_post_link('%link &rarr;') ?></span>
</div>

<?php get_footer(); ?>