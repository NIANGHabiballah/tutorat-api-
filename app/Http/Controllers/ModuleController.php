<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index() {
        return Module::all();
    }

    // public function create()
    // {
    //     //
    // }

    public function store(Request $request) {
        $module = Module::create($request->all());
        return response()->json($module, 201);
    }

    public function show($id) {
        return Module::findOrFail($id);
    }

    // public function edit($id)
    // {
    //     //
    // }

    public function update(Request $request, $id) {
        $module = Module::findOrFail($id);
        $module->update($request->all());
        return response()->json($module, 200);
    }

    public function destroy($id) {
        Module::destroy($id);
        return response()->json(null, 204);
    }
}
