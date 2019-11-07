<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/movies' => [[['_route' => 'api_app_movie_getmovie', '_controller' => 'App\\Controller\\MovieController::getMovieAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/movie' => [[['_route' => 'api_app_movie_postmovie', '_controller' => 'App\\Controller\\MovieController::postMovieAction'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
