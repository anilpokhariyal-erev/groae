<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Freezone;
use App\Models\TrendingFreezone;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $freezones = Freezone::select('id', 'name', 'logo', 'about', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $blogs = Blog::select('id', 'title', 'short_description', 'image', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        return view('page.home', compact('blogs', 'freezones'));
    }

    public function freezones()
    {
        $freezones = Freezone::select('id', 'name', 'logo', 'about', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('front.freezone.freezones', compact('freezones'));
    }

    public function explore_freezone(Request $request)
    {
        Paginator::useBootstrap();
        $freezones = Freezone::select('id', 'name', 'logo', 'about', 'slug', 'created_at')->where('status', 1);

        if ($request->search) {
            $freezones->where('name', 'LIKE', "%{$request->search}%");
        }
        $freezones = $freezones->orderBy('id', 'DESC')->paginate(5);
        $trending_freezone = TrendingFreezone::with('freezone')->whereHas('freezone', function ($query) {
            return $query->where('status', 1);
        })->skip(0)->take(4)->orderBy('freezone_views_count', 'DESC')->get();

        return view('front.freezone.explore_freezone', compact('freezones', 'trending_freezone'));
    }

    public function freezone_detail(Request $request, $freezone_slug, $page_slug = null)
    {
        $freezone_detail = Freezone::with('freezone_pages')->whereHas('freezone_pages', function ($query) {
            return $query->where('status', 1);
        })->select('id', 'name', 'logo', 'about', 'slug', 'created_at')->where('status', 1)->where('slug', $freezone_slug)->first();
        if (!$freezone_detail) {
            return abort(404);
        }

        $page_slug = (!empty($page_slug)) ? $page_slug : 'about-freezone';
        $freezone_page = $freezone_detail->freezone_pages()->where('slug', $page_slug)->where('status', 1)->first();
        if (!$freezone_page) {
            return abort(404);
        }

        $trending_freezone_count = $freezone_detail->trending_freezone()->first();
        $freezone_count = (!empty($trending_freezone_count) ? $trending_freezone_count->freezone_views_count + 1 : 1);
        if (!$trending_freezone_count) {
            $freezone_detail->trending_freezone()->create(['freezone_views_count' => $freezone_count]);
        } else {
            $freezone_detail->trending_freezone()->update(['freezone_views_count' => $freezone_count]);
        }
        return view('front.freezone.freezone_detail', compact('freezone_detail', 'freezone_page'));
    }
    
    public function get_freezone(Request $request)
    {
        $freezone_id = $request->freezone_id;
        if ($freezone_id) {
            $freezone_data = Freezone::select('id', 'uuid', 'name', 'logo')->whereIn('id', $freezone_id);
            $f_count = $freezone_data->count();
            $freezones = $freezone_data->get();
            $uuids = implode(',', $freezone_data->pluck('uuid')->toArray());
            if ($f_count > 0) {
                $freezones_data = array();
                foreach ($freezones as $f_vals) {
                    $freezones_data[] = [
                        'id' => $f_vals->id,
                        'name' => $f_vals->name,
                        'logo' => Storage::url($f_vals->logo)
                    ];
                }
                $response = response()->json(array('msg' => "success", 'data' => $freezones_data, 'uuids' => $uuids), 200);
            } else {
                $response = response()->json(array('msg' => "failed", 'data' => ''), 202);
            }
        } else {
            $response = response()->json(array('msg' => "failed", 'data' => ''), 202);
        }
        return $response;
    }
}
