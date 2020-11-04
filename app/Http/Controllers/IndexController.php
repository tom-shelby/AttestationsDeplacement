<?php

namespace App\Http\Controllers;

// use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Mail;

class IndexController extends Controller
{

    /**
     *
     */
    public function index()
    {

        // $pdf = App::make('pdf.wrapper');

        // $view = view('pdfedit')->render();

        // // dd($view);

        // ini_set('max_execution_time', 300);

        // $pdf->loadHtml($view);

        // ini_restore('max_execution_time');

        return view('pdfedit');
    }

    public function makePDF(Request $request, PDF $pdf) {
        //Validation des champs émits par le biais du formulaire
        $request->validate([
            'input_nom'             => 'bail|required|string|min:6|max:35',
            'input_date_naissance'  => 'bail|required',
            'input_lieu_naissance'  => 'bail|required',
            'input_lieu_residence'	=> 'bail|required',
            'input_motif'           => 'bail|required',
            'input_fait_a'          => 'bail|required',
            'input_fait_le'         => 'bail|required|date',
            'input_heure_sortie'    => 'bail|required',
        ]);

        // dd($request->all());
        ini_set('max_execution_time', 300);
        
        // dd($request->except('_token'));
        $data = $request->except('_token');
        
        $data['input_date_naissance'] = date('d/m/Y', strtotime($data['input_date_naissance']));
        $data['input_fait_le'] = date('d/m/Y', strtotime($data['input_fait_le']));

        $pixmapMotif = [
            1 => 280,
            2 => 335,
            3 => 400,
            4 => 450,
            5 => 495,
            6 => 540,
            7 => 615,
            8 => 660,
            9 => 715,
        ];


        //$html = ' <img src="'.asset('img\attestation-de-deplacement-derogatoire.jpg').'">';

        $pdf->loadView('pdf', compact('data', 'pixmapMotif'));
        $pdf->save(storage_path('document.pdf'));
        ini_restore('max_execution_time');

        if(isset($request['input_mail'])) {
            $mail = $request['input_mail'];

            Mail::send('mail', [], function($message) use ($mail) {
                $message->to($mail)
                        ->from('baptiste.catois@gmail.com')
                        ->attach(storage_path('document.pdf'));
            });
        }
        

        return $pdf->stream();
    }

    public function mailtest()
    {
        return view('mail');
    }
}
