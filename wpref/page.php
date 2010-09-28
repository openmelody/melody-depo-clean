<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/sidebar.php'); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
					
		<div class="post">
		    <div class="metainfo">
		        <p>Posted<br />
                <?php the_time('j F Y @ ga') ?></p>
                <p><?php comments_popup_link('No Comments Yet', '1 Comment', '% Comments'); ?></p>
		    </div>
		    <div class="content">
		        <h3><?php the_title(); ?></h3>
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
	<span class="previous">&larr; <a href="/">Back to Home</a></span>
</div>

<br clear="all" />

<?php get_footer(); ?>