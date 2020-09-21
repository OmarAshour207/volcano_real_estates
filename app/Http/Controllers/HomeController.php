<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contactus;
use App\Models\Project;
use App\Models\Property;
use App\Models\Service;
use App\Models\Slider;
use App\Models\State;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Visitor;
use App\Models\WebsiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        session()->has('lang') ? session()->forget('lang') : '';
        $language == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return redirect()->back();
    }

    public function HomePage()
    {
        $this->checkVisitor();

        session('lang') ?? session()->put('lang', app()->getLocale());
        $websiteSettings = WebsiteSetting::first();
        $page_filter = $websiteSettings->page_filter != null ? unserialize($websiteSettings->page_filter) : '';
        $aboutUs = About::first();
        $contactUs = Contactus::first();
        $services = Service::orderBy('id', 'desc')->limit(6)->get();
        $teamMembers = TeamMember::orderBy('id', 'desc')->limit(4)->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        $themeName = getThemeName();
        $sliders = Slider::orderBy('id', 'desc')->limit(3)->get();
        $properties = Property::orderBy('id', 'desc')->limit(9)->get();
        $services_count = Service::all()->count();
        $projects_count = Project::all()->count();
        $team_count = TeamMember::all()->count();

        $states = State::orderBy('id', 'desc')->get();

        return view('site.' . $themeName . '.home',
                    compact('page_filter', 'sliders',
                            'aboutUs', 'contactUs',
                            'services', 'teamMembers',
                            'testimonials', 'blogs',
                            'services_count', 'projects_count',
                            'team_count', 'properties',
                            'states'));
    }

    public function checkVisitor()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $page = \Request::segment(1) ?? 'home';

        $visitors = DB::table('visitors')
                ->where('ip', $ip)
                ->where('page', $page)
                ->latest()
                ->first();

        if($visitors != null) {
            $created = Carbon::parse($visitors->created_at);

            if(!$created->isCurrentDay()) {
                $this->createVisitor($ip, $page);
            }
        }else {
            $this->createVisitor($ip, $page);
        }
    }

    protected function createVisitor($ip, $page)
    {
        Visitor::create([
            'ip'    => $ip,
            'page'  => $page
        ]);
    }

    public function aboutPage()
    {
        $this->checkVisitor();
        $about = About::first();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        $teamMembers = TeamMember::orderBy('id', 'desc')->limit(4)->get();
        $name = getThemeName();
        $services = Service::orderBy('id', 'desc')->limit(6)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();

        $services_count = Service::all()->count();
        $projects_count = Project::all()->count();
        $team_count = TeamMember::all()->count();

        return view('site.' . $name . '.about',
            compact('about', 'testimonials',
                    'teamMembers', 'services',
                    'services_count', 'projects_count',
                    'team_count', 'blogs'));
    }

    public function blogsPage()
    {
        $this->checkVisitor();
        $blogs = Blog::orderBy('id', 'desc')->paginate(12);
        return view('site.' . getThemeName() . '.blogs',
                compact('blogs'));
    }

    public function showBlog($id, $title)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();

        return view('site.' . getThemeName() . '.single_blog',
                compact('blog', 'blogs'));
    }

    public function servicesPage()
    {
        $this->checkVisitor();
        $name = getThemeName();
        $services = Service::orderBy('id', 'desc')->paginate(6);
        $about = About::first();
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        $services_count = Service::all()->count();
        $projects_count = Project::all()->count();
        $team_count = TeamMember::all()->count();

        return view('site.' . $name . '.services',
            compact('services', 'about',
                            'services_count', 'projects_count',
                            'team_count', 'testimonials',
                            'blogs'));
    }

    public function SingleService($id, $title)
    {
        $service = Service::FindOrFail($id);
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        $teamMembers = TeamMember::orderBy('id', 'desc')->limit(4)->get();
        $services_count = Service::all()->count();
        $projects_count = Project::all()->count();
        $team_count = TeamMember::all()->count();


        return view('site.' . getThemeName() . '.single_service',
                compact('service', 'blogs',
                                'teamMembers', 'services_count',
                                'projects_count', 'team_count'));
    }

    public function contact()
    {
        $this->checkVisitor();
        $contactUs = Contactus::first();
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('site.' . getThemeName() . '.contact',
                compact('contactUs', 'blogs'));
    }
}
