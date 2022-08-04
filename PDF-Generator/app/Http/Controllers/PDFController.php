<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    //
    public function generatePDF(){
        $data = [
            'title' => 'Welcome to OnlineWebTutorBlog.com',
            'author' => "Sanjay"
        ];
          
        $pdf = PDF::loadView('my-pdf-file', $data);
    
        return $pdf->download('onlinewebtutorblog.pdf');
    }
}
