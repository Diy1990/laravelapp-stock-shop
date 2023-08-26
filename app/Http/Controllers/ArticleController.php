<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        // Return view for listing articles
        return view('components.list', ['articles' => $articles]);
    }

    public function create()
    {
        // Return view for creating articles
        return view('components.create');
    }


public function store(Request $request)
{
    $article = Article::create($request->all());
    return redirect('articles');
}



public function edit(string $id)
{
    $article = Article::findOrFail($id);
    return view('components.update',['data' => $article]);
}


public function update(Request $request, string $id)
{
    $article = Article::findOrFail($id);
    $article->update($request->all());
    return redirect('articles');

}

public function destroy(string $id)
{
// option to delete a item (less used)
Article::destroy($id);
return redirect('articles');

// To update status most recommended option 

//$article = Article::findOrFail($id);
//$article->status = 'inactive';
//$article->save();
//return redirect('articles');


}

}