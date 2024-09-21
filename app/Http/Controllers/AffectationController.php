<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    public function index() {
        return Affectation::with(['tuteur', 'module'])->get(); // Chargement des relations
    }

    // public function create()
    // {
    //     //
    // }

    public function store(Request $request) {
        $affectation = Affectation::create($request->all());
        return response()->json($affectation, 201);
    }

    public function show($id) {
        return Affectation::with(['tuteur', 'module'])->findOrFail($id);
    }

    // public function edit($id)
    // {
    //     //
    // }

    public function update(Request $request, $id) {
        $affectation = Affectation::findOrFail($id);
        $affectation->update($request->all());
        return response()->json($affectation, 200);
    }

    public function destroy($id) {
        Affectation::destroy($id);
        return response()->json(null, 204);
    }
}
