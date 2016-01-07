<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Discount;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class DiscountsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $discounts = Discount::paginate(15);

        return view('admin.discounts.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Discount::create($request->all());

        Session::flash('flash_message', 'Discount added!');

        return redirect('admin/discounts');
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
        $discount = Discount::findOrFail($id);

        return view('admin.discounts.show', compact('discount'));
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
        $discount = Discount::findOrFail($id);

        return view('admin.discounts.edit', compact('discount'));
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
        
        $discount = Discount::findOrFail($id);
        $discount->update($request->all());

        Session::flash('flash_message', 'Discount updated!');

        return redirect('admin/discounts');
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
        Discount::destroy($id);

        Session::flash('flash_message', 'Discount deleted!');

        return redirect('admin/discounts');
    }

}
