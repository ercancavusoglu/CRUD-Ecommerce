<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Information;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InformationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $information = Information::paginate(15);

        return view('admin.information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Information::create($request->all());

        Session::flash('flash_message', 'Information added!');

        return redirect('admin/information');
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
        $information = Information::findOrFail($id);

        return view('admin.information.show', compact('information'));
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
        $information = Information::findOrFail($id);

        return view('admin.information.edit', compact('information'));
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
        
        $information = Information::findOrFail($id);
        $information->update($request->all());

        Session::flash('flash_message', 'Information updated!');

        return redirect('admin/information');
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
        Information::destroy($id);

        Session::flash('flash_message', 'Information deleted!');

        return redirect('admin/information');
    }

}
