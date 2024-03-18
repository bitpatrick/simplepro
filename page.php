<!-- you are in page.php -->
<?php get_header(); ?>


<main class="container">

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <article>
        <?php the_content(esc_html__('Read More...', 'slug-theme'));?>
    </article>
    <?php endwhile; ?>

    <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'simplepro-theme'); ?></p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>