<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\DifferentClub;
use App\Models\Klasemen;
use App\Models\Club;
use Illuminate\Support\Facades\Validator;



class KlasemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Klasemen = Klasemen::all();
        return view('klasemen.index',compact('Klasemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Club = CLub::all();
        return view('klasemen.add', compact('Club'));
    }

    public function create2()
    {
        $Club = CLub::all();
        return view('klasemen.add2', compact('Club'));
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
            'score' => 'required',
            'score2' => 'required',
            'club' => ['required', new DifferentClub($request->club2)],
            'club2' => ['required', new DifferentClub($request->club)],
        ]);

     // Club pertama
$Klasemen = Klasemen::where('id_club', $request->club)->first();
if ($Klasemen) {
    $Klasemen->main += 1; 
    $Klasemen->menang += ($request->score > $request->score2) ? 1 : 0;
    $Klasemen->kalah += ($request->score < $request->score2) ? 1 : 0;
    $Klasemen->seri += ($request->score == $request->score2) ? 1 : 0;
    $Klasemen->gm += $request->score;
    $Klasemen->gk += $request->score2;
    $Klasemen->point += ($request->score > $request->score2) ? 3 : (($request->score == $request->score2) ? 1 : 0);
    $Klasemen->save();  
} else {
    $Klasemen = new Klasemen();
    $Klasemen->id_club = $request->club;
    $Klasemen->main = '1';
    $Klasemen->menang = ($request->score > $request->score2) ? '1' : '0';
    $Klasemen->kalah = ($request->score < $request->score2) ? '1' : '0';
    $Klasemen->seri = ($request->score == $request->score2) ? '1' : '0';
    $Klasemen->gm = $request->score;
    $Klasemen->gk = $request->score2;
    $Klasemen->point = ($request->score > $request->score2) ? '3' : (($request->score == $request->score2) ? '1' : '0');
    $Klasemen->save();  
}

// Club kedua
$Klasemen = Klasemen::where('id_club', $request->club2)->first();
if ($Klasemen) {
    $Klasemen->main += 1; 
    $Klasemen->menang += ($request->score < $request->score2) ? 1 : 0;
    $Klasemen->kalah += ($request->score > $request->score2) ? 1 : 0;
    $Klasemen->seri += ($request->score == $request->score2) ? 1 : 0;
    $Klasemen->gm += $request->score2;
    $Klasemen->gk += $request->score;
    $Klasemen->point += ($request->score < $request->score2) ? 3 : (($request->score == $request->score2) ? 1 : 0);
    $Klasemen->save();  
} else {
    $Klasemen = new Klasemen();
    $Klasemen->id_club = $request->club2;
    $Klasemen->main = '1';
    $Klasemen->menang = ($request->score < $request->score2) ? '1' : '0';
    $Klasemen->kalah = ($request->score > $request->score2) ? '1' : '0';
    $Klasemen->seri = ($request->score == $request->score2) ? '1' : '0';
    $Klasemen->gm = $request->score2;
    $Klasemen->gk = $request->score;
    $Klasemen->point = ($request->score < $request->score2) ? '3' : (($request->score == $request->score2) ? '1' : '0');
    $Klasemen->save();  
}
        
        return redirect()->route('klasemen.index');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'score' => 'required',
            'score2' => 'required',
            'club' => ['required', new DifferentClub($request->club2)],
            'club2' => ['required', new DifferentClub($request->club)],
        ]);

        $data = $request->all();

if (count($data['club']) > 0) {
    foreach ($data['club'] as $index => $club) {
        $Klasemen = Klasemen::where('id_club', $club)->first();

        if ($Klasemen) {
            $Klasemen->main += 1; 
            $Klasemen->menang += ($data['score'][$index] > $data['score2'][$index]) ? 1 : 0;
            $Klasemen->kalah += ($data['score'][$index] < $data['score2'][$index]) ? 1 : 0;
            $Klasemen->seri += ($data['score'][$index] == $data['score2'][$index]) ? 1 : 0;
            $Klasemen->gm += $data['score'][$index];
            $Klasemen->gk += $data['score2'][$index];

            $point = ($data['score'][$index] > $data['score2'][$index]) ? 3 : (($data['score'][$index] < $data['score2'][$index]) ? 0 : 1);
            $Klasemen->point += $point;

            $Klasemen->save();  
        } else {
            $Klasemen = new Klasemen();
            $Klasemen->id_club = $club;
            $Klasemen->main = 1;
            $Klasemen->menang = ($data['score'][$index] > $data['score2'][$index]) ? 1 : 0;
            $Klasemen->kalah = ($data['score'][$index] < $data['score2'][$index]) ? 1 : 0;
            $Klasemen->seri = ($data['score'][$index] == $data['score2'][$index]) ? 1 : 0;
            $Klasemen->gm = $data['score'][$index];
            $Klasemen->gk = $data['score2'][$index];

            $point = ($data['score'][$index] > $data['score2'][$index]) ? 3 : (($data['score'][$index] < $data['score2'][$index]) ? 0 : 1);
            $Klasemen->point = $point;

            $Klasemen->save();  
        }
    }
}

if (count($data['club2']) > 0) {
    foreach ($data['club2'] as $index => $club) {
        $Klasemen = Klasemen::where('id_club', $club)->first();

        if ($Klasemen) {
            $Klasemen->main += 1; 
            $Klasemen->menang += ($data['score'][$index] < $data['score2'][$index]) ? 1 : 0;
            $Klasemen->kalah += ($data['score'][$index] > $data['score2'][$index]) ? 1 : 0;
            $Klasemen->seri += ($data['score'][$index] == $data['score2'][$index]) ? 1 : 0;
            $Klasemen->gm += $data['score'][$index];
            $Klasemen->gk += $data['score2'][$index];

            $point = ($data['score'][$index] < $data['score2'][$index]) ? 3 : (($data['score'][$index] > $data['score2'][$index]) ? 0 : 1);
            $Klasemen->point += $point;

            $Klasemen->save();  
        } else {
            $Klasemen = new Klasemen();
            $Klasemen->id_club = $club;
            $Klasemen->main = 1;
            $Klasemen->menang = ($data['score'][$index] < $data['score2'][$index]) ? 1 : 0;
            $Klasemen->kalah = ($data['score'][$index] > $data['score2'][$index]) ? 1 : 0;
            $Klasemen->seri = ($data['score'][$index] == $data['score2'][$index]) ? 1 : 0;
            $Klasemen->gm = $data['score'][$index];
            $Klasemen->gk = $data['score2'][$index];

            $point = ($data['score'][$index] < $data['score2'][$index]) ? 3 : (($data['score'][$index] > $data['score2'][$index]) ? 0 : 1);
            $Klasemen->point = $point;

            $Klasemen->save();  
        }
    }
}
        return redirect()->route('klasemen.index');
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
