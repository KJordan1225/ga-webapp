<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePagesController extends Controller
{
    public function achievementWeek() {

        return view('site_pages.mandated_programs.achievement_week');

    }
}
