<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $title = "SFBEN - Your Salesforce Career Hub";

        $featuredArticle = [
            'title' => 'TOP 10 Hottest Salesforce Spring 25 Features for ADMINS',
            'author' => 'Salesforce Ben',
            'excerpt' => 'Discover the most exciting new features coming to Salesforce in Spring 25...',
            'thumbnail' => '/api/placeholder/600/400',
            'link' => '/articles/editors-picks'
        ];

        $latestNews = [
            [
                'title' => 'Salesforce Announces Einstein 1 Platform',
                'date' => '2025-01-15',
                'thumbnail' => '/api/placeholder/400/300',
                'link' => '/news'
            ],
            [
                'title' => 'New Salesforce Certification Path Announced',
                'date' => '2025-01-14',
                'thumbnail' => '/api/placeholder/400/300',
                'link' => '/news'
            ]
        ];

        $upcomingEvents = [
            [
                'title' => 'Salesforce World Tour New York',
                'date' => '2025-03-15',
                'location' => 'Javits Center, NY',
                'thumbnail' => '/api/placeholder/400/300',
                'link' => '/events'
            ],
            [
                'title' => 'Admin Success Workshop',
                'date' => '2025-02-20',
                'location' => 'Virtual',
                'thumbnail' => '/api/placeholder/400/300',
                'link' => '/events'
            ]
        ];

        $featuredJobs = [
            [
                'title' => 'Senior Salesforce Developer',
                'company' => 'Tech Solutions Inc',
                'location' => 'Remote',
                'salary' => '$120,000 - $160,000',
                'link' => '/career'
            ],
            [
                'title' => 'Salesforce Administrator',
                'company' => 'Global Services Ltd',
                'location' => 'New York, NY',
                'salary' => '$80,000 - $100,000',
                'link' => '/career'
            ]
        ];

        ob_start();
        require __DIR__ . '/../../pages/home.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layout.php';
    }
}
