<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = $request['article_id'];
        $comment = ArticleComment::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'text' => $request['text'],
            'article_id' => $article
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleComment $articleComment)
    {
        //
    }
}
