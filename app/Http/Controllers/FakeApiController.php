<?php

namespace App\Http\Controllers;

use App\Services\FakeApiService;
use Illuminate\Http\Request;

class FakeApiController extends Controller
{
    protected $api;

    public function __construct(FakeApiService $api)
    {
        $this->api = $api;
    }

    public function getUsers()
    {
        return response()->json($this->api->getAll('users'));
    }
    
    public function getPosts()
    {
        return response()->json($this->api->getAll('posts'));
    }
    
    public function getAlbums(Request $request)
    {
        $userId = $request->query('userId');
        $response = $this->api->getAll('albums', [
            'userId' => $userId
        ]);

        if (count($response) === 0) {
            return response()->json([
                'error' => "No albums were found for user id: $userId"
            ], 404);
        }

        return response()->json($response);
    }
}
