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

//    public function front() {
//        $products = Product::all();
//
//        return View::make('home.front', compact('products'));
////		return View::make('hello');
//    }

    public function getIndex() {
//      echo "asdasd"; exit();
//        $validator = Validator::make($data = Input::all(), Brand::$rules);

        $data = Input::all();
        if(isset($data['keyword']) ||  isset($data['namebrands'])){
                 $namebrands  = $data['namebrands'];
                 $keyword  = $data['keyword'];
                 $products=DB::table('products')
    ->where('brand_id', '=',$namebrands)
    ->where('title', 'LIKE', "%$keyword%")
    ->paginate(9);
//                  $products = Product::where('brand_id', '=',$namebrands)
//   ->where('title', 'LIKE', "%$keyword%")
//    ->paginate(9);
//            print_r($products);
//            exit();

            return View::make('home.index', compact('products','data'));

        }else{
             $brands = Brand::all();
           Session::set('brands', $brands);
            $products = Product::paginate(9);
            return View::make('home.index', compact('products'));

        }
      
      
        
    }

}
