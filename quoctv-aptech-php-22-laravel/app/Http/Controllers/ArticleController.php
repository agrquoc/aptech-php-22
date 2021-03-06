<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Articles = Article::paginate(10);
        return view(
            'Articles.index',
            ['Articles' => $Articles]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $article = new Article();
            $slug=$request->title;
            $article->title = $request->title;
            $article->slug = str_slug($slug,'-');
            $article->description = $request->description;
            $article->save();
            return redirect()->route('Articles.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Articles = Article::find($id);
        return view(
            'Articles.show',
            ['Articles' => $Articles]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Articles = Article::find($id);
        return view(
            'Articles.edit',
            ['Articles' => $Articles]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Articles = Article::find($id);
        $slug=$request->title;
        $Articles->title = $request->title;
        $Articles->slug = str_slug($slug,'-');
        $Articles->description = $request->description;
        $Articles->save();
        return redirect()->route('Articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Articles = Article::find($id);
        $Articles->delete();
        return redirect()->route('Articles.index');
    }
}
