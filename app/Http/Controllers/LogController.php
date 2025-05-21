<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return Log::all();
    }

    public function update(Request $request, int $id)
    {
        $reqLog = Log::findOrFail($id);
        $reqLog->update($request->only(['method', 'response', 'created_at']));
        return response()->json($reqLog);
    }

    public function delete(int $id)
    {
        $reqLog = Log::findOrFail($id);
        $reqLog->delete();
        return response()->json(['message' => 'Log successfully deleted']);
    }
}
