<?php

test('smoke test', function(){
    $plainPassword = 'password';

    $user = [
        'email' => 'admin@gmail.com',
        'password' => $plainPassword
    ];

    $page = visit('http://localhost:8000/admin/login');

    $page->assertSee('Sign in')
        ->fill('Email address*', $user['email'])
        ->fill('Password*', $user['password'])
        ->press('.fi-ac-btn-action')
        ->assertSee('Dashboard');

    $routes = [
        '/admin/login',
        '/admin/dashboard',
        '/admin/courses',
    ];

    foreach($routes as $route){
        $response = visit($route);

        $response->assertNoJavascriptErrors();
    }
});
