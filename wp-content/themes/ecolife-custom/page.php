
<?php get_header(); ?>

<main class="container page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-heading">
            <span class="hero-label">🌿 ECOLIFE STORE</span>
            <h1><?php the_title(); ?></h1>
            <div class="page-description">
                <?php the_content(); ?>
            </div>
        </section>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
