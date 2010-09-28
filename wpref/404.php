<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/sidebar.php'); ?>

		<div class="post">
			<h2>404, Dude!</h2>
			<p>Sorry, the page you're looking for is not here. If you're looking for something in particular, try using the search form above or browse the archives below.</p>
	    </div>
			
		<div class="post">
		    
		    <div style="float:right;width:320px;">
		        <h3>Archives by Month</h3>
	            <ul class="nav">
	            	<?php wp_get_archives('type=monthly'); ?>
	            </ul>
            </div>
            
   			    <h3>Archives by Tag</h3>
    		    <ul class="nav">
	    		     <?php wp_list_cats(); ?>
		        </ul>

		</div>

<div class="postnoline">
	<span class="previous">&larr; <a href="/">Back to Home</a></span>
</div>

<?php get_footer(); ?>
