<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php
// Vérifier si la page actuelle n'est pas "Commander"
if (!is_page('commander')) {
    // Vérifier si la page actuelle est l'accueil ou "Nous rencontrer"
    if (is_front_page() || is_page('nous-rencontrer')) {
        ?>
       <div class="footer-image <?php if (is_page('nous-rencontrer')) echo 'contact-image'; ?>">
    <img src="http://planty.local/wp-content/uploads/2023/10/Group-8.png" alt="Image description">
</div>


        <?php
    }
}

?>
<footer>
    <a href="mentions-legales">Mentions légales</a>
</footer>

</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>
</html>
