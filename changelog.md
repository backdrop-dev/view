# Changelog

## 1.0.2 - November 17, 2026
Changed
* Requires `backdrop-dev/template-helpers` ^1.0 instead of `dev-develop`, now that it is released. `backdrop-dev/tools` still requires `dev-develop` until it has a release.

## Unreleased
Fixed
* The service provider bound `Backdrop\Template\View\Engine`, which doesn't exist, so the view engine couldn't be resolved. It now binds `Backdrop\View\Engine`.
* `View::__construct()` uses an explicit nullable `Collection` type (deprecated implicit nullable in PHP 8.4).

Changed
* Requires `backdrop-dev/framework` 2.0, `backdrop-dev/tools` and `backdrop-dev/template-helpers`, which the package uses but didn't declare. PHP 7.4 or later.

## 1.0.0 - June 11, 2023
Added
* Our very first official release.