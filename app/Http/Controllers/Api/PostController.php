<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class PostController extends Controller
{
    private PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }
    
    public function index()
    {
        $response = $this->postService->getAllPosts();

        return response($response->json(), $response->status()); 
    }
}
