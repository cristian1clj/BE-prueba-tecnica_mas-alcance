<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $response = Log::all();

        // Log::create([
        //     'method' => 'GET',
        //     'response' => $response,
        // ]);

        return $response;
    }

    public function update(Request $request, int $id)
    {
        $reqLog = Log::findOrFail($id);
        $reqLog->update($request->only(['method', 'response', 'created_at']));

        Log::create([
            'method' => 'PUT',
            'response' => $reqLog,
        ]);

        return response()->json($reqLog);
    }

    public function delete(int $id)
    {
        $reqLog = Log::findOrFail($id);
        $reqLog->delete();

        Log::create([
            'method' => 'DELETE',
            'response' => $reqLog,
        ]);

        return response()->json(['message' => 'Log successfully deleted']);
    }
}
