<?php

test('can access all pages', function(){
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

    // old way of testing
    // foreach($routes as $route){
    //     $response = visit($route);

    //     $response->assertNoJavascriptErrors();
    // }

    visit($routes)
        ->assertNoSmoke();
});
