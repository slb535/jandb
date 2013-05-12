<?php get_header(); ?>
<div id="content">
	 
	<div class="column front-left">

			<article>
	<div id="error404" class="post">
		<h1><?php _e('Page Not Found'); ?></h1>
		<div class="post-content">
			<p><?php _e('We\'re sorry. The page you\'re looking for can\'t be found.'); ?></p>
			<p><?php _e('Please check your URL or use the search box to the right.'); ?></p>
		</div><!--.post-content-->
	</div><!--#error404 .post-->
                        </article>
        </div>    
        <div class="column front-right" >
                      <aside>
                        <?php get_sidebar('search'); ?>
                      </aside>
 </div>
	<div style='clear:both;'></div>
</div><!--#content-->
<?php get_footer(); ?>