<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Fetch the JSON data from the URL
        $jsonUrl = 'https://super7tech.com/web_developer_exam_sr/json/slideshow.json';
        $jsonData = file_get_contents($jsonUrl);

        // Decode the JSON data into an array
        $slides = json_decode($jsonData, true);

        // Pass the $slides array to the view
        return view('welcome', compact('slides'));
    }
}

