<?php

class AdminProductsController extends \BaseController {

	/**
	 * Display a listing of products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::paginate(10);

		return View::make('admin.products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new product
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.products.create');
	}

	/**
	 * Store a newly created product in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            
           

		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                
                  if (Input::hasFile('image')) {
                    $file            = Input::file('image');
                    $destinationPath = public_path().'/img/';
                    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
                    $uploadSuccess   = $file->move($destinationPath, $filename);
                     $data["image"]='/img/'.$filename;
                }
              
		Product::create($data);
                Session::set('message', "Product is successfully added.");
		return Redirect::route('admin.products.index');
	}

	/**
	 * Display the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function show($id)
//	{
//		$product = Product::findOrFail($id);
//
//		return View::make('products.show', compact('product'));
//	}

	/**
	 * Show the form for editing the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);
		return View::make('admin.products.edit', compact('product'));
	}

	/**
	 * Update the specified product in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{            
		$product = Product::findOrFail($id);
             
		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                if (Input::hasFile('image')) {
                    $file            = Input::file('image');
                    $destinationPath = public_path().'/img/';
                    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
                    $uploadSuccess   = $file->move($destinationPath, $filename);
                    $data["image"]='/img/'.$filename;
                }else{
                     unset($data['image']);
                }
                 Session::set('message', "Product is updated successfully.");
		$product->update($data);

		return Redirect::route('admin.products.index');
	}

	/**
	 * Remove the specified product from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $product = Product::find($id);
            if($product) {               
              File::delete(public_path().$product->image);
             }
              Session::set('message', "Product is deleted successfully.");
		Product::destroy($id);

//		return Redirect::route('admin.products.index');
	}
        
        /**
	 * Increment like for the product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function addLikes($id)
        { 

             $product = Product::find($id);
             $product->likes=$product->likes+1;
             $data['likes']=$product->likes;
           $product->update($data);
//                     print_r($product->likes);exit();
        }

}
