<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('add-content-blocks', compact('page'));
    }

    public function addContentBlock(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        // Add content block using the method defined in the HasContentBlocks trait
        $page->addContentBlock($request->type, $request->content);

        return redirect()->back()->with('success', 'Content block added successfully!');
    }

}
