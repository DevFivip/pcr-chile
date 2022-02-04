<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use LaravelQRCode\Facades\QRCode;

use SimpleSoftwareIO\QrCode;

class PersonaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', ["personas" => $personas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.formulario');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['qr'] = hash('ripemd160', implode("", $data));
        try {
            $persona = Persona::create($data);
        } catch (\Throwable $th) {
            //throw $th;
            return response('Error Complete todo el formulario ó estas credenciales ya estan en uso', 404);
        }

        $link = env("APP_URL", "http://localhost") . '/Resultados/Index';

        $file = '../../../storage/app/public/qr/asdasd.png';

        //  $qr = QRCode::text($link)->setSize(4)->setMargin(2)->setOutfile($file)->png();
        return redirect('persona');

        // return view('persona.index', ["success" => true, "persona" => $persona]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $persona = Persona::find($id)->delete();

        return response()->json(['status' => true, 'persona' => $persona], 200);
        //
    }
}
