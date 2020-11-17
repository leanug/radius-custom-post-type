<?php
/**
 * Plugin Name: Radius Custom Post Types
 * Plugin URI:
 * Description: Adds Custom Post Types for the theme
 * Author:      Leandro Ubilla González
 * Version:     1.0
 * Author URI:  https://www.leandroubilla.com
 * License: GNU General Public License v2 or later
 * License URI: LICENSE
 * Text Domain: radius
 */

if( ! defined( 'ABSPATH' ) ) die();

/**
 * Custom post type.
 */
require 'inc/portfolio-post-type.php';

/**
 * Custom Taxonomy Project Type.
 */
require 'inc/project-type-taxonomy.php';

/**
 * Custom Taxonomy Project Category.
 */
require 'inc/project-category-taxonomy.php';