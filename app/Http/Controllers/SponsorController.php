<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index () {
        $files = Storage::disk('public')->listContents('sponsoren');;
        return view('sites.sponsoren', compact('files'));
    }

    public function store () {
        //
    }

    public function update () {
        //
    }
}
