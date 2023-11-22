<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\material;

class exportmateri extends Controller
{
    public function exportPDF($id)
    {

        $materi = material::find($id);

        $pdf = PDF::loadView('pdfmateri', ['materi' => $materi]);

        return $pdf->download('materi_'.$materi->id.'.pdf');
    }
    //
}
