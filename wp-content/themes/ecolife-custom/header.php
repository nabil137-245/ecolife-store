
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <!-- LOGO -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            🌱 EcoLife<span class="logo-highlight"> Store</span>
        </a>

        <!-- NAVIGASI -->
        <nav class="main-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Beranda
            </a>

            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                Produk
            </a>

            <a href="<?php echo esc_url(get_permalink(18)); ?>">
                Tentang Kami
            </a>

            <a href="<?php echo esc_url(get_permalink(19)); ?>">
                Kontak
            </a>
        </nav>

        <!-- KERANJANG -->
        <div class="header-actions">
            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-link">
                🛒 Keranjang

                <?php if (function_exists('WC') && WC()->cart) : ?>
                    <span class="cart-count">
                        <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
                    </span>
                <?php endif; ?>
            </a>
        </div>

    </div>
</header>
