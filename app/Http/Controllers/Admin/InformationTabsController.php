<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InformationTab;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InformationTabsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $informationtabs = InformationTab::paginate(15);

        return view('admin.informationtabs.index', compact('informationtabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.informationtabs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        InformationTab::create($request->all());

        Session::flash('flash_message', 'InformationTab added!');

        return redirect('admin/informationtabs');
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
        $informationtab = InformationTab::findOrFail($id);

        return view('admin.informationtabs.show', compact('informationtab'));
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
        $informationtab = InformationTab::findOrFail($id);

        return view('admin.informationtabs.edit', compact('informationtab'));
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
        
        $informationtab = InformationTab::findOrFail($id);
        $informationtab->update($request->all());

        Session::flash('flash_message', 'InformationTab updated!');

        return redirect('admin/informationtabs');
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
        InformationTab::destroy($id);

        Session::flash('flash_message', 'InformationTab deleted!');

        return redirect('admin/informationtabs');
    }

}
