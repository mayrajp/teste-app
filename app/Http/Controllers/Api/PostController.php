<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostService;
use Exception;

class PostController extends Controller
{
    private PostService $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    public function index()
    {
        try {

            $response = $this->postService->getAllPosts();

            return response($response->json(), $response->status());
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function show(int $id)
    {
        try {

            $response = $this->postService->showPost($id);

            return response($response->json(), $response->status());
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function store(PostRequest $request)
    {
        try {

            $response = $this->postService->createPost($request);

            return response($response->json(), $response->status());
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function update(PostRequest $request, int $id)
    {
        try {

            $response = $this->postService->updatePost($request, $id);

            return response($response->json(), $response->status());
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function destroy(int $id)
    {
        try {

            $response = $this->postService->destroyPost($id);

            return response($response->json(), $response->status());
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
