<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Catalogue;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.articles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('public/article_images');
        $data['image'] = $imagePath;

        Article::create($data);

        return redirect()->route('article.index')->with('success', 'Article berhasil ditambahkan!');
    }

    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'writer' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/article_images');
            $data['image'] = $imagePath;
        }

        $article->update($data);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }

    public function detail(Article $article)
    {   
        $articles = Article::all();
        return view('enduser.article.detail', compact('article'));
    }
}