<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use DateTime;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use LaravelQRCode\Facades\QRCode;

class MakePdfController extends Controller
{
    //
    public $meiryoUiRegular = 'Meiryo-UI-Regular.php';
    public $notoSansBold =  'NotoSans-Bold.php';

    public function make($id)
    {
        $persona = Persona::find($id);

        $pdf = new FPDI();

        $pdf->AddPage();

        $pdf->setSourceFile(__DIR__ . '/../../../resources/pdf/modelo-base.pdf');

        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx);

        $pdf->AddFont('Meiryo', '', $this->meiryoUiRegular);
        $pdf->AddFont('NotoBold', '', $this->notoSansBold);




        $pdf->SetFont('Meiryo', '', '8');
        $pdf->SetXY(20, 73);
        $pdf->Write(8, strtoupper($persona->nombres));

        $pdf->SetXY(20, 80);
        $pdf->Write(8, $persona->documento);


        $pdf->SetFont('NotoBold', '', '8');
        $pdf->SetXY(50, 80);
        $pdf->Write(8, 'Sexo:');


        $pdf->SetFont('Meiryo', '', '8');
        $pdf->SetXY(58, 80);
        $pdf->Write(8, ucfirst(strtolower($persona->sexo)));


        /**Edad */
        $pdf->SetXY(93, 80);
        $pdf->Write(8, $persona->edad);

        //Ciudad de origen
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Rect(132, 41, 25, 5, 'F');

        // Ciudad de origen
        $pdf->SetFont('Meiryo', '', '8');
        $pdf->SetXY(132, 40.5);
        $pdf->Write(8, strtoupper($persona->origen));


        $NuevaFecha =  date('Y-m-d H:i:s', strtotime('+17 minute', strtotime($persona->recepcion_muestra_fecha)));

        $fecha_ingreso = new DateTime($persona->recepcion_muestra_fecha);

        $res_fecha_ingreso = $fecha_ingreso->format('d/m/Y H:i');

        $res_fecha_toma_muestra = $fecha_ingreso->modify('+ 62 minutes')->format('d/m/Y H:i');

        $res_fecha_recepcion = $fecha_ingreso->modify('+ 24 hour')->modify('-45 minutes')->format('d/m/Y H:i');

        $res_fecha_validacion = $fecha_ingreso->modify('+ 18 minutes')->format('d/m/Y H:i');


        $pdf->SetXY(128, 73.4);
        $pdf->Write(8, $res_fecha_ingreso);


        $pdf->SetXY(141, 81.4);
        $pdf->Write(8, $res_fecha_toma_muestra);

        $pdf->SetXY(132, 89.2);
        $pdf->Write(8, $res_fecha_recepcion);


        $pdf->SetXY(132, 99);
        $pdf->Write(8, $res_fecha_validacion);

        $pdf->SetXY(156, 106);
        $pdf->Write(8, '000325114741' . $id);

        $link = env('APP_URL') . "/Resultados/Index/" . $persona->qr;


        QRCode::text($link)->setSize(10)->setMargin(0)->setOutfile(__DIR__ . '/../../../storage/app/public/qr/' . $id . '.png')->png();

        $pdf->Image(__DIR__ . '/../../../storage/app/public/qr/' . $id . '.png', 18, 180, 63, 63);



        return $pdf->Output('asdasd.pdf', 'I');
    }
}
