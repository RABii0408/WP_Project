<?php
get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    printf(__('Author: %s', 'your-theme-text-domain'), '<span class="vcard">' . get_the_author() . '</span>');
                } elseif (is_day()) {
                    printf(__('Day: %s', 'your-theme-text-domain'), '<span>' . get_the_date() . '</span>');
                } elseif (is_month()) {
                    printf(__('Month: %s', 'your-theme-text-domain'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'your-theme-text-domain')) . '</span>');
                } elseif (is_year()) {
                    printf(__('Year: %s', 'your-theme-text-domain'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'your-theme-text-domain')) . '</span>');
                } else {
                    _e('Archives', 'your-theme-text-domain');
                }
                ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php
                // Your custom loop content
                ?>

            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <p><?php esc_html_e('No posts found', 'your-theme-text-domain'); ?></p>

        <?php endif; ?>

    </main>
</section>

<?php
get_sidebar();
get_footer();
?>
