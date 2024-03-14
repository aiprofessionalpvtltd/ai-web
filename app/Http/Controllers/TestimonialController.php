<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestimonialController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $testimonials = Testimonial::latest()->get();
            return DataTables::of($testimonials)
                ->addColumn('action', function ($testimonial) {
                    $actionBtns = '<a href="' . route('testimonials.edit', $testimonial->id) . '" class="btn btn-primary m-2"><i class="fas fa-edit"></i> Edit</a>';
                    $actionBtns .= '<form action="' . route('testimonials.destroy', $testimonial->id) . '" method="POST" class="delete-form" style="display:inline-block;">';
                    $actionBtns .= '<input type="hidden" name="_method" value="DELETE">';
                    $actionBtns .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                    $actionBtns .= '<button type="submit" class="btn btn-danger m-2" onclick="return confirmDelete()"><i class="fas fa-trash-alt"></i> Delete</button>';
                    $actionBtns .= '</form>';
                    return $actionBtns;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.testimonials.index');
    }


    public function create()
    {
        return view('backend.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a unique name for the file
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Store the file in the storage disk
            $file->storeAs('public/testimonials', $fileName);

            // Update the profile photo path in the database
            $data['image'] = $fileName;
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index');
    }

    public function edit(Testimonial $testimonial)
    {
         return view('backend.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a unique name for the file
            $fileName = uniqid() . '_' . $file->getClientOriginalName();

            // Store the file in the storage disk
            $file->storeAs('public/testimonials', $fileName);

            // Update the profile photo path in the database
            $data['image'] = $fileName;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonials.index');
    }
}
