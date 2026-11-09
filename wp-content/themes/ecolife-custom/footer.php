
<footer class="site-footer">
    <div class="container footer-content">

        <div class="footer-brand">
            <h2>🌱 EcoLife Store</h2>
            <p>Belanja Bijak, Selamatkan Bumi.</p>
            <p>Mendukung gaya hidup ramah lingkungan melalui produk berkelanjutan.</p>
        </div>

        <div class="footer-links">
            <h3>Jelajahi</h3>
            <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
            <a href="<?php echo esc_url(home_url('/shop/')); ?>">Produk</a>
            <a href="<?php echo esc_url(home_url('/about/')); ?>">Tentang Kami</a>
        </div>

        <div class="footer-links">
            <h3>Informasi</h3>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">Kontak</a>
            <a href="<?php echo esc_url(home_url('/cart/')); ?>">Keranjang</a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo esc_html(wp_date('Y')); ?> EcoLife Store. All rights reserved.</p>
        <p>SDG 12 • Responsible Consumption and Production</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
