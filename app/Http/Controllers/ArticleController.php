<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AticleRequest;
use App\Models\Article;
use App\Models\Categorie;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::All();
        $articles=Article::All();
        return view('Articles.index',compact('articles','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());
        return redirect()->route('Articles.index')->with('succes','article creer avec succes');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $articles)
    {
        return view('Articles.edit',compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $articles)
    {
        $articles->update($request->validated());
        return redirect()->route('Articles.index')->with('succes','mettre a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $articles)
    {
        $articles->delete();
        return redirect()->back();
    }
}
