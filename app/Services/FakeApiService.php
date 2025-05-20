<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FakeApiService
{
    protected $baseUrl = 'https://jsonplaceholder.typicode.com';

    public function getAll(string $endpoint, array $params = [])
    {
        $url = "{$this->baseUrl}/{$endpoint}";
        $response = Http::get($url, $params);
        return $response->json();
    }
}