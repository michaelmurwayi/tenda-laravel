<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tender;
use Illuminate\Support\Facades\Auth;



class TenderController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $tender = Tender::all();
        Log::info("we are here");
        return view('dashboard', compact('tenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'submission_date' => 'required',
            'description' => 'required',
            
        ]);
        $show = Tender::create(['name'=> request('name'),'submission_date'=> request('submission_date'), 'description'=> request('description'),  'user_id' => Auth::id()]);

        return redirect('dashboard')->with('success', 'Tender is successfully saved');
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
        $tender = Tender::findOrFail($id);

        return view('edit', compact('game'));
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'submission_date' => 'required',
            'description' => 'required',
            
        ]);
        Tender::whereId($id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Game Data is successfully updated');
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
        $tender = Tender::findOrFail($id);

        return view('/dashboard', compact('game'));
    }
}
