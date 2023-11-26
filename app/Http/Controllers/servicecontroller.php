<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicecontroller extends Controller
{
    public function services(){
        $services = [
            'webDesign' => [
                'title' => 'Web Design',
                'icon' => 'fa fa-paint-brush', 
                'description' => 'Creating visually appealing and user-friendly website designs.',
            ],
            'webDevelopment' => [
                'title' => 'Web Development',
                'icon' => 'fa fa-code', 
                'description' => 'Designing and developing robust and responsive websites and web applications.',
            ],
            'frontendDevelopment' => [
                'title' => 'Frontend Development',
                'icon' => 'fa fa-desktop', 
                'description' => 'Implementing the client-side of websites and web applications for a seamless user experience.',
            ],
            'backendDevelopment' => [
                'title' => 'Backend Development',
                'icon' => 'fa fa-server', 
                'description' => 'Building server-side logic and databases for dynamic web applications.',
            ],
            'fullStackDevelopment' => [
                'title' => 'Full Stack Development',
                'icon' => 'fa fa-cogs', 
                'description' => 'Providing end-to-end development expertise, covering both frontend and backend technologies.',
            ],
            'ecommerce' => [
                'title' => 'E-commerce',
                'icon' => 'fa fa-shopping-cart', 
                'description' => 'Creating online stores with secure payment gateways and advanced e-commerce features.',
            ],
            
        ];

        return view('pages.services',compact('services'));
    }
}
