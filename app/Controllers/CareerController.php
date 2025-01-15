<?php

namespace App\Controllers;

class CareerController
{
    public function index()
    {
        $title = "Career";
        $careers = [
            [
                'title' => 'Senior Salesforce Developer',
                'company' => 'Tech Solutions Inc',
                'location' => 'Remote',
                'salary' => '$120,000 - $160,000',
                'description' => 'Looking for an experienced Salesforce developer...',
                'postedAt' => '2025-01-15'
            ],
            [
                'title' => 'Salesforce Administrator',
                'company' => 'Global Services Ltd',
                'location' => 'New York, NY',
                'salary' => '$80,000 - $100,000',
                'description' => 'Seeking a certified Salesforce administrator...',
                'postedAt' => '2025-01-14'
            ]
        ];

        ob_start();
        require __DIR__ . '/../../pages/career.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layout.php';
    }
}
