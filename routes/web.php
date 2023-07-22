<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE FOR CLEAR CACHE
Route::GET('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return '<a href="javascript:history.back()" class="btn btn-warning">BACK TO HOME</a>';
});

// Route::GET('/', function () {
//     return redirect('/ideacastit');
// });

// Route::GET('/Home', function () {
//     return redirect('/ideacastit');
// });

// Route::GET('/home', function () {
//     return redirect('/ideacastit');
// });

// Route::GET('/login', function () {
//     return redirect('/ideacastit');
// });

// Route::GET('/Careers/home', function () {
//     return redirect('/ideacastit');
// });


Route::GET('/ideacastit',[FrontendController::class,'home'])->name('home');
Route::GET('/',[FrontendController::class,'home'])->name('home');
Route::GET('/icitadmin',[AuthController::class,'login'])->name('login');
Route::POST('/log',[AuthController::class,'log'])->name('log');
Route::GET('/logout',[AuthController::class,'AdminLogout'])->name('logout');

// Leed routes
Route::resource('/leed', LeedController::class);

Route::group(['middleware' => ['isLoggedAsAdmin']], function () {
    Route::GET('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::GET('mainmenus', function () {
        return view('livewire.backend.menu.default');
    })->name('mainmenus');

    Route::GET('submenus', function () {
        return view('livewire.backend.submenu.default');
    })->name('submenus');
    Route::GET('routes', function () {
        return view('livewire.backend.pageConnection.default');
    })->name('routes');

    // Career routes
    Route::PUT('/career_status/{id}', [CareerController::class, 'status'])->name('career.status');
    Route::GET('single-career/{id}', [CareerController::class, 'SBCareer'])->name('SBCareer');
    Route::GET('/career_all', [CareerController::class, 'allcareer'])->name('career.all');
    Route::GET('/archived_career', [CareerController::class, 'allcareerArchive'])->name('career.allArchive');
    Route::GET('/archived/leed', [CareerController::class, 'allLeedArchive'])->name('career.allLeedArchive');
    Route::resource('/career', CareerController::class);


    // Blog routes
    Route::PUT('/blog_status/{id}', [BlogController::class, 'status'])->name('blog.status');
    Route::GET('/single-blog/{id}', [BlogController::class, 'SBlog'])->name('SBlog');
    Route::GET('/blog_all', [BlogController::class, 'allBlogs'])->name('blog.all');
    Route::GET('/archived_blog', [BlogController::class, 'allBlogsArchive'])->name('blog.allArchive');
    Route::resource('/blog', BlogController::class);

    // Page routes
    Route::PUT('/page_status/{id}', [PageController::class, 'status'])->name('page.status');
    Route::GET('/single-page/{id}', [PageController::class, 'SPage'])->name('SPage');
    Route::GET('/page_all', [PageController::class, 'allPages'])->name('page.all');
    Route::GET('/archived_page', [PageController::class, 'allPagesArchive'])->name('page.allArchive');
    Route::resource('/page', PageController::class);
});

// Software Routes
Route::GET('idea-task-scheduler-its',[FrontendController::class,'iTaskS'])->name('iTaskS');
Route::GET('idea-e-commerce-solution-ies',[FrontendController::class,'iEcomS'])->name('iEcomS');
Route::GET('idea-hrm-solution-ihrms',[FrontendController::class,'iHRMSolution'])->name('iHRMSolution');
Route::GET('idea-hotel-management-system-ihms',[FrontendController::class,'iHotelMS'])->name('iHotelMS');
Route::GET('idea-school-management-system-isms',[FrontendController::class,'iSchoolMS'])->name('iSchoolMS');
Route::GET('idea-hospital-management-system-ihms',[FrontendController::class,'iHospitalMS'])->name('iHospitalMS');
Route::GET('idea-inventory-management-system-iims',[FrontendController::class,'iInventoryMS'])->name('iInventoryMS');

// Services Section Routes
Route::GET('website-design-&-development',[FrontendController::class,'websitedev'])->name('websitedev');
Route::GET('software-development',[FrontendController::class,'softwaredev'])->name('softwaredev');
Route::GET('e-commerce-design-&-development',[FrontendController::class,'ecommercedeve'])->name('ecommercedeve');
Route::GET('graphics-design-services',[FrontendController::class,'graphicsdesign'])->name('graphicsdesign');
Route::GET('digital-marketing-services',[FrontendController::class,'digitalmarketing'])->name('digitalmarketing');
Route::GET('domain-&-hosting-services',[FrontendController::class,'domainhost'])->name('domainhost');
Route::GET('cloud-technology-services',[FrontendController::class,'cloudtech'])->name('cloudtech');
Route::GET('wordpress-website-development',[FrontendController::class,'wordpressdev'])->name('wordpressdev');

// // Website Section Routes
// Route::GET('ideaE-com',[FrontendController::class,'ideaEcom'])->name('ideaE-com');
// Route::GET('ideaCorporate',[FrontendController::class,'ideaCorporate'])->name('ideaCorporate');
// Route::GET('WordpressSC',[FrontendController::class,'WordpressSC'])->name('WordpressSC');
// Route::GET('UI/UX-WebDD',[FrontendController::class,'UIUX'])->name('UI/UX-WebDD');
// Route::GET('24/7-Support',[FrontendController::class,'Support'])->name('24/7-Support');

// // Graphics Section Routes
// Route::GET('BrandingDesign',[FrontendController::class,'BrandingDesign'])->name('BrandingDesign');
// Route::GET('SocailMediaDesign',[FrontendController::class,'SocailMediaDesign'])->name('SocailMediaDesign');
// Route::GET('CompanyProfileDesign',[FrontendController::class,'CompanyProfileDesign'])->name('CompanyProfileDesign');
// Route::GET('LogoDesign',[FrontendController::class,'LogoDesign'])->name('LogoDesign');
// Route::GET('BannerDesgin',[FrontendController::class,'BannerDesgin'])->name('BannerDesgin');
// Route::GET('BrochureDesign',[FrontendController::class,'BrochureDesign'])->name('BrochureDesign');
// Route::GET('BookCoverDesign',[FrontendController::class,'BookCoverDesign'])->name('BookCoverDesign');
// Route::GET('Backgroundremove',[FrontendController::class,'Backgroundremove'])->name('Backgroundremove');
// Route::GET('UIUXGraphics',[FrontendController::class,'UIUXGraphics'])->name('UIUXGraphics');

// // Cloud Services Routes
// Route::GET('AWS',[FrontendController::class,'AWS'])->name('AWS');
// Route::GET('Azure',[FrontendController::class,'Azure'])->name('Azure');
// Route::GET('VPS',[FrontendController::class,'VPS'])->name('VPS');
// Route::GET('DomainHosting',[FrontendController::class,'DomainHosting'])->name('DomainHosting');

// // Digital Marketing Section Routes
// Route::GET('SEO',[FrontendController::class,'SEO'])->name('SEO');
// Route::GET('SMM',[FrontendController::class,'SMM'])->name('SMM');
// Route::GET('EmailMarketing',[FrontendController::class,'EmailMarketing'])->name('EmailMarketing');
// Route::GET('BrandMarketing',[FrontendController::class,'BrandMarketing'])->name('BrandMarketing');
// Route::GET('ContentWritting',[FrontendController::class,'ContentWritting'])->name('ContentWritting');

// About section routes
Route::GET('Contact',[FrontendController::class,'contact'])->name('contact');
Route::GET('Single-Blogs/{id}',[FrontendController::class,'singleBlog'])->name('singleBlog');
Route::GET('Blogs',[FrontendController::class,'blog'])->name('blog');
Route::GET('FAQs',[FrontendController::class,'faq'])->name('faq');
Route::GET('careers',[FrontendController::class,'careers'])->name('careers');
Route::GET('Careers/{topic}',[FrontendController::class,'careerDetails'])->name('careerDetails');
// Route::GET('Leadership',[FrontendController::class,'leadership'])->name('leadership');
Route::GET('Why-Choose-Us',[FrontendController::class,'whyUs'])->name('whyUs');
Route::GET('Mission-&-Vision',[FrontendController::class,'mv'])->name('mv');
Route::GET('frontend/Company-Profile',[FrontendController::class,'companyProfile'])->name('companyProfile');
Route::GET('About-ideaCast-IT',[FrontendController::class,'aboutUS'])->name('aboutUS');

// FrontEnd CRUD'S Routes
Route::GET('contactData',[BackendController::class,'contactData'])->name('contactData');
Route::POST('contactStore',[FrontendController::class,'contactStore'])->name('contactStore');
Route::resource('/frontend',FrontendController::class);
