<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogsRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function list()
    {
        $blogsAr = Blog::query()
            ->select('id', 'title_ar', 'description_ar', 'image', 'published_at', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $blogsEn = Blog::query()
            ->select('id', 'title_en', 'description_en', 'image', 'published_at', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $blogsRu = Blog::query()
            ->select('id', 'title_ru', 'description_ru', 'image', 'published_at', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);


        return view('backend.pages.blogs.list',
            compact([
                'blogsAr',
                'blogsEn',
                'blogsRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.blogs.create');
    }


    public function store(StoreBlogRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $validated['image'] = $imageName;
        }

        Blog::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();

    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('backend.pages.blogs.edit', compact('blog'));
    }

    public function update(UpdateBlogsRequest $request, $id)
    {
        $blog =Blog::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $validated['image'] = $imageName;
        }

        $blog->update($validated);

        toastr()->success('Məlumat yeniləndi');

        return redirect()->route('admin.blog.list');
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $image = $blog->image;

        if (file_exists($image)) {
            unlink($image);
        }
        $blog->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }
}
