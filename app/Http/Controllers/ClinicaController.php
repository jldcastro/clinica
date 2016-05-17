<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Clinica;
class ClinicaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
  $clinicas = Clinica::all();
        return view('clinica.index',compact('clinicas'));	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clinica.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Clinica::create([
			'id' =>$request['id'],
        	'direccionClinica' =>$request['direccionClinica'],
        	'comunaClinica'=>$request['comunaClinica'],
        	'telefonoClinica'=>$request['telefonoClinica'],
        	'administradorClinica'=>$request['administradorClinica']
        	]);
   //return "Clinica registrada";
        return redirect('/clinica')->with('message','store');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $idClinica
	 * @return Response
	 */
	public function show($idClinica)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $idClinica
	 * @return Response
	 */
	public function edit($id)
	{
			 $clinica = Clinica::find($id);
        return view('clinica.edit',['clinica'=>$clinica]);
	}
	

	public function editar($id)
	{
			 $clinica = Clinica::find($id);
			   //return view('clinica.editar',compact('clinicas'));
			           return view('clinica.edit',['clinica'=>$clinica]);

     
	}
	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $idClinica
	 * @return Response
	 */
	 public function update(Request $request, $id)
    {
        $clinica = Clinica::find($id);
        $clinica->fill($request->all());
        $clinica->save();
        Session::flash('message','clinica Actualizada Correctamente');
        return Redirect::to('/clinica');
    }

	 public function actualizar (Request $request, $id)
    {
        $clinica = Clinica::find($id);
        $clinica->fill($request->all());
        $clinica->save();
        Session::flash('message','clinica Actualizada Correctamente');
        return Redirect::to('/clinica');
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $idClinica
	 * @return Response
	 */
	public function destroy($id)
	{
		 Clinica::destroy($id);
        Session::flash('message','clinica Eliminada Correctamente');
        return Redirect::to('/clinica');
	}


	public function eliminar ($id){
		$clinica = Book::where(' id', '=', '11') ->first(); 
	}

}
