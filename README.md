# Larvel Filemanager

This package is re-development. Original package has been forked from UniSharp/laravel-filemanager.

# Laravel Filemanager installation
(1) composer require mikkpokk/laravel-filemanager 
(2) Add new providers into app/config.php file:

    IntEServices\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
    Intervention\Image\ImageServiceProvider::class,

(3) Add class alias into app/config.php file:

    'Image' => Intervention\Image\Facades\Image::class,

(4) Publish the package’s config and assets

    php artisan vendor:publish --tag=lfm_config
    php artisan vendor:publish --tag=lfm_public

(5) Ensure that the files & images directories (in config/lfm.php) are writable by your web server(run commands like chown or chmod).

## v1.7.1 released
 * Mime type: image/svg upload problem has been fixed

## Features
 * CKEditor and TinyMCE integration
 * Standalone button
 * Uploading validation
 * Cropping and resizing of images
 * Public and private folders for multi users
 * Customizable routes, middlewares, views, and folder path
 * Supports two types : files and images. Each type works in different directory.
 * Supported locales : ar, bg, de, el, en, es, fa, fr, he, hu, nl, pl, pt-BR, pt_PT, ro, ru, tr, zh-CN, zh-TW

Pull requests are welcome!
  
## Credits
Special thanks to

 * [All UniSharp/laravel-filemanager contibutors](https://github.com/UniSharp/laravel-filemanager/graphs/contributors) from GitHub. (issues / PR)
 * [@taswler](https://github.com/tsawler) the original author.
 * [@olivervogel](https://github.com/olivervogel) for the awesome [image library](https://github.com/Intervention/image).
 * All [@UniSharp](https://github.com/UniSharp) members.
 * [All mikkpokk/laravel-filemanager contibutors](https://github.com/mikkpokk/laravel-filemanager/graphs/contributors) from GitHub. (issues / PR)
