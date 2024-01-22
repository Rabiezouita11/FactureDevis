<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Factures;
use App\Models\UserProduct;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF($facture_id)
    {
        // Retrieve facture data
        $facture = Factures::with('user')->find($facture_id);

        // Retrieve user products for the given facture
        $userProducts = UserProduct::with('product')->where('facture_id', $facture_id)->get();

        // Pass the data to your PDF generation logic
        // ...

        // For example, you can return a view with the data
        return view('pdf.invoice', compact('facture', 'userProducts'));
    }
}
