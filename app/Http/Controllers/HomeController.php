<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        //dd('this is home');
        //@AchariyaDebdutta
        $url1 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCqDfG4lWZ5OJgJSc2XK7g4A' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response1 = Curl::to($url1)
            ->get();
        //dd($response);
        $response1 = json_decode($response1);
        $youtubechannelitems1 = $response1->items[0];
        $youtubechanneldata1 = $youtubechannelitems1->snippet;
        $youtubechanneldatasubscription1 = $youtubechannelitems1->statistics->subscriberCount;

        //@TheDebduttaShow -
        $url2 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCE6Wescg35pfTdUmOpJsYsQ' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response2 = Curl::to($url2)
            ->get();

        //dd($response);
        $response2 = json_decode($response2);
        $youtubechannelitems2 = $response2->items[0];
        $youtubechanneldata2 = $youtubechannelitems2->snippet;
        $youtubechanneldatasubscription2 = $youtubechannelitems2->statistics->subscriberCount;

        //@AstroAchariya -
        $url3 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCHeZB0rv09RBnEySIfehLOA' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response3 = Curl::to($url3)
            ->get();

        $response3 = json_decode($response3);
        $youtubechannelitems3 = $response3->items[0];
        $youtubechanneldata3 = $youtubechannelitems3->snippet;
        $youtubechanneldatasubscription3 = $youtubechannelitems3->statistics->subscriberCount;

        //dd($youtubechanneldata1);
        return view('front.home', [
            'youtubechanneldata1' => $youtubechanneldata1,
            'youtubechanneldatasubscription1' => $youtubechanneldatasubscription1,
            'youtubechanneldata2' => $youtubechanneldata2,
            'youtubechanneldatasubscription2' => $youtubechanneldatasubscription2,
            'youtubechanneldata3' => $youtubechanneldata3,
            'youtubechanneldatasubscription3' => $youtubechanneldatasubscription3
        ]);

    }

    public function aboutus()
    {
        //dd('this is home');
        return view('front.aboutus');
    }

    public function ourstory()
    {
        //dd('this is home');
        return view('front.ourstory');
    }

    public function groupofdirectors()
    {
        //dd('this is home');
        return view('front.groupofdirectors');
    }

    public function ourbusiness()
    {
        //dd('this is home');
        return view('front.ourbusiness');
    }

    public function ourcompanies()
    {
        //dd('this is home');
        return view('front.ourcompanies');
    }

    public function corporatesustainability()
    {
        //dd('this is home');
        return view('front.corporatesustainability');
    }

    public function healthsafetyandenvironment()
    {
        //dd('this is home');
        return view('front.healthsafetyandenvironment');
    }


    public function career()
    {
        //dd('this is home');
        return view('front.career');
    }


    public function investor()
    {
        //dd('this is home');
        return view('front.investor');
    }


    public function contactus()
    {
        //dd('this is home');
        return view('front.contactus');
    }

    public function saggitech()
    {
        //dd('this is home');
        return view('front.saggitech');
    }

    public function debduttadigital()
    {
        //@AchariyaDebdutta
        $url1 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCqDfG4lWZ5OJgJSc2XK7g4A' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response1 = Curl::to($url1)
            ->get();
        //dd($response);
        $response1 = json_decode($response1);
        $youtubechannelitems1 = $response1->items[0];
        $youtubechanneldata1 = $youtubechannelitems1->snippet;
        $youtubechanneldatasubscription1 = $youtubechannelitems1->statistics->subscriberCount;

        //@TheDebduttaShow -
        $url2 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCE6Wescg35pfTdUmOpJsYsQ' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response2 = Curl::to($url2)
            ->get();

        //dd($response);
        $response2 = json_decode($response2);
        $youtubechannelitems2 = $response2->items[0];
        $youtubechanneldata2 = $youtubechannelitems2->snippet;
        $youtubechanneldatasubscription2 = $youtubechannelitems2->statistics->subscriberCount;

        //@AstroAchariya -
        $url3 = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCHeZB0rv09RBnEySIfehLOA' . '&key=AIzaSyBUm1uVpuIGK2GudT_jFjagMWqnwZRojNI';

        $response3 = Curl::to($url3)
            ->get();

        $response3 = json_decode($response3);
        $youtubechannelitems3 = $response3->items[0];
        $youtubechanneldata3 = $youtubechannelitems3->snippet;
        $youtubechanneldatasubscription3 = $youtubechannelitems3->statistics->subscriberCount;

        //dd($youtubechanneldata1);
        return view('front.debdutta-digital', [
            'youtubechanneldata1' => $youtubechanneldata1,
            'youtubechanneldatasubscription1' => $youtubechanneldatasubscription1,
            'youtubechanneldata2' => $youtubechanneldata2,
            'youtubechanneldatasubscription2' => $youtubechanneldatasubscription2,
            'youtubechanneldata3' => $youtubechanneldata3,
            'youtubechanneldatasubscription3' => $youtubechanneldatasubscription3
        ]);
    }

    public function newsprimenow()
    {
        //dd('this is home');
        return view('front.news-prime-now');
    }

    public function buildingjunction()
    {
        //dd('this is home');
        return view('front.building-junction');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function downloadpdf()
    {
        dd("fsdfsd");
        $path = public_path('front/doc/brouchure.pdf');
        $fileName = 'Sagitiles Digital catalog' . '.pdf';
        return response()->download($path, $fileName);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
