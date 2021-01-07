<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $articles = Article::orderBy('id','desc')->paginate(8);
        return view('artikel.artikel' , ['artikel'=> $articles]);
    }

    public function show($slug)
    {
        $article = Article::where('slug',$slug)->first();

        if($article==null)
            abort(404);
        return view('artikel.subartikel', compact('article'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        // dd($request -> thumbnail);
        $request->validate([
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1023',
            'nama_barang' => 'required|max:14|min:3',
            'harga' => 'required|min:3|numeric',
            'stok' => 'required|max:255|min:3|numeric   ',
            'keterangan' => 'required|max:255|min:3',
        ]);
        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
         $request->gambar->move(public_path('image'),$imgName);

         Article::create([
            'nama_barang'=> $request->nama_barang,
            'slug'=>Str::slug($request->nama_barang, '-'),
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'keterangan'=> $request->keterangan,
            'gambar' => $imgName
         ]);


        // $article  = new Article;
        // $article -> tittle = $request -> tittle;
        // $article -> subject = $request -> subject;
        // $article -> save();

        return redirect('/artikel');

    }
    public function edit($id)
    {
        $artikel = Article::find($id);

        return view('artikel.edit', ['artikel'=> $artikel]);
    }

    public function update(Request $request, $id)
    {
        // $artikel = Article::find($id);
        // $artikel -> tittle = $request -> tittle;
        // $artikel -> subject = $request -> subject;
        // $artikel -> save();

        Article::find($id)->update([
            'nama_barang'=> $request->nama_barang,
            'slug'=>Str::slug($request->nama_barang, '-'),
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'keterangan'=> $request->keterangan,
            // 'gambar' => $request->gambar


        ]);
        return redirect('/artikel');
    }

    public function destroy($id)
    {

        Article::find($id)->delete();
        return redirect('/artikel');


    }
}
