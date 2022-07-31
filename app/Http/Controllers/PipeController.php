<?php

namespace App\Http\Controllers;

use App\Models\Pipes;
use Illuminate\Http\Request;

class PipeController extends Controller
{
    public function index()
    {
        $pipes = Pipes::all();

        return view('pipe_lists', compact('pipes'));
    }

    public function create()
    {
        return view('add_pipes');
    }

    public function store(Request $request)
    {
        $pipe = Pipes::create([
            'type' => $request->get('type'),
            'location' => $request->get('location'),
            'full_address' => $request->get('full_address'),
            'diameter' => $request->get('diameter'),
            'overseeing_authority' => $request->get('overseeing_authority'),
            'drainage_importance_level' => $request->get('drainage_importance_level')
        ]);

        return redirect(route('pipe.index'));
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
        //
    }
}
