<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aa62ca7900cf9d7c7258cee3d36ecdf
{
    public static $classMap = array (
        'ComposerAutoloaderInit2aa62ca7900cf9d7c7258cee3d36ecdf' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2aa62ca7900cf9d7c7258cee3d36ecdf' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DataMissingException' => __DIR__ . '/../..' . '/exceptions/data_missing_exception.class.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'DatabaseConnectionException' => __DIR__ . '/../..' . '/exceptions/database_connection_exception.class.php',
        'DatabaseExecutionException' => __DIR__ . '/../..' . '/exceptions/database_execution_exception.class.php',
        'Dispatcher' => __DIR__ . '/../..' . '/application/dispatcher.class.php',
        'IndexView' => __DIR__ . '/../..' . '/views/index_view.class.php',
        'InvalidDateException' => __DIR__ . '/../..' . '/exceptions/invalid_date_exception.class.php',
        'Movie' => __DIR__ . '/../..' . '/models/movie.class.php',
        'MovieController' => __DIR__ . '/../..' . '/controllers/movie_controller.class.php',
        'MovieDetail' => __DIR__ . '/../..' . '/views/movie/detail/movie_detail.class.php',
        'MovieEdit' => __DIR__ . '/../..' . '/views/movie/edit/movie_edit.class.php',
        'MovieError' => __DIR__ . '/../..' . '/views/movie/error/movie_error.class.php',
        'MovieIndex' => __DIR__ . '/../..' . '/views/movie/index/movie_index.class.php',
        'MovieIndexView' => __DIR__ . '/../..' . '/views/movie/movie_index_view.class.php',
        'MovieModel' => __DIR__ . '/../..' . '/models/movie_model.class.php',
        'MovieSearch' => __DIR__ . '/../..' . '/views/movie/search/movie_search.class.php',
        'WelcomeController' => __DIR__ . '/../..' . '/controllers/welcome_controller.class.php',
        'WelcomeIndex' => __DIR__ . '/../..' . '/views/welcome/welcome_index.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2aa62ca7900cf9d7c7258cee3d36ecdf::$classMap;

        }, null, ClassLoader::class);
    }
}
