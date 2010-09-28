<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/sidebar-long.php') ?>
	
		<div class="flickr">
                <span><a href="http://flickr.com/photos/fraying">Flickr <small class="fey">View All &#187;</small></a></span>
            <?php if (get_flickrRSS()): ?>
          		<?php get_flickrRSS(); ?>
			<?php endif; ?>
        </div><!-- end flickr -->
	
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
					
		<div class="post">
		    <div class="metainfo">
		        <p>Posted<br />
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y @ ga') ?></a></p>
                <p>Tagged<br />
                <?php the_category(', ') ?></p>
                <p><?php comments_popup_link('No Comments Yet', '1 Comment', '% Comments'); ?></p>
		    </div>
		    <div class="content">
		        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
		        <?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>
		        <?php the_content('[Read more &rarr;]'); ?>
		        <br clear="left" />
		    </div>
        </div><!-- end post -->
		
<?php endwhile; ?>
						
<?php else : ?>
	
		<div class="post">
			<h2>Doh! File Not Found</h2>
			<p>Sorry, what you're looking for isn't here.</p>
        </div><!-- end post -->
	
<?php endif; ?>
		
<div class="postnoline">
	<span class="previous"><?php next_posts_link('&larr; Before') ?></span>
	<span class="next"><?php previous_posts_link('After &rarr;') ?></span>
</div>

<?php get_footer(); ?>