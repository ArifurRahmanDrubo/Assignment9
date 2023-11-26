<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function blog(){
        $blogPosts = [
            [
                'title' => '10 Essential Web Development Tools',
                'content' => 'In this blog post, we explore 10 essential web development tools that can boost your productivity and enhance your development workflow.',
                'date' => '2023-01-15',
                'image' => 'asset/images/blog/6-3.jpg',
                'tags' => ['Web Development', 'Tools', 'Productivity'],
            ],
            [
                'title' => 'Responsive Design Best Practices',
                'content' => 'Learn the best practices for creating responsive designs that work seamlessly across various devices and screen sizes.',
                'date' => '2023-02-20',
                'image' => 'asset/images/blog/6-2.jpg',
                'tags' => ['Responsive Design', 'Web Design', 'Best Practices'],
            ],
            [
                'title' => 'Laravel Tips and Tricks',
                'content' => 'Discover some valuable tips and tricks for optimizing your Laravel applications and improving your development experience.',
                'date' => '2023-03-10',
                'image' => 'asset/images/blog/6-2.png',
                'tags' => ['Laravel', 'Tips', 'Development'],
            ],
           
        ];
        return view('pages.blog',compact('blogPosts'));
    }
}
