<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|max:200|email|unique:posts',
            'password' => 'required|min:10',
            'phone' => 'nullable|number|not required',
            'name' => 'required|min:5|regex:/^[a-zA-ZÑñ\s]+$/|max:100',
        ]);
        $post = new Post;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->phone = $request->phone;
        $post->name = $request->name;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'your data Has Been inserted');
    }
}