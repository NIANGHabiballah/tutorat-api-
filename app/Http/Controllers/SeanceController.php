<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function index() {
        return Seance::with('affectation')->get(); // Chargement des relations
    }

    // function create()
    // {
    //     //
    // }

    public function store(Request $request) {
        $seance = Seance::create($request->all());
        return response()->json($seance, 201);
    }

    public function show($id) {
        return Seance::with('affectation')->findOrFail($id);
    }

    // public function edit($id)
    // {
    //     //
    // }

    public function update(Request $request, $id) {
        $seance = Seance::findOrFail($id);
        $seance->update($request->all());
        return response()->json($seance, 200);
    }

    public function destroy($id) {
        Seance::destroy($id);
        return response()->json(null, 204);
    }
}
