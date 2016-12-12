<?php
/**
 * The template for displaying pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package    Moridrin
 * @subpackage SSV
 * @since      SSV 1.0
 */

get_header(); ?>
<header class="full-width-entry-header test">
    <div class="parallax-container all-terrain primary" style="height: 150px;">
        <?php if (has_post_thumbnail()) : ?>
            <div class="parallax"><img src="<?php the_post_thumbnail_url(); ?>"></div>
            <div class="shade darken-1 valign-wrapper" style="position: absolute; bottom: 0; width: 100%; height: 100%">
                <?php the_title('<h1 class="entry-title center-align white-text valign">', '</h1>'); ?>
            </div>
        <?php else : ?>
            <div class="shade darken-1 valign-wrapper" style="height: 100%">
                <?php the_title('<h1 class="entry-title center-align white-text valign">', '</h1>'); ?>
            </div>
        <?php endif; ?>
    </div>
</header>
<div id="page" class="container container">
    <div class="row">
        <div class="card col s12 <?= is_dynamic_sidebar() ? 'm8 l9 xxl10' : '' ?>">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php
                    the_post();
                    get_template_part('template-parts/content', 'single');
                    if (comments_open() || get_comments_number()) {
                        ?>
                        <div style="padding: 10px;">
                            comments_template();
                        </div>
                        <?php
                    }
                    ?>
                </main>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
