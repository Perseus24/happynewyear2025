<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $name = 'mama mo';
        // $imageFiles = File::allFiles(public_path('images'));
        // foreach ($imageFiles as $file) {
        //     // Check if the file is an image (you can add more file types if needed)
        //     if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        //         $images[] = 'images/' . $file->getFilename(); // Store the relative path of each image
        //     }
        // }
        $initialVisible = 3;

    // Create a view variable to track visible images
        // $visibleImages = array_slice($images, 0, $initialVisible);
        return view('welcome', compact( 'initiaLVisible' ));
    }
}
