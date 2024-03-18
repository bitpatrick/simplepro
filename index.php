<!-- you are in index.php -->

<?php get_header(); ?>

<main class="container">

   <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
   
    <article>
        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('large', array('class' => 'img-res','alt' => get_the_title())); ?>
            <h3><?php the_title(); ?></h3>
    
        </a>
        
        <p><?php the_excerpt();?></p>
    </article>

   <?php endwhile; ?>
     <p><?php previous_posts_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?></p>
   <?php else : ?>
     <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'simplepro-theme'); ?></p>
   <?php endif; ?>
</main>
<?php get_footer(); ?>



