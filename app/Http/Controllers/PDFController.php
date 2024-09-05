<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function downloadDirectory()
    {
            $pageTitle = "Gamma Alpha Chapter Directory";
            $breadCrumbs = "profiles/viewDirectory";
            $myProfiles = Profile::orderBy('lastname', 'asc')->orderBy('firstname', 'ASC')->get();           

            $pdf = app('dompdf.wrapper');
            $pdf->loadView('directory.GAdirectory', compact('pageTitle', 'breadCrumbs', 'myProfiles'));
            
            return $pdf->stream('GAdirectory.pdf');
            // return $pdf->stream('GAdirectory.pdf');
    }
    
}
