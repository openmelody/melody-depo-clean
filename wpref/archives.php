<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/sidebar.php'); ?>

		<div class="post">
			<h2>Archives</h2>
	    </div>
			
		<div class="postnoline">
		    
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

<?php get_footer(); ?>
