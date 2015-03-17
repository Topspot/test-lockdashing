<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

   

    public function getIndex() {

        $data = Input::all();
        if (isset($data['keyword']) || isset($data['namebrands'])) {
            $namebrands = $data['namebrands'];
            $keyword = $data['keyword'];
            $products = DB::table('products')
                    ->where('brand_id', '=', $namebrands)
                    ->where('title', 'LIKE', "%$keyword%")
                    ->paginate(9);

            return View::make('home.index', compact('products', 'data'));
        } else {
            $brands = Brand::all();
            Session::set('brands', $brands);
            $populars = Popular::all();
            Session::set('populars', $populars);
            $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(4)->get();
            Session::set('featured', $featured);
//            $topsell = Product::find(1)->where('topsell', '=', 1)->orderBy('created_at', 'desc')->get();
//            Session::set('topsell', $topsell);

            $products = Product::where('featured', '!=', 1)->orderBy('created_at', 'desc')->paginate(9);
            return View::make('home.index', compact('products'));
        }
    }

}
