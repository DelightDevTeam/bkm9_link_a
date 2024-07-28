<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\BannerAds;
use App\Models\Admin\BannerText;
use App\Models\Admin\ContactLink;
use App\Traits\HttpResponses;
use Illuminate\Http\JsonResponse;

class BannerController extends Controller
{
    use HttpResponses;

    public function index()
    {
        //$data = Banner::all();
        $data = Banner::latest()->take(3)->get();

        return $this->success($data);
    }

    public function bannerText()
    {
        $data = BannerText::latest()->first();

        return $this->success($data);
    }

    //  public function ContactApiLink(): JsonResponse
    // {
    //     $data = ContactLink::latest()->take(6)->get();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Latest 6 Contact Links retrieved successfully',
    //         'data' => $data
    //     ]);
    // }

    public function ContactApiLink()
    {
        $data = ContactLink::latest()->first();

        return $this->success($data);
    }

    // public function AdsBannerIndex()
    // {
    //     $data = BannerAds::latest()->first();

    //     return $this->success($data);
    // }
}
