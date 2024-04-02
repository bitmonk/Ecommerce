<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carousel(){
        $carousel = Carousel::all();
        return view('Backend.Page.Carousel.index',compact('carousel'));
    }

    public function carouselCreate(){
        return view('Backend.Page.Carousel.create');
    }

    public function carouselStore(Request $request){
        $carousel = new Carousel();
        if($request->hasFile('carousel_image')){
            $carouselImage = $request->file('carousel_image');
            $newCarouselImage = $carouselImage->hashName();
            $carouselImage->move('carousel',$newCarouselImage);
            $carousel->carousel_image = "carousel/$newCarouselImage";
        }
        $carousel->save();
        return redirect()->back();

    }

    public function ActiveShow($id){
        $activeCarousel = Carousel::findOrFail($id);
        $activeCarousel->status = 'active';
        $activeCarousel->save();
        return redirect()->back();
    }
    public function deactive($id){
        $activeCarousel = Carousel::findOrFail($id);
        $activeCarousel->status = 'deactive';
        $activeCarousel->save();


        return redirect()->back();
    }

}
