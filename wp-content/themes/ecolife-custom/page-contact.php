
<?php get_header(); ?>

<main class="contact-page">

    <section class="about-hero">
        <div class="container">
            <span class="hero-label">💬 GET IN TOUCH</span>
            <h1>Hubungi <span>EcoLife Store.</span></h1>
            <p>
                Punya pertanyaan tentang produk atau layanan kami?
                Kami siap membantu.
            </p>
        </div>
    </section>

    <section class="container contact-content">
        <div class="contact-card">
            <span>📍</span>
            <h2>Lokasi</h2>
            <p>Indonesia</p>
        </div>

        <div class="contact-card">
            <span>🌱</span>
            <h2>Layanan</h2>
            <p>Informasi produk dan pemesanan EcoLife Store.</p>
        </div>

        <div class="contact-card">
            <span>🤝</span>
            <h2>Komitmen</h2>
            <p>Bersama membangun kebiasaan belanja yang lebih bertanggung jawab.</p>
        </div>
    </section>

    <section class="about-cta">
        <h2>Siap Memulai Gaya Hidup Hijau?</h2>
        <p>Jelajahi koleksi produk ramah lingkungan kami.</p>
        <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="btn-primary">
            Lihat Produk →
        </a>
    </section>

</main>

<?php get_footer(); ?>
