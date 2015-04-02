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
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
        Session::set('featured', $featured);

        $products = Product::where('featured', '!=', 1)->where('id', '!=', $id)->orderBy('created_at', 'desc')->take(6)->get();
        return View::make('home.details', compact('products', 'current_product'));
    }

    public function getCart($id) {
        if ( null !== App::make('authenticator')->getLoggedUser()) {

            $current_user_id = App::make('authenticator')->getLoggedUser()->getID();
            $all_product = array();
            if (Session::has($current_user_id . '_cart')) {
                $all_product = Session::get($current_user_id . '_cart');
            }
            if ($id != 0) {
                $current_product = Product::find($id);
                $all_product[] = $current_product;
                Session::set($current_user_id . '_cart', $all_product);
            }
  } else {
            Session::set('message', "Please Login or Signup to add and view cart.");
        }

            $brands = Brand::all();
            Session::set('brands', $brands);
            $populars = Popular::all();
            Session::set('populars', $populars);
            $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
            Session::set('featured', $featured);

            $products = Product::where('featured', '!=', 1)->orderBy('created_at', 'desc')->take(3)->get();
            return View::make('home.cart', compact('products'));
      
    }

    public function getCategories() {
//        print_r($_GET['price']);
        $category_id = $_GET['cat'];
        $subcategory_id = $_GET['sub'];
        $price = $_GET['price'];
        $gotdata = Product::where('category_id', '=', $category_id)
                        ->where('subcategory_id', '=', $subcategory_id)
                        ->where('price', '>', $price)
                        ->orderBy('created_at', 'desc')->paginate(9);
        $brands = Brand::all();
        Session::set('brands', $brands);
        $populars = Popular::all();
        Session::set('populars', $populars);
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
        Session::set('featured', $featured);
        return View::make('home.categories', compact('gotdata'));
    }

    public function getBrands() {
        $allbrands = Brand::paginate(9);
        $brands = Brand::all();
        Session::set('brands', $brands);
        $populars = Popular::all();
        Session::set('populars', $populars);
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
        Session::set('featured', $featured);
        return View::make('home.brands', compact('allbrands'));
    }

    public function getFeatureditem() {
        $featureditems = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->paginate(9);
        $brands = Brand::all();
        Session::set('brands', $brands);
        $populars = Popular::all();
        Session::set('populars', $populars);
        $featured = Product::where('featured', '=', 1)->orderBy('created_at', 'desc')->take(15)->get();
        Session::set('featured', $featured);
        return View::make('home.featureditem', compact('featureditems'));
    }

}
