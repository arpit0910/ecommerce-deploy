<?php

namespace App\Http\Controllers;

use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CMSController extends Controller
{
    public function index()
    {
        $cmss = CMS::all();
        return view('cms.index', compact('cmss'));
    }


    public function create()
    {
        return view('cms.create');
    }


    public function store(Request $request)
    {
        $cms = new CMS();
        $cms->key = $request->title;
        $cms->slug = Str::slug($request->title);
        $cms->value = $request->description;
        if ($cms->save()) {
            return redirect()->route('cms.index')->with('message', "CMS created successfully");
        } else {
            return redirect()->route('cms.index')->with('error', "An error occurred. Please try again");
        }
    }

    public function edit($slug)
    {
        $cms = CMS::where('slug', $slug)->first();
        if ($cms) {
            return view('cms.edit', compact('cms'));
        } else {
            return redirect()->route('cms.index')->with('error', "An error occurred. Please try again");
        }
    }

    public function update(Request $request, $slug)
    {
        $cms = CMS::where('slug', $slug)->first();
        if ($cms) {
            $cms->key = $request->title;
            $cms->value = $request->description;
            if ($cms->update()) {
                return redirect()->route('cms.index')->with('message', "Details updated successfully");
            } else {
                return redirect()->route('cms.index')->with('error', "An error occurred. Please try again");
            }
        }
    }
    public function show($slug)
    {
        $cms = CMS::where('slug', $slug)->first();
        if ($cms) {
            return view('cms.view', compact('cms'));
        } else {
            return redirect()->route('cms.index')->with('error', "An error occurred. Please try again");
        }
    }
}
