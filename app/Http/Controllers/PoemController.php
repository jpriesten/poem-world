<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return response(Poem::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $request->validate(['title' => 'required|string|unique:poems',
            'slug' => 'required|string|unique:poems',
            'description' => 'required|string']);
        $poem = Poem::create($request->all());
        return response(['message' => 'Poem created successfully', 'poem' => $poem], ResponseAlias::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id): Response
    {
        $poem = Poem::find($id);
        $comments = $poem->comments;
        return response(['poem' => $poem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id): Response
    {
        $poem = Poem::find($id);
        $poem->update($request->all());
        return \response(['message' => 'Record updated', 'poem' => $poem]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        return \response(Poem::destroy($id));
    }

    /**
     * Search a specified resource from storage.
     * by title, slug or phrase in poem body
     *
     * @param Request $request
     * @return Response
     */
    public function search(Request $request): Response
    {
        $searchTerm = $request->input('searchTerm');

        if (isset($searchTerm)) {
            $found = Poem::where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('slug', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%')
                ->get();
            return response($found);
        }

        return response(['message' => 'Missing search term'], ResponseAlias::HTTP_NOT_FOUND);
    }
}
