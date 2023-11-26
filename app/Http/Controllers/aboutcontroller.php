<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    public function about(){
         $skills =[
            'Javascript' => '85%',
            'Wordpress' => '90%',
            'React' => '70%',
            'Laravel' => '80%'
         ];
         $biodata =[
            'BirthDay' => '02 November',
            'Website' => 'drubo.netlify.app',
            'Age ' => '24',
            'Degree' => 'Hons',
            'City' => 'Dhaka',
            'Phone' => '019559378326',
            'Email ' => 'arifurrahmandrubo121@gmail.com',
            'Freelance'=> 'Available'
         ];
         $experienceDetails = [
            [
                'title' => 'Software Developer',
                'company' => 'ABC Tech Solutions',
                'location' => 'City, Country',
                'date' => 'June 20XX - Present',
                'responsibilities' => 
                     'Collaborated with cross-functional teams to design and develop scalable web applications.
                    Implemented new features and functionalities, improving the user experience.
                    Conducted code reviews and provided mentorship to junior developers.
                    Utilized agile methodologies for project management and delivery.',
                
            ],
            [
                'title' => 'Intern, Data Analyst',
                'company' => 'XYZ Analytics',
                'location' => 'City, Country',
                'date' => 'May 20XX - August 20XX',
                'responsibilities' => 
                    'Assisted in collecting, cleaning, and analyzing large datasets for business intelligence.
                    Created interactive dashboards and reports for clients using tools like Power BI.
                    Collaborated with the team to develop and implement data-driven solutions.
                    Presented findings and insights to stakeholders in a clear and concise manner.',
                
            ],
           
        ];
        $educationDetails = [
            [
                'degree' => 'Master of Science in Computer Science',
                'university' => 'University of XYZ',
                'location' => 'City, Country',
                'graduation_date' => 'May 20XX',
                'thesis' => 'Advanced Techniques in Machine Learning for Image Recognition.',
                'courses' => [
                    'Artificial Intelligence',
                    'Big Data Analytics',
                    'Cloud Computing',
                    'Advanced Algorithms',
                ],
            ],
            [
                'degree' => 'Bachelor of Science in Information Technology',
                'university' => 'Tech University',
                'location' => 'City, Country',
                'graduation_date' => 'May 20XX',
                'capstone_project' => 'Developed a comprehensive IT solution for a local business, improving efficiency and customer engagement.',
                'courses' => [
                    'Web Development',
                    'Database Management',
                    'Networking Fundamentals',
                    'Software Engineering',
                ],
            ],
            
        ];


        return view('pages.about',compact('skills', 'biodata','educationDetails','experienceDetails') );
    }
}
