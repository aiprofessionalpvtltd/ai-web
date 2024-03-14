<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $blogs = Blog::select('*');
            return DataTables::of($blogs)
                ->addColumn('action', function ($blog) {
                    $actionBtns = '<a href="' . route('blogs.edit', $blog->id) . '" class="btn btn-primary m-2"><i class="fas fa-edit"></i> Edit</a>';
                    $actionBtns .= '<form action="' . route('blogs.destroy', $blog->id) . '" method="POST" class="delete-form" style="display:inline-block;">';
                    $actionBtns .= '<input type="hidden" name="_method" value="DELETE">';
                    $actionBtns .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                    $actionBtns .= '<button type="submit" class="btn btn-danger m-2" onclick="return confirmDelete()"><i class="fas fa-trash-alt"></i> Delete</button>';
                    $actionBtns .= '</form>';
                    return $actionBtns;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.blogs.index');
    }

    public function create()
    {
        return view('backend.blogs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'author' => 'required',
            'tags' => 'required',
            'short_content' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a unique name for the file
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Store the file in the storage disk
            $file->storeAs('public/blogs', $fileName);

            // Update the profile photo path in the database
            $data['image'] = $fileName;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog post created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('backend.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required|date',
            'author' => 'required',
            'tags' => 'required',
            'short_content' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a unique name for the file
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Store the file in the storage disk
            $file->storeAs('public/blogs', $fileName);

            // Update the profile photo path in the database
            $data['image'] = $fileName;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
