<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Producto;
use App\Categoria;
use Input;
use Request;
use Storage;
use File;
use Illuminate\Http\Response;
use Session;
use Image;


class ProductosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = Producto::all();
		return view('productos/lista', ['productos' => $productos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//dd(gd_info());
		return view('productos/nuevo');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$producto = new Producto;
		$producto->nombre = Input::get('nombre_producto');
		$producto->descripcion = Input::get('descripcion');
		
		
		$archivo = Input::file('imagen');
		$extension = $archivo->getClientOriginalExtension();

		Image::make($archivo->getRealPath())->resize(250,250)->save();

		Storage::disk('local')->put($archivo->getFilename().'.'.$extension, File::get($archivo));
		
		$producto->mime = $archivo->getClientMimeType();
		$producto->original_filename = $archivo->getClientOriginalName();
		$producto->filename = $archivo->getFilename().'.'.$extension;

		$producto->min_stock = Input::get('min_stock');
		$producto->max_stock = Input::get('max_stock');
		$producto->act_stock = Input::get('in_stock');
		$producto->precio = Input::get('precio');
		$producto->save();

		Session::flash('message', 'Producto agregado correctamente!'); 
		return redirect()->back();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$entry = Producto::where('id', '=', $id)->firstOrFail();

		//dd($entry);

		$file = Storage::disk('local')->get($entry->filename);
 

		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Producto::find($id);

		return view('productos/editar', ['producto' => $producto]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$producto = Producto::find($id);

		$producto->nombre = Input::get('nombre_producto');
		$producto->descripcion = Input::get('descripcion');
		

		if(Input::hasFile('imagen')){
			$archivo = Request::file('imagen');
			$extension = $archivo->getClientOriginalExtension();
			Storage::disk('local')->put($archivo->getFilename().'.'.$extension, File::get($archivo));

			$producto->mime = $archivo->getClientMimeType();
			$producto->original_filename = $archivo->getClientOriginalName();
			$producto->filename = $archivo->getFilename().'.'.$extension;
		}

		$producto->min_stock = Input::get('min_stock');
		$producto->max_stock = Input::get('max_stock');
		$producto->act_stock = Input::get('in_stock');
		$producto->precio = Input::get('precio');

		$producto->save();

		Session::flash('message','Se ha editado correctamente!');
		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Producto::find($id);
		if(Storage::disk('local')->exists($producto->filename)){
			Storage::disk('local')->delete($producto->filename);
		}

		$producto->delete();

		Session::flash('message', 'Eliminado correctamente!');
		return redirect()->back();
	}

}
