<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function about()
    {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "This is an about page ...";
        $author = "Developed by: Fakhry Linux";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }
}
