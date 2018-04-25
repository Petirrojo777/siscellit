<?php

namespace sisCellit\Http\Controllers;

use Illuminate\Http\Request;
use sisCellit\Http\Requests;
use sisCellit\Http\Requests\ProductoFormRequest;

use sisCellit\producto;

use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

    }

    public function index(Request $request)
    {
    
       if ($request)
       {
            $productos=DB::table('CIT_PRODUCTO')->paginate(5);


            return view ('marketing.producto.otrolistar',["productos"=>$productos]); 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("marketing.producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        //
        $producto = new Producto;
        $producto->NOM_PROD=$request->get('nombre');
        $producto->PIC_PROD=$request->get('foto');
        $producto->PRE_PROD=$request->get('precio');
        $producto->save();

        return Redirect::to('marketing/producto.listar');


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
        return view("marketing.producto.listar",["producto"=>Producto::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("marketing.producto.listar",["producto"=>Producto::findOrFail($id)]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request, $id)
    {
        //
        $producto=producto::findOrFail($id);
        $producto->NOM_PROD=$request->get('nombre');
        $producto->PIC_PROD=$request->get('foto');
        $producto->PRE_PROD=$request->get('precio');
        $producto->update();
        return Redirect::to('marketing/producto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $producto=producto::findOrFail($id);
       $producto->update();
       return Redirect::to('marketing/producto');

    }
}
