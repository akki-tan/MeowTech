<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;


class UserController extends Controller
{
    public function cek(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)
            ->where('name', $request->name)
            ->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            if (strtolower($user->name) === 'admin') {
                return redirect('/admin/artikel');
            }
            return redirect('/home');
        }
        return redirect('/login')->with('error', 'Data login salah!');
    }

    public function simpan(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'kota' => $request->kota
        ]);

        return redirect('/login');
    }
    public function storeArtikel(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:articles,slug',
            'author' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        Article::create($request->all());
        return redirect('/admin/artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function editArtikel($id)
    {
        $article = Article::findOrFail($id);
        return view('editartikel', compact('article'));
    }

    public function updateArtikel(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:articles,slug,' . $id,
            'author' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => $request->author,
            'body' => $request->body,
        ]);

        return redirect('/admin/artikel')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function deleteArtikel($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/admin/artikel')->with('success', 'Artikel berhasil dihapus!');
    }

}
