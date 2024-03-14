<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function index()
    {
        $setting = Setting::first();
        return view('backend.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'slogan' => 'nullable|string',
                'email' => 'nullable|email',
                'phone' => 'nullable|string',
                'hot_line' => 'nullable|string',
                'address' => 'nullable|string',
                'website' => 'nullable|string',
                'info_email' => 'nullable|email',
                'query_email' => 'nullable|email',
                'facebook' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'youtube' => 'nullable|url',
                'twitter' => 'nullable|url',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming logo is an image file
                'google_map' => 'nullable|string',
            ]);

            $setting = Setting::first();

//            dd($request->all());
            $data = $request->all();
            // Check if the request contains a file for the logo field
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');

                // Generate a unique name for the file
                $fileName = uniqid() . '_' . $file->getClientOriginalName();

                // Store the file in the storage disk
                $file->storeAs('public/logos', $fileName);

                // Update the profile photo path in the database
                $data['logo'] = $fileName;
            }

            $setting->update($data);

            return redirect()->route('settings.index')
                ->with('success', 'Setting updated successfully');
        } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->back()
                ->with('error', 'An error occurred while updating the setting. Please try again.');
        }
    }


}
