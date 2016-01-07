<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Config;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ConfigController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $config = Config::paginate(15);

        return view('admin.config.index', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Config::create($request->all());

        Session::flash('flash_message', 'Config added!');

        return redirect('admin/config');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $config = Config::findOrFail($id);

        return view('admin.config.show', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $config = Config::findOrFail($id);

        return view('admin.config.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $config = Config::findOrFail($id);
        $config->update($request->all());

        Session::flash('flash_message', 'Config updated!');

        return redirect('admin/config');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Config::destroy($id);

        Session::flash('flash_message', 'Config deleted!');

        return redirect('admin/config');
    }

}
