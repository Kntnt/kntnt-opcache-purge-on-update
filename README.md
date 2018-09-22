# Kntnt's reset opcache on update plugin

WordPress mu-plugin that resets opcache on plugin installation or update.

## Description

If you turn of timestamp validation to avoid unnecessary filesystem calls, you will need this plugin to make sure PHP:s opcache is resetted when plugins and themes and installed or updated.

## Installation

1. In your `wp-content` directory, create a `mu-plugin` directory if it not already exists.
2. Copy `kntnt-reset-opcache-on-update.php` into `mu-plugin`. Only the file. No additional directory.

## Changelog

### 1.0.0

Initial release.
