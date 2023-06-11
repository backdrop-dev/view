# Backdrop Template View
The Backdrop Template View is a drop-in package for [Backdrop](https://github.com/benlumia007/backdrop) framework for developing ClassicPress and WordPress theme. This feature is used for setting up and rendering theme template files and it is similar to the WordPress core feature `get_template_part` function. However it allows you to build a hierarchy of potential templates.

## Requirements
* [ClassicPress](https://www.classicpress.net)
* [WordPress](https://wordpress.org)
* [PHP](https://www.php.net/releases/7_1_33.php)
* [Composer](https://getcomposer.org)

## Installation
Use the following command from your preferred command line utility to install Backdrop Template View
<pre>
composer require backdrop-dev/view
</pre>

## Registering and Booting
To begin, create a new provider as follows.
<pre>
$slug->provider( Backdrop\View\Provider::class );
</pre>

After you have successfully registering and booting the provider, all you have to do is use the following to begin using the view
<pre>
Backdrop\View\display( 'something', 'one', [ 'location' => 'data' ] );
</pre>

This will create a new template call `something.php`. you can pass an array as well `something, [ 'one, two ]`. The order would be
<pre>
something-two.php
something-one.php
something.php
</pre>

Please also note that all templates will be located at `public/views` or `resource/views` depending on the project.

## Copyright and Licenses
This project is licensed under the GNU GPL, version 2 or later.

2019–2023 © Benjamin Lu