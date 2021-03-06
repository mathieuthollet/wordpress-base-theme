<?php


spl_autoload_register(function ($class) {
    if (substr($class, 0, strlen(STARTER_THEME_NAMESPACE) + 1) == STARTER_THEME_NAMESPACE . '\\') {
        $filename = get_stylesheet_directory() . '/inc/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if (file_exists($filename))
            include $filename;
    }
});
