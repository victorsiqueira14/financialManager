<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbstractController extends Controller
{
    public function index(Request $request)
    {
        $request = $this->service->getAll();
        return response()->json($request);
    }

    public function show($id)
    {
        $response = $this->service->find($id);
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $this->service->create($request->all());
        return response()->json($request);
    }

    public function update($id, Request $request)
    {
        $request = $this->service->update($id, $request->all());
        return response()->json(['mensage' => 'successfully changed']);
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['mensage' => 'successfully deleted']);
    }
}
