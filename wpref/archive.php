<?php get_header(); ?>

    <?php include (TEMPLATEPATH . '/sidebar.php'); ?>

        <?php if (have_posts()) : ?>

            <?php //$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>				
	<div class="post">
			<h2 style="font-weight:normal">Posts Tagged <strong><?php echo single_cat_title(); ?></strong></h2>
    </div>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<div class="post">
			<h2 style="font-weight:normal">Posts from <strong><?php the_time('F Y'); ?></strong></h2>
    </div>
    
			<?php } ?>

<?php while (have_posts()) : the_post(); ?>
					
		<div class="post">
		    <div class="metainfo">
		        <p>Posted<br />
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y @ ga') ?></a></p>
                <p>Tagged<br />
                <?php the_category(', ') ?></p>
		    </div>
		    <div class="content">
		        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		        <?php the_excerpt() ?>
		        <br clear="left" />
		    </div>
        </div><!-- end post -->
		
<?php endwhile; ?>
						
<?php else : ?>
	
		<div class="post">
        <h2 style="font-weight:normal">Doh! No results for <strong><?php echo $s; ?></strong></h2>
        <p>Try another search or check out one of these fine recent posts.</p>
        </div>

		<?php query_posts('showposts=10'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
		    <div class="metainfo">
		        <p>Posted<br />
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y @ ga') ?></a></p>
                <p>Tagged<br />
                <?php the_category(', ') ?></p>
		    </div>
		    <div class="content">
		        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		        <?php the_excerpt() ?>
		        <br clear="left" />
		    </div>
        </div><!-- end post -->

		<?php endwhile; endif; ?>
	
<?php endif; ?>

<div class="postnoline">
	<span class="previous"><?php next_posts_link('&larr; Before') ?></span>
	<span class="next"><?php previous_posts_link('After &rarr;') ?></span>
</div>

<?php get_footer(); ?>