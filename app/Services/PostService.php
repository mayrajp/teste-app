<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PostService
{
    public function getAllPosts() : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get('https://jsonplaceholder.typicode.com/posts');

        return $response; 
    }
}