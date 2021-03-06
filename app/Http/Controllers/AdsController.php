<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ {
    Ads\AdInterface
};

class AdsController extends Controller
{
    protected $ads;

    public function __construct(AdInterface $ads)
    {
        $this->ads=$ads;
    }

    public function all()
    {
        $ads = $this->ads->all();
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        $this->ads->store($request);

        return back()->with('success','تم إضافة إعلان');
    }

    public function edit($id)
    {
        $ad=$this->ads->getbyId($id);

        return view('ads.edit',compact('ad'));
    }

    public function update(Request $request, $id)
    {
        $this->ads->update($request, $id);

        return back()->with('success','تم تعديل الإعلان');
    }

    public function destroy($id)
    {
        $this->ads->delete($id);

       return back()->with('success','تم حذف الإعلان');
    }
    public function getUserAds()
    {
        $ads=$this->ads->getByUser();
        return view('ads.userAds',compact('ads'));
    }

    public function getByCategory($id)
    {
        $ads=$this->ads->getByCategory($id);
        return view('ads.adsByCategory',compact('ads'));
    }

    public function search(Request $request)
    {
        $ads = $this->ads->search($request);

        return view('ads.adsByCategory',compact('ads'));
    }    

    public function show($id)
    {
        $ad = $this->ads->getDetails($id);

        return view('ads.show',compact('ad'));
    }    
}
