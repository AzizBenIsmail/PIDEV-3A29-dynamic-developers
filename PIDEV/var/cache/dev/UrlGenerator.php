<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'back' => [[], ['_controller' => 'App\\Controller\\BackController::index'], [], [['text', '/back']], [], []],
    'client_index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client/']], [], []],
    'client_new' => [[], ['_controller' => 'App\\Controller\\ClientController::new'], [], [['text', '/client/new']], [], []],
    'client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'excursion_index' => [[], ['_controller' => 'App\\Controller\\ExcursionController::index'], [], [['text', '/excursion/']], [], []],
    'excursion_new' => [[], ['_controller' => 'App\\Controller\\ExcursionController::new'], [], [['text', '/excursion/new']], [], []],
    'excursion_show' => [['id'], ['_controller' => 'App\\Controller\\ExcursionController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/excursion']], [], []],
    'excursion_edit' => [['id'], ['_controller' => 'App\\Controller\\ExcursionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/excursion']], [], []],
    'excursion_delete' => [['id'], ['_controller' => 'App\\Controller\\ExcursionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/excursion']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], []],
    'reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], []],
    'reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reservation_excursion_index' => [[], ['_controller' => 'App\\Controller\\ReservationExcursionController::index'], [], [['text', '/reservation/excursion/']], [], []],
    'reservation_excursion_new' => [[], ['_controller' => 'App\\Controller\\ReservationExcursionController::new'], [], [['text', '/reservation/excursion/new']], [], []],
    'reservation_excursion_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationExcursionController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservation/excursion']], [], []],
    'reservation_excursion_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationExcursionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reservation/excursion']], [], []],
    'reservation_excursion_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationExcursionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservation/excursion']], [], []],
    'reservation_restaurant_index' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::index'], [], [['text', '/reservation/restaurant/']], [], []],
    'reservation_restaurant_new' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::new'], [], [['text', '/reservation/restaurant/new']], [], []],
    'reservation_restaurant_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservation/restaurant']], [], []],
    'reservation_restaurant_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reservation/restaurant']], [], []],
    'reservation_restaurant_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservation/restaurant']], [], []],
];
