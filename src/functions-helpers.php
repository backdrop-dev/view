<?php
/**
 * View template tags.
 *
 * Template functions related to views.
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2023. Benjamin Lu
 * @link      https://github.com/benlumia007/backdrop-template-view
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Backdrop\View;

use Backdrop\Proxies\App;
use Backdrop\Tools\Collection;

if ( ! function_exists( __NAMESPACE__ . '\\view' ) ) {
    /**
     * Returns a view object.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection $data
     * @return View
     */
    function view( string $name, $slugs = [], $data = [] ): View {

        return App::resolve( Engine::class )->view( $name, $slugs, $data );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\display' ) ) {
    /**
     * Outputs a view template.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection $data
     * @return void
     */
    function display( string $name, $slugs = [], $data = [] ) {

        view( $name, $slugs, $data )->display();
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\render' ) ) {
    /**
     * Returns a view template as a string.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection $data
     * @return string
     */
    function render( string $name, $slugs = [], $data = [] ): string {

        return view( $name, $slugs, $data )->render();
    }
}