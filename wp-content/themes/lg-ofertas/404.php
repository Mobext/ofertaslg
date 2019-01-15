<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LG-ofertas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" style="position: relative; display: table; width: 100%; min-height: 600px; background: url('<?php echo get_template_directory_uri(); ?>/img/fondo-404.jpg') center center no-repeat; background-size: cover;" >
				<header class="page-header" style="display: inline-block; vertical-align: middle; margin-top: 200px;">
					<h1 class="page-title"><?php esc_html_e( 'No pudimos encontrar lo que estabas buscando!', 'lg-ofertas' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>
					<?php echo 'Vuelve a nuestra <a href="'.esc_url( home_url( '/' ) ).'">sección de ofertas</a> o dirígete al sitio oficial de <a href="http://www.lg.com/ar">LG Argentina</a>'; ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

