<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogPostSeeder extends Seeder
{/**
     * Run the database seeds.
     */
    public function run()
    {
        BlogPost::create([
            'title' => 'Introduction to Laravel',
            'content' => 'Laravel is a powerful MVC PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications.',
            'author' => 'Admin',
            'slug' => 'introduction-to-laravel',
            'is_published' => true,
        ]);

        BlogPost::create([
            'title' => 'Getting Started with Eloquent ORM',
            'content' => 'Eloquent ORM provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" that is used to interact with that table.',
            'author' => 'Admin',
            'slug' => 'getting-started-with-eloquent-orm',
            'is_published' => true,
        ]);

        BlogPost::create([
            'title' => 'Understanding Blade Templating Engine',
            'content' => 'Blade is the simple, yet powerful templating engine that Laravel uses. With Blade, you can use plain PHP code in your views, which is compiled into cached PHP code to ensure optimal performance.',
            'author' => 'Admin',
            'slug' => 'understanding-blade-templating-engine',
            'is_published' => true,
        ]);

        BlogPost::create([
            'title' => 'Introduction to Middleware',
            'content' => 'Middleware provide a convenient mechanism for filtering HTTP requests entering your application. Laravel includes several middleware such as authentication and CSRF protection.',
            'author' => 'Admin',
            'slug' => 'introduction-to-middleware',
            'is_published' => true,
        ]);

        BlogPost::create([
            'title' => 'Setting Up Laravel Authentication',
            'content' => 'Laravel provides a built-in authentication system that allows you to easily create user registration, login, and password management.',
            'author' => 'Admin',
            'slug' => 'setting-up-laravel-authentication',
            'is_published' => false,
        ]);
    }
}
