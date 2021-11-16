<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }
    public function store(){
        Post::create(array_merge($this->valdidatePost(),[
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));
        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit',['post' => $post]);
    }

    public function update(Post $post){
        $attributes = $this->valdidatePost($post);
        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($attributes);

        return back()->with('success',"Post Updated");
    }
    public function destory(Post $post){
        $post->delete();
        return back()->with('success','Deleted');
    }
    protected function valdidatePost(?Post $post = null):array{
        $post ??= new Post();
        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required','image'],
            'slug' => ['required',Rule::unique('posts','slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required',Rule::exists('categories','id')],
            'published_at' => 'required'
        ]);
    }

}
