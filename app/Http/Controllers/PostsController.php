<?php namespace App\Http\Controllers;


use App\Http\Requests;


use App\Http\Requests\PostRequest;
use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostsController extends Controller {

    public $postRepository;
    public function __construct(PostRepository $post)
    {
        $this->postRepository = $post;
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        if ($request->input('q')) {
            $searchPost = urldecode($request->input('q'));
            $posts = Post::where('title', 'LIKE', '%'.$searchPost.'%')->latest('updated_at')->paginate(10);
        } else {
            $posts = Post::latest('updated_at')->paginate(10);
            $searchPost = '';
        }
        return view('admin.post.index', compact('posts', 'searchPost'));
    }

    public function create()
    {
        return view('admin.post.create', $this->postRepository->create());
    }

    public function store(PostRequest $request)
    {
        $this->postRepository->store($request);
        flash('Create post success!', 'success');
        return redirect('admin/posts');
    }

    /**
     * display form for edit post
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        return view('admin.post.edit', $this->postRepository->edit($id));
    }


    public function update($id, PostRequest $request)
    {
        $this->postRepository->update($request, $id);
        flash('Update post success!', 'success');
        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->postRepository->delete($id);
        flash('Success deleted post!');
        return redirect('admin/posts');
    }


}
