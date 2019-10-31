# Kntnt's OPcache purge on update

WordPress mu-plugin that purges opcache on plugin or theme update.

## Description

If you turn of timestamp validation to avoid unnecessary filesystem calls, you will need this plugin to make sure PHP:s opcache is resetted when plugins and themes are updated.

## Installation

1. In your `wp-content` directory, create a `mu-plugin` directory if it not already exists.
2. Copy `kntnt-reset-opcache-on-update.php` into `mu-plugin`. Only the file. No additional directory.

## Changelog

### 1.0.1

Renamed. Added admin notice.

### 1.0.0

Initial release.
