<?php

namespace App\Http\Controllers;

use App\Models\blogModel;
use Illuminate\Http\Request;

class externalController extends Controller
{
    public function blogGroup()
    {

        $blogs = blogModel::all();
        return response()->json($blogs);
    }

    public function blogSingle($id)
    {

        $blogs = blogModel::find($id);
        return response()->json($blogs);
    }

    public function Create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'author' => 'required',
                'title' => 'required',
                'desc' => 'required',
                'content' => 'required',
                'categories' => 'required',
            ]);
            $data = $request->all();

            $output = blogModel::create($data);
            // dd($output);
            if ($output) {

                return response()->json(['msg' => 'blog saved successfully', 'data' => $output]);
            }
        }
    }



    public function editBlog(Request $request)
    {
        if ($request->isMethod('PUT')) {
            $request->validate([
                'author' => 'required',
                'title' => 'required',
                'desc' => 'required',
                'content' => 'required',
                'categories' => 'required',
            ]);
            $edit = blogModel::where('id', $request->id)->update(['author' => $request->author, 'title' => $request->title, 'desc' => $request->desc, 'content' => $request->content, 'categories' => $request->categories]);

            if ($edit) {
                return response()->json(['msg' => 'blog updated successfully', 'data' => $edit]);
            }
        }
    }
    public function delete(Request $request, $id)
    {
       
        $deleted=blogModel::where('id', $id)->delete();
        if($deleted){
            // $blog = blogModel::paginate(4);
         
            return response()->json(['msg' => 'blog deleted successfully']);
        }
        
    }
}
