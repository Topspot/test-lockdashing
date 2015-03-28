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
            $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
            Session::set('featured', $featured);


            $products = Product::where('featured', '!=', 1)->orderBy('created_at', 'desc')->paginate(9);
            return View::make('home.index', compact('products'));
        }
    }

    public function getDetails($id) {
        $current_product = Product::find($id);
        $brands = Brand::all();
        Session::set('brands', $brands);
        $populars = Popular::all();
        Session::set('populars', $populars);
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(4)->get();
        Session::set('featured', $featured);

        $products = Product::where('featured', '!=', 1)->where('id', '!=', $id)->orderBy('created_at', 'desc')->take(6)->get();
        return View::make('home.details', compact('products', 'current_product'));
    }

    public function getCart($id) {
        $current_product = Product::find($id);
        $current_user_id=App::make('authenticator')->getLoggedUser()->getID();
          $all_product=array();
        if(Session::has($current_user_id.'_cart')){
            $all_product=Session::get($current_user_id.'_cart');    
        }
            $all_product[]=$current_product;
            Session::set($current_user_id.'_cart', $all_product);
  
         
        $brands = Brand::all();
        Session::set('brands', $brands);
        $populars = Popular::all();
        Session::set('populars', $populars);
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(4)->get();
        Session::set('featured', $featured);

        $products = Product::where('featured', '!=', 1)->orderBy('created_at', 'desc')->take(3)->get();
       return View::make('home.cart', compact('products'));
    }

}
