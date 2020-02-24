<html>

<?php get_header(); ?>


<div id="ttr_main">
<?php get_sidebar(); ?>
<div id="ttr_content">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>

</div>

<?php get_footer(); ?>

</div>
</body>
</html>