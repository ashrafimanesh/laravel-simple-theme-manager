# Laravel Simple ThemeManager
Handle themes in resources/Themes directory with create config/theme.php file

Requirements
------------
php:>=5.5.9

Quick Installation
------------------
Begin by installing the package through Composer. This package will load with laravel and you don't need to add ServiceProvider.

```__
composer require ashrafi/laravel-simple-theme-manager
```

Publish config.php if you want change default theme name

## Usage
Use ThemeView namespace to load layouts or sections.

For example:
@layouts('ThemeView::{layoutBladeName})
