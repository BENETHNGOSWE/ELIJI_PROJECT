<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElijiController extends Controller
{
    public function index() {
        return view("home");
    }

    public function showservice() {
        return view("services.servicedetail");
    }

    public function mission() {
        return view("services.mission");
    }

    public function vision() {
        return view("services.vision");
    }

    public function objectives() {
        return view("services.objectives");
    }

    public function construction() {
        return view("what_we_do.construction");
    }

    public function consultancy() {
        return view("what_we_do.consultancy");
    }

    public function disposal() {
        return view("what_we_do.disposal");
    }

    public function supportcrop() {
        return view("what_we_do.supportcrop");
    }

    public function allservicespage() {
        return view('allservicesfolder.allservices');
    }

    public function contactus(){
        return view('contactus.contactus');
    }

    public function aboutus(){
        return view('about_us.aboutusmainpage');
    }
}
