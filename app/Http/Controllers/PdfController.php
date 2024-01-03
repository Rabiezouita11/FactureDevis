<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF()
    {
        // Retrieve client data from the database
       

        // Retrieve purchase data related to the client
       

        // Generate PDF
        $pdf = PDF::loadView('pdf.invoice');

        // Save, download, or display the PDF
        return $pdf->download('rabie.pdf');
    }
}
