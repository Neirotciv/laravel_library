<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcomePage() {
        return view("welcome");
    }

    public function contactPage() {
        return view("contact");
    }

    public function marketPage() {
        return view("market");
    }
}
