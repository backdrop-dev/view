<?php
/**
 * Engine class.
 *
 * A wrapper around the `View` class with methods for quickly working with views
 * without having to manually instantiate a view object.  It's also useful
 * because it passes an `$engine` variable to all views.
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
namespace Backdrop\Template\View\Engine;

use Backdrop\Proxies\App;
use Backdrop\Template\View\View\Component as View;
use Backdrop\Tools\Collection;

/**
 * Egine class
 * 
 * @since  1.0.0
 * @access public
 */
class Component {

    /**
     * Returns a View object.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return View
     */
    public function view( string $name, array $slugs = [], array $data = [] ): View {

        if ( ! $data instanceof Collection ) {
            $data = new Collection( (array) $data );
        }

        // Pass the engine itself along so that it can be used directly
        // in views.
        $data->add( 'engine', $this );

        return App::resolve( View::class, compact( 'name', 'slugs', 'data' ) );
    }

    /**
     * Outputs a view template.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return void
     */
    public function display( string $name, array $slugs = [], array $data = [] ) {

        $this->view( $name, $slugs, $data )->display();
    }

    /**
     * Returns a view template as a string.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @param  array|Collection  $data
     * @return string
     */
    public function render( string $name, array|string $slugs = [], array|Collection $data = [] ): string {
        return $this->view( $name, $slugs, $data )->render();
    }
}