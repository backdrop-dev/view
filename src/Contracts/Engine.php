<?php
/**
 * Engine interface
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2023. Benjamin Lu
 * @link      https://github.com/benlumia007/backdrop-template-view
 * @license   https://www.gnu.org/licenses/gpl-2.0.html

 */

/**
 * Define namespace
 */
namespace Backdrop\Template\View\Contracts;

/**
 * Engine interface.
 * 
 * @since  1.0.0
 * @access public
 */
interface Engine {

    /**
     * Returns a View object.
     *
     * @since  5.1.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return View
     */
    public function view( string $name, array|string $slugs = [], array|Collection $data = [] ): View;

    /**
     * Outputs a view template.
     *
     * @since  5.1.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return void
     */
    public function display( string $name, array|string $slugs = [], array|Collection $data = [] ): void;

    /**
     * Returns a view template as a string.
     *
     * @since  5.1.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return string
     */
    function render( $name, $slugs = [], $data = [] );
}