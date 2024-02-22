<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf; 
use App\Models\Cliente;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use function GuzzleHttp\Promise\all;

class InformeController extends Controller
{
    public function generarInforme()
    {
        // Obtén los datos necesarios para el informe desde tu modelo o cualquier otra fuente de datos
        $datosInforme = Cliente::all();

        // Crea una instancia de Dompdf
        // $pdf = PDF::loadView('Reporte.pdf',['datosInforme'=>$datosInforme]);

        // Renderiza la vista del informe en HTML
        $html = view('informe.pdf', compact('datosInforme'));

        // Carga el contenido HTML en Dompdf
        
    }}
