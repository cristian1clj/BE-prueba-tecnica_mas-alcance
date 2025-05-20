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
        return response()->json($this->api->getAll('albums', [
            'userId' => $userId
        ]));
    }
}
