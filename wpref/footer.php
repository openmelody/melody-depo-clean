<br clear="all" />

    <div class="footer">
		
		    <div>
    			<p><strong>About</strong></p>
    			<p>Your info here.</p>
		    </div>
	
		    <div>
    			<p><strong>Buy the Book</strong></p>

<?
$textfile = TEMPLATEPATH . "/random-book.txt";
$items = file("$textfile");
$item = rand(0, sizeof($items)-1);
echo $items[$item];
?>

		    </div>
	
		    <div>
    			<p><strong>So I Sez</strong></p>

<?
$textfile = TEMPLATEPATH . "/random-quote.txt";
$items = file("$textfile");
$item = rand(0, sizeof($items)-1);
echo $items[$item];
?>

		    </div>
	
		    <div>
    			<p><strong>Recent Archives</strong></p>
    			
    			<ul class="nav"><?php wp_get_archives('type=monthly&limit=7');Ê?></ul>

    			<p><a href="/archives/">View All Archives</a></p>
		    </div>
	
		    <div class="last">
    			<p><strong>Contact</strong></p>
    			<p>Your info here.</p>
		    </div>
	
	    </div><!-- end footer -->

        <br clear="all" />
        
		<div class="copyright">
        	<?php if (is_home()) : ?>
        	<?php else : ?>
        	<span class="previous">&larr; <a href="<?php bloginfo('url') ?>">Back to Home</a></span>
            <?php endif; ?>
            <p>&copy; <?php bloginfo('name'); ?>. Powered by <a href="http://wordpress.org">WordPress</a> using the <a href="http://powazek.com/posts/516">DePo Clean Theme</a>.</p>
            <?php wp_footer(); ?>
		</div>

	</div> <!-- end container -->
</body>
</html>
