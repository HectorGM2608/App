<?php

namespace App\Http\Controllers;

use App\Models\Almacene;
use Illuminate\Http\Request;

/**
 * Class AlmaceneController
 * @package App\Http\Controllers
 */
class AlmaceneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes = Almacene::paginate();

        return view('almacene.index', compact('almacenes'))
            ->with('i', (request()->input('page', 1) - 1) * $almacenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacene = new Almacene();
        return view('almacene.create', compact('almacene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Almacene::$rules);

        $almacene = Almacene::create($request->all());

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $almacene = Almacene::find($id);

        return view('almacene.show', compact('almacene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almacene = Almacene::find($id);

        return view('almacene.edit', compact('almacene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Almacene $almacene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacene $almacene)
    {
        request()->validate(Almacene::$rules);

        $almacene->update($request->all());

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $almacene = Almacene::find($id)->delete();

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacene deleted successfully');
    }
}
