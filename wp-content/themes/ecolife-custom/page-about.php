
<?php get_header(); ?>

<main class="about-page">

    <section class="about-hero">
        <div class="container">
            <span class="hero-label">🌿 ABOUT ECOLIFE</span>
            <h1>Perubahan Besar Berawal dari <span>Langkah Kecil.</span></h1>
            <p>
                Kami percaya bahwa pilihan belanja sehari-hari
                dapat membantu menciptakan masa depan yang lebih baik.
            </p>
        </div>
    </section>

    <section class="about-content container">
        <div class="about-card">
            <span class="about-icon">🌍</span>
            <h2>Siapa Kami?</h2>
            <p>
                EcoLife Store adalah toko online yang menyediakan
                berbagai produk ramah lingkungan untuk mendukung
                gaya hidup berkelanjutan. Kami mengajak masyarakat
                memulai perubahan melalui pilihan produk yang lebih bijak.
            </p>
        </div>

        <div class="about-card">
            <span class="about-icon">🎯</span>
            <h2>Misi Kami</h2>
            <p>
                Mendorong penggunaan produk yang dapat digunakan kembali,
                mengurangi ketergantungan pada barang sekali pakai,
                serta meningkatkan kesadaran terhadap konsumsi bertanggung jawab.
            </p>
        </div>

        <div class="about-card">
            <span class="about-icon">♻️</span>
            <h2>Komitmen SDGs</h2>
            <p>
                EcoLife mendukung SDG 12: Responsible Consumption and Production
                dan SDG 13: Climate Action melalui edukasi serta pilihan
                produk yang lebih ramah lingkungan.
            </p>
        </div>
    </section>

    <section class="about-cta">
        <h2>Mulai Perubahan dari Sekarang.</h2>
        <p>Temukan produk pilihan untuk gaya hidup yang lebih hijau.</p>
        <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="btn-primary">
            Jelajahi Produk →
        </a>
    </section>

</main>

<?php get_footer(); ?>
