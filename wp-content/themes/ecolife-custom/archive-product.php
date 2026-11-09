
<?php get_header(); ?>

<main class="eco-shop">

    <section class="shop-hero">
        <div class="container">
            <span class="hero-label">🌿 DISCOVER OUR COLLECTION</span>
            <h1>Belanja Lebih Bijak,<br><span>Hidup Lebih Hijau.</span></h1>
            <p>
                Temukan produk pilihan ramah lingkungan untuk
                mendukung gaya hidup berkelanjutan.
            </p>
        </div>
    </section>

    <section class="container shop-content">

        <div class="shop-heading">
            <div>
                <span class="section-label">ECOLIFE COLLECTION</span>
                <h2>Semua Produk</h2>
                <p>Pilihan sederhana untuk masa depan yang lebih baik.</p>
            </div>

            <div class="shop-result">
                <?php woocommerce_result_count(); ?>
            </div>
        </div>

        <?php if (woocommerce_product_loop()) : ?>

            <?php do_action('woocommerce_before_shop_loop'); ?>

            <?php woocommerce_product_loop_start(); ?>

                <?php if (wc_get_loop_prop('total')) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php do_action('woocommerce_shop_loop'); ?>
                        <?php wc_get_template_part('content', 'product'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            <?php woocommerce_product_loop_end(); ?>

            <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php else : ?>

            <div class="shop-empty">
                <div>🌱</div>
                <h2>Produk Segera Hadir</h2>
                <p>
                    Kami sedang menyiapkan koleksi produk ramah lingkungan
                    untuk kamu.
                </p>
            </div>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
