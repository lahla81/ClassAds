<?php

namespace App\Repositories\Ads;
use App\Traits\ImageUploadTrait;
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

    public function getDetails($id)
    {

    }

    public function getById($id)
    {
        return $this->ads::find($id);
    }

    public function update($request, $id)
    {

    }

    public function getByUser()
    {
        return $this->ads::select('id','title','price','slug','created_at')->whereUser_id(\Auth::user()->id)->get();
    }

    public function storeImages($ad,$imgArry)
    {
        foreach ($imgArry as $img) 
        {
            $image_name=$this->saveImages($img);
            $image=new Image();
            $image->image=$image=$image;
            $ad->images()->save($image);
        }
    }

    public function getByCategory($catId)
    {

    }

    public function delete($id)
    {

    }

    public function search($request)
    {

    }

    public function getCommonAds()
    {

    }
}