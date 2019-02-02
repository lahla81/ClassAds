<?php

namespace App\Repositories\Ads;
use App\Helpers\Helper;
use App\Models\{
    Ad,
    User,
    Image
};
class AdRepository implements AdInterface
{

    protected $ads;

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

    }

    public function update($request, $id)
    {

    }

    public function getByUser()
    {

    }

    public function storeImages($ad,$imgArry)
    {
        foreach ($imgArry as $img) 
        {
            $image=new Image();
            $image->image=$img->getClientOriginalName();
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