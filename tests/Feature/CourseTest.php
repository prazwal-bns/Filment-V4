<?php


it('can add new course', function(){

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
        ->assertSee('Dashboard')
        ->click('Courses')
        ->click('New Course')
        ->fill('Course title*', 'Test Course')
        ->fill('Credit hours*', '555')
        ->fill('Description', 'Test123')
        ->select('Department*', 'Chemistry')
        ->press('Submit')
        ->assertSee('Created')
        ->debug();
});
