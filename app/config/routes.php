<?php
use App\Core\Route;

return [
    new Route ('', 'main', 'index'),
    new Route ('/main/:id', 'main', 'index'),
    new Route ('/main', 'main', 'index'),
    new Route ('/detail/:id', 'detail', 'show'),
];