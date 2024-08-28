<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePagesController extends Controller
{
    public function achievementWeek() {

        return view('site_pages.mandated_programs.achievement_week');

    }

    public function talentHunt() {

        return view('site_pages.mandated_programs.talent_hunt');

    }

    public function stemProgram() {

        return view('site_pages.mandated_programs.stem_program');

    }

    public function fatherhoodMentoring() {

        return view('site_pages.mandated_programs.fatherhood_mentoring');

    }

    public function socialAction() {

        return view('site_pages.mandated_programs.social_action');

    }
}
