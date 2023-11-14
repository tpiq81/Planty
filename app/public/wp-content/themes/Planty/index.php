<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

 
if ( ! defined( 'ABSPATH' ) ) { // Vérifie si ABSPATH est défini, sinon, empêche l'accès direct au fichier.
	exit; 
}
// Inclut l'en-tête du thème.
get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php
		// Appelle la fonction pour afficher le contenu en haut de la zone principale.
		astra_primary_content_top();
       // Appelle la fonction pour afficher la boucle du contenu.
		astra_content_loop();

		astra_pagination();
      // Appelle la fonction pour afficher le contenu en bas de la zone principale.
		astra_primary_content_bottom();
		?>
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;
// Inclut le pied de page du thème.
get_footer();

