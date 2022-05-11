<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;

/**
 * Class SuscripcionController
 * @package App\Http\Controllers
 */
class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suscripcions = Suscripcion::paginate();

        return view('suscripcion.index', compact('suscripcions'))
            ->with('i', (request()->input('page', 1) - 1) * $suscripcions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suscripcion = new Suscripcion();
        return view('suscripcion.create', compact('suscripcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Suscripcion::$rules);

        $suscripcion = Suscripcion::create($request->all());

        return redirect()->route('suscripcions.index')
            ->with('success', 'Suscripcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suscripcion = Suscripcion::find($id);

        return view('suscripcion.show', compact('suscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suscripcion = Suscripcion::find($id);

        return view('suscripcion.edit', compact('suscripcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suscripcion $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscripcion $suscripcion)
    {
        request()->validate(Suscripcion::$rules);

        $suscripcion->update($request->all());

        return redirect()->route('suscripcions.index')
            ->with('success', 'Suscripcion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suscripcion = Suscripcion::find($id)->delete();

        return redirect()->route('suscripcions.index')
            ->with('success', 'Suscripcion deleted successfully');
    }
}
