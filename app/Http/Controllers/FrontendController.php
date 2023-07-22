<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Page;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'topic' => 'required',
            'description' => 'required'
        ]);

        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'topic' => $request->topic,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'topic' => 'required',
            'description' => 'required'
        ]);

        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'topic' => $request->topic,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Stored Successfully');
    }

    public function home()
    {
        $mainmenus = DB::table('main_menus')->select('id', 'name')->get();
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->latest()->limit(3)->get();
        return view('frontend.home', compact('mainmenus', 'blogs'));
    }


    public function aboutUS()
    {
        return view('frontend.about.aboutUS');
    }

    public function companyProfile()
    {
        return response()->download(public_path('frontend/assets/icit-profile.pdf'));
    }

    public function mv()
    {
        return view('frontend.about.mv');
    }

    public function whyUs()
    {
        return view('frontend.about.whyUs');
    }

    public function leadership()
    {
        return view('frontend.about.leadership');
    }

    public function careers()
    {
        $careers = Career::select('id', 'topic', 'created_at')->where('status', 0)->latest()->get();
        return view('frontend.about.careers', compact('careers'));
    }

    public function careerDetails($topic)
    {
        $careers = Career::select('id', 'topic')->where('status', 0)->get();
        $data = Career::where('topic', $topic)->first();
        return view('frontend.about.careerDetails', compact('careers', 'data'));
    }

    public function faq()
    {
        return view('frontend.about.faq');
    }

    public function blog()
    {
        $blogs = DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('frontend.about.blog', compact('blogs'));
    }

    public function singleBlog($id)
    {
        $blog = DB::table('blogs')->find($id);
        return view('frontend.singBlog', compact('blog'));
    }

    public function contact()
    {
        $mainmenus = DB::table('main_menus')->select('id', 'name')->get();
        return view('frontend.about.contacta', compact('mainmenus'));
    }

    public function iSchoolMS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iSchoolMS', compact('data'));
    }

    public function iInventoryMS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iInventoryMS', compact('data'));
    }

    public function iTaskS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iTaskS', compact('data'));
    }

    public function iHRMSolution()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iHRMSolution', compact('data'));
    }

    public function iHospitalMS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iHospitalMS', compact('data'));
    }

    public function iHotelMS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        // dd($data);
        return view('frontend.software.iHotelMS', compact('data'));
    }

    public function iEcomS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.software.iEcomS', compact('data'));
    }



    public function ideaEcom()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.website.ideaEcom', compact('data'));
    }

    public function ideaCorporate()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.website.ideaCorporate', compact('data'));
    }

    public function WordpressSC()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.website.WordpressSC', compact('data'));
    }

    public function UIUX()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.website.UIUX_WebDD', compact('data'));
    }

    public function Support()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.website.247Support', compact('data'));
    }

    public function BrandingDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.BrandingDesign', compact('data'));
    }

    public function SocailMediaDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.SocailMediaDesign', compact('data'));
    }

    public function CompanyProfileDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.CompanyProfileDesign', compact('data'));
    }

    public function LogoDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.LogoDesign', compact('data'));
    }

    public function BannerDesgin()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.BannerDesgin', compact('data'));
    }

    public function BrochureDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.BrochureDesign', compact('data'));
    }

    public function BookCoverDesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.BookCoverDesign', compact('data'));
    }

    public function Backgroundremove()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.Backgroundremove', compact('data'));
    }

    public function UIUXGraphics()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.graphics.UIUXGraphics', compact('data'));
    }

    public function AWS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.cloud.AWS', compact('data'));
    }

    public function Azure()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.cloud.Azure', compact('data'));
    }

    public function VPS()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.cloud.VPS', compact('data'));
    }

    public function DomainHosting()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.cloud.DomainHosting', compact('data'));
    }

    public function SEO()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.digitalM.SEO', compact('data'));
    }

    public function SMM()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.digitalM.SMM', compact('data'));
    }

    public function EmailMarketing()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.digitalM.EmailMarketing', compact('data'));
    }

    public function BrandMarketing()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.digitalM.BrandMarketing', compact('data'));
    }

    public function ContentWritting()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.digitalM.ContentWritting', compact('data'));
    }

    public function websitedev()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

    public function softwaredev()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

    public function ecommercedeve()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

    public function graphicsdesign()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

    public function digitalmarketing()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

    public function domainhost()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }
    public function cloudtech()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }
    public function wordpressdev()
    {
        $name = Route::currentRouteName();
        $data = Page::where('route_id', $name)->first();
        return view('frontend.services', compact('data'));
    }

}
