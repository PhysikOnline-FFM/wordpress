<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Material-Design
 * @since 1.0
 * @version 1.0
 */

get_header();
get_sidebar(); ?>


<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
		<li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
        <li><a href="sass.html">Sass</a></li>
		<li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">face</i></a></li>
		<li><a href="badges.html"><i class="material-icons right">view_module</i>Link with Right Icon</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<?php get_footer();
