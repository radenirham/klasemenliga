<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Rules\UniqueClubName;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club = Club::all();
        return view('club.index',compact('club'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('club.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', new UniqueClubName],
            'kota' => 'required',
        ]);

        Club::create([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);
        return redirect()->route('club.index')->with('success','SUCCESS: Data has been added.');
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
        $club=club::find($id);
        return view('club.edit',compact('club'));
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
        $request->validate([
            'nama' => ['required', new UniqueClubName],
            'kota' => 'required',
        ]);
        
        Club::where('id',$id)->update([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);
        return redirect()->route('club.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = club::where('id',$id)->first();
        $club->delete();
        return back();
    }
}
