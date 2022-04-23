<?php

class PagesController
{

    public function home(){
        return view('view');
    }

    public function about(){
        return view('about');

    }

    public function contact(){
        return view('contact');

    }
}