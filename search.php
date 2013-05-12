<?php get_header(); ?>

	
	
                        
                        
<div id="content" class="search">
	<div class="column front-left">

    
	<h1>Search results for: <?php the_search_query(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	
			<div class="post-excerpt">
				<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div><!--.post-excerpt-->
		</div><!--.post-single-->
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2><?php _e('No Results'); ?></h2>
			<p><?php _e('Please feel free try again!'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>

	<div class="newer-older">
			<p class="newer-older"><?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?></p>
	</div><!--.oldernewer-->

        
		
        
        </div> <!-- end column front-left -->
          <div class="column front-right" >
                   <aside>
                       
                       <?php get_sidebar('search'); ?>
                   </aside>
                        
             </div>
	<div style='clear:both;'></div>
 </div><!--#content-->
<?php get_footer(); ?>
