<?php

namespace App\Services;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class FakeApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('FAKE_API_URL');
    }

    public function getAll(string $endpoint, array $params = [])
    {
        $url = "{$this->baseUrl}/{$endpoint}";
        $response = Http::get($url, $params);

        Log::create([
            'method' => 'GET',
            'response' => $response->body(),
        ]);

        return $response->json();
    }
}