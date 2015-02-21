<?php

class AdminBrandsController extends \BaseController {

	/**
	 * Display a listing of brands
	 *
	 * @return Response
	 */
	public function index()
	{
		$brands = Brand::paginate(10);

		return View::make('admin.brands.index', compact('brands'));
	}

	/**
	 * Show the form for creating a new brand
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.brands.create');
	}

	/**
	 * Store a newly created brand in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Brand::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Brand::create($data);
                Session::set('message', "Brand is successfully added.");
		return Redirect::route('admin.brands.index');
	}

	/**
	 * Display the specified brand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function show($id)
//	{
//		$brand = Brand::findOrFail($id);
//
//		return View::make('admin.brands.show', compact('brand'));
//	}

	/**
	 * Show the form for editing the specified brand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$brand = Brand::find($id);

		return View::make('admin.brands.edit', compact('brand'));
	}

	/**
	 * Update the specified brand in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$brand = Brand::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Brand::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                Session::set('message', "Brand is updated successfully.");
		$brand->update($data);
               
		return Redirect::route('admin.brands.index');
	}

	/**
	 * Remove the specified brand from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
                Session::set('message', "Brand is deleted successfully.");
		Brand::destroy($id);

//		return Redirect::route('admin.brands.index');
	}

}
