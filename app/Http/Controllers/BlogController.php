<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->where('status', 0)->latest()->get();
        $users = DB::table('users')->get();
        return view('backend.blog.index', compact('blogs','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        // image processing

        $processingImage = $request->picture;
        $extension = $processingImage->getClientOriginalExtension();
        $originName = $processingImage->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $fileName = $fileName.'_'.time().'.'.$extension;

        $path = storage_path('/img/blogs');
        if (!File::exists($path)) {
            mkdir($path);
        }
        $processingImage->move($path, $fileName);

        Blog::create([
            'title' => $request->title,
            'picture' => $fileName,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('blogs')->find($id);
        return view('backend.blog.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(isset($request->picture)){
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);

            // image processing

            $processingImage = $request->picture;
            $extension = $processingImage->getClientOriginalExtension();
            $originName = $processingImage->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = $fileName.'_'.time().'.'.$extension;

            $path = storage_path('/img/blogs');
            if (!File::exists($path)) {
                mkdir($path);
            }
            $processingImage->move($path, $fileName);

            $blog = Blog::find($id);
            $oldPath = public_path() . '/storage/img/blogs/' . $blog->picture;
            if (File::exists($oldPath)) {
                unlink($oldPath);
            }


            Blog::find($id)->update([
                'title' => $request->title,
                'picture' => $fileName,
                'description' => $request->description,
                'updated_at' => Carbon::now()
            ]);
            return back()->with('success', 'Stored Successfully');
        }else{
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);

            Blog::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'updated_at' => Carbon::now()
            ]);
            return back()->with('success', 'Stored Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect(route('blog.all'))->with('success', 'Deleted Successfuly');
    }

    public function status(Request $request, $id)
    {
        $blog = Blog::find($id);
        if ($blog->status == 0) {
            $blog->status = 1;
        } else {
            $blog->status = 0;
        }
        $blog->save();
        return back()->with('success', 'Status Updated Successfuly');
    }

    // blogs information
    public function SBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('backend.blog.SBlog', compact('blog'));
    }
    public function allBlogs()
    {
        $blogs = Blog::where('status', 0)->get();
        return view('backend.blog.index', compact('blogs'));
    }
    public function allBlogsArchive()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('backend.blog.archived_index', compact('blogs'));
    }
}
