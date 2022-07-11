<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    
  
    public function index()
    {
        return Inertia::render('Welcome',  ['rooms' => Welcome::all()->map(function($room){
            return [
                'id' => $room->id,
                'name' => $room->name,
                'slug' => $room->slug,
                'description' => $room->description,
                'software' => $room->software,
              
                'image' => asset('dist/' . $room->image),
              
               
            ];
      })
      ]);
    }

    

    public function show(Welcome $welcome)
    {
        return Inertia::render('Dashboard',  ['images' => Image::where('welcome_id', $welcome->id)->get()->map(function($image){
            return [
                'id' => $image->id,
               
                'image' => asset('dist/' . $image->image),
               
            ];
     }), 'welcome' =>$welcome 
    ]);
    }

   
   
}
