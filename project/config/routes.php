<?php
	use \Core\Route;
	
	return [

        new Route('/',   'main', 'init'),

		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить

        new Route('/test/:var1/:var2/', 'page', 'act'),

        new Route('/page/:id', 'page', 'one'),
        new Route('/pages/',   'page', 'all'),

        new Route('/user/all/', 'user', 'all'),
        new Route('/user/first/:n/', 'user', 'first'),
        new Route('/user/:id/:key/', 'user', 'info'),
        new Route('/user/:id/', 'user', 'show'),

        new Route('/product/all/', 'product', 'all'),
        new Route('/product/:id/', 'product', 'show'),

	];
	
