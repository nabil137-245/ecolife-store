
<?php get_header(); ?>

<main class="home-page">

    <!-- HERO -->
    <section class="hero-section">
        <div class="container hero-content">
            <div class="hero-text">
                <span class="hero-label">🌿 GOOD FOR YOU, GOOD FOR EARTH</span>

                <h1>
                    Pilihan Kecil Hari Ini,
                    <span>Dampak Besar untuk Bumi.</span>
                </h1>

                <p>
                    Temukan berbagai produk ramah lingkungan untuk
                    mendukung gaya hidup yang lebih bijak dan berkelanjutan.
                </p>

                <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="btn-primary">
                    Jelajahi Produk →
                </a>
            </div>

            <div class="hero-visual">
                <div class="hero-emoji">🌱</div>
                <span>Live Green, Live Better</span>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section class="benefits-section container">
        <div class="benefit-card">
            <span>♻️</span>
            <h3>Ramah Lingkungan</h3>
            <p>Mendukung penggunaan produk yang lebih berkelanjutan.</p>
        </div>

        <div class="benefit-card">
            <span>🌍</span>
            <h3>Peduli Bumi</h3>
            <p>Mengajak perubahan melalui kebiasaan sederhana.</p>
        </div>

        <div class="benefit-card">
            <span>💚</span>
            <h3>Belanja Bijak</h3>
            <p>Pilih produk yang bermanfaat dan dapat digunakan kembali.</p>
        </div>
    </section>

    <!-- PRODUK -->
    <section class="products-section container">
        <div class="section-heading">
            <span>OUR COLLECTION</span>
            <h2>Produk Pilihan EcoLife</h2>
            <p>Mulai langkah kecil menuju gaya hidup yang lebih hijau.</p>
        </div>

        <?php if (class_exists('WooCommerce')) : ?>
            <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]'); ?>
        <?php else : ?>
            <p>Produk akan segera hadir.</p>
        <?php endif; ?>

        <div class="products-more">
            <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="btn-outline">
                Lihat Semua Produk →
            </a>
        </div>
    </section>

    <!-- SDG -->
    <section class="sdg-section">
        <div class="container sdg-content">
            <span>OUR PURPOSE</span>
            <h2>Belanja Bijak, Selamatkan Bumi.</h2>
            <p>
                EcoLife Store mendukung SDG 12 melalui konsumsi dan
                produksi yang bertanggung jawab, serta SDG 13 melalui
                kepedulian terhadap perubahan iklim.
            </p>
        </div>
    </section>

</main>

<?php get_footer(); ?>
