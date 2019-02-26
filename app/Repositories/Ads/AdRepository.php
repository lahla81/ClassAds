<?php

namespace App\Repositories\Ads;
use App\Traits\ImageUploadTrait;
use App\Models\Ad\Filter;
use App\Helpers\Helper;
use App\Models\{
    Ad,
    User,
    Image
};
class AdRepository implements AdInterface
{

    protected $ads;

    use ImageUploadTrait;

    public function __construct(Ad $ads)
    {
        $this->ads=$ads;
    }

    public function all()
    {
        
    }

    public function store($request)
    {
       
       $ad = $request->user()->ads()->create($request->all()+['slug'=>$request->title]);

       if($request->file('images'))
       {
            $this->storeImages($ad,$request->file('images'));
       }
    }

    public function storeImages($ad,$imgArry)
    {
        foreach ($imgArry as $img) 
        {
            $image_name=$this->saveImages($img);
            $image=new Image();
            $image->image=$image_name;
            $ad->images()->save($image);
        }
    }

    public function getDetails($id)
    {
        return $this->ads::find($id);
    }

    public function getById($id)
    {
        return $this->ads::find($id);
    }

    public function update($request, $id)
    {
        return $this->ads->find($id)->update($request->all());
    }

    public function getByUser()
    {
        return $this->ads::select('id','title','price','slug','created_at')->whereUser_id(\Auth::user()->id)->get();
    }

    public function getByCategory($catId)
    {
        return $this->ads::with('images')->where('category_id',$catId)->get();
    }

    public function delete($id)
    {
        $this->ads->findOrFail($id)->delete();

        return view('ads.adsByCategory', compact('ads'));
    }

    public function search($request)
    {
        return $this->ads->Filter($request);
    }

    public function getCommonAds()
    {

    }
}