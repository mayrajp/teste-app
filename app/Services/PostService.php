<?php

namespace App\Services;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PostService
{
    public function getAllPosts() : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('SITE_URL'). '/posts');

        return $response; 
    }

    public function showPost(int $id) : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('SITE_URL'). '/posts/' . $id);

        return $response; 
    }

    public function createPost(PostRequest $request) : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post(env('SITE_URL'). '/posts', $request->all());

        return $response; 
    }

    public function updatePost(PostRequest $request, int $id) : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->put(env('SITE_URL'). '/posts/' . $id, $request->all());

        return $response; 
    }

    public function destroyPost(int $id) : Response
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->delete(env('SITE_URL'). '/posts/' . $id);

        return $response; 
    }
}