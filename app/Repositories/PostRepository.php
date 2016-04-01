<?php namespace App\Repositories;


use App\Post;
use App\Tag;
use Intervention\Image\Facades\Image;


class PostRepository extends BaseRepository
{
    public function __construct(Post $post)
    {
        $this->model = $post;
        $this->typeSelection = [
            'sang-mat-sang-tuong-lai' => 'Sáng mắt tương lai',
            'su-kien-nhan-hang' => 'Sự kiện nhãn hàng',
            'chia-se' => 'Chia sẻ'
        ];
    }

    /**
     * list all category which do not have child categories.
     * @return array
     */
    public function create()
    {
        $tags = Tag::all()->lists('name', 'name');
        $types = $this->typeSelection;
        return compact('tags', 'types');
    }

    public function store($request)
    {
        $post = $this->model->create([
            'type' => $request->input('type'),
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'content' => $request->input('content'),
            'image' => ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request) : '',
            'homepage_slide' => ($request->input('homepage_slide') == 'on') ? true : false,
            'homepage_intro' => ($request->input('homepage_intro') == 'on') ? true : false,
            'homepage_discovery' => ($request->input('homepage_discovery') == 'on') ? true : false,
            'hot' => ($request->input('hot') == 'on') ? true : false,
            'reason' => ($request->input('reason') == 'on') ? true : false,
            'status' => ($request->input('status') == 'on') ? true : false,
        ]);
        $this->syncTags($post, $request);
    }


    /**
     * get data for edit
     * @param $id
     * @return array
     */
    public function edit($id)
    {
        $tags = Tag::all()->lists('name', 'name');
        $post = $this->getById($id);
        $types = $this->typeSelection;
        return compact('post', 'types', 'tags');
    }

    /**
     * update post.
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        $post = $this->getById($id);
        $update = $request->all();

        $update['hot'] = (!empty($update['hot']) && $update['hot'] == 'on') ? true : false;
        $update['homepage_slide'] = (!empty($update['homepage_slide']) && $update['homepage_slide'] == 'on') ? true : false;
        $update['homepage_intro'] = (!empty($update['homepage_intro']) && $update['homepage_intro'] == 'on') ? true : false;
        $update['homepage_discovery'] = (!empty($update['homepage_discovery']) && $update['homepage_discovery'] == 'on') ? true : false;
        $update['reason'] = (!empty($update['reason']) && $update['reason'] == 'on') ? true : false;
        $update['status'] = (!empty($update['status']) && $update['status'] == 'on') ? true : false;

        if ($request->file('image') && $request->file('image')->isValid()) {
            $update['image'] = $this->saveImage($request, $post->image);
        }
        $post->update($update);
        $this->syncTags($post, $request);
    }

    /**
     * delete post.
     * @param $id
     */
    public function delete($id)
    {
        $post = $this->getById($id);
        if (file_exists(public_path(). '/files/images/' . $post->image)) {
            @unlink(public_path(). '/files/images/' . $post->image);
        }
        $post->delete();
    }

    protected function syncTags(Post $post, $request)
    {
        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $post->tags()->sync($tagIds);
    }

    /**
     * save image.
     * @param $request
     * @param null $old
     * @return string
     */
    protected function saveImage($request, $old = null)
    {
        $filename = md5(time()) . '.' . $request->file('image')->getClientOriginalExtension();
        Image::make($request->file('image')->getRealPath())->save(public_path() . '/files/images/' . $filename);

        if ($old) {
            @unlink(public_path() . '/files/images/' . $old);
        }
        return $filename;
    }

}
