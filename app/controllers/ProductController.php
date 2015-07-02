<?php

class ProductController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Products             = Product::paginate(10);
		$ProductSuppliers     = ProductSupplier::all();
		$ProductCategories    = ProductCategory::all();
		$ProductSubCategories = ProductSubCategory::all();

        // load the view and pass the nerds
        return View::make('Products.index', compact('Products','ProductSuppliers','ProductCategories','ProductSubCategories'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$product_suppliers      = DB::table('productSuppliers')->orderBy('SupplierName', 'asc')->lists('SupplierName','id');
		$product_categories     = DB::table('productCategories')->orderBy('categoryName', 'asc')->lists('categoryName','id');
		$product_sub_categories = DB::table('productSubcategories')->orderBy('subcategoryName', 'asc')->lists('subcategoryName','id');
			
		return View::make('Products.create', compact('product_suppliers','product_categories','product_sub_categories'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'brand'        => 'required|max:30',
            'model'        => 'required|max:30',
            'description'  => 'required|max:2000',
			'supplier'     => 'required|alpha_dash|max:30',
			'category'     => 'required|alpha_dash|max:30',
			'sub_category' => 'required|alpha_dash|max:30',
			'image_1'  => 'required|image|mimes:jpeg,png|max:2000',
			'image_2'  => 'required|image|mimes:jpeg,png|max:2000',
			'stocks'       => 'required|integer|min:1|max:10'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
			$supplierID    = Input::get('supplier');
			$categoryID    = Input::get('category');
			$subcategoryID = Input::get('sub_category');
			
			$supplier    = ProductSupplier::find($supplierID)->supplierName;
			$category    = ProductCategory::find($categoryID)->categoryName;
			$subcategory = ProductSubCategory::find($subcategoryID)->subcategoryName;

			$image1 = Input::file('image_1');
			$image2 = Input::file('image_2');
			
			$destinationPath = 'Uploads/'; // upload path
			$extension1      = $image1->getClientOriginalExtension(); // getting image extension
			$extension2      = $image2->getClientOriginalExtension(); // getting image extension
			$fileName1       = rand(1111111111,9999999999).'.'.$extension1; // renaming image
			$fileName2       = rand(1111111111,9999999999).'.'.$extension2; // renaming image
			
			$product               = new Product;
			$product->brand        = Input::get('brand');
			$product->model        = Input::get('model');
			$product->description  = Input::get('description');
			$product->supplier     = $supplier;
			$product->category     = $category;
			$product->sub_category = $subcategory;
			$product->image_1  = $fileName1;
			$product->image_2  = $fileName2;
			$product->stocks       = Input::get('stocks');
			$product->save();

			$image1->move($destinationPath, $fileName1); // uploading file to given path
			$image2->move($destinationPath, $fileName2); // uploading file to given path
				
			// redirect
			Session::flash('message-create', 'Successfully created a Product!');
			return Redirect::to('Products');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
        $Product = Product::find($id);

        // show the view and pass the nerd to it
        return View::make('Products.show')
            ->with('Product', $Product);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
        $Product                = Product::find($id);
		$product_suppliers      = DB::table('productSuppliers')->orderBy('SupplierName', 'asc')->lists('SupplierName','id');
		$product_categories     = DB::table('productCategories')->orderBy('categoryName', 'asc')->lists('categoryName','id');
		$product_sub_categories = DB::table('productSubcategories')->orderBy('subcategoryName', 'asc')->lists('subcategoryName','id');

        // show the edit form and pass the nerd
        return View::make('Products.edit', compact('Product','product_suppliers','product_categories','product_sub_categories'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'brand'        => 'required|max:30',
            'model'        => 'required|max:30',
            'description'  => 'required|max:2000',
			'supplier'     => 'required|alpha_dash|max:30',
			'category'     => 'required|alpha_dash|max:30',
			'sub_category' => 'required|alpha_dash|max:30',
			'image_1'  => 'required|image|mimes:jpeg,png|max:2000',
			'image_2'  => 'required|image|mimes:jpeg,png|max:2000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
			/* starts deleting old file */
			$oldfile1    = Product::find($id)->image_1;
			$oldfile2    = Product::find($id)->image_2;
			File::delete('Uploads/'.$oldfile1);
			File::delete('Uploads/'.$oldfile2);
			/* ends deleting old file */
			
			// store
			$supplierID    = Input::get('supplier');
			$categoryID    = Input::get('category');
			$subcategoryID = Input::get('sub_category');
			
			$supplier    = ProductSupplier::find($supplierID)->supplierName;
			$category    = ProductCategory::find($categoryID)->categoryName;
			$subcategory = ProductSubCategory::find($subcategoryID)->subcategoryName;
			
			$image1 = Input::file('image_1');
			$image2 = Input::file('image_2');
			
			$destinationPath = 'Uploads/'; // upload path
			$extension1      = $image1->getClientOriginalExtension(); // getting image extension
			$extension2      = $image2->getClientOriginalExtension(); // getting image extension
			$fileName1       = rand(1111111111,9999999999).'.'.$extension1; // renaming image
			$fileName2       = rand(1111111111,9999999999).'.'.$extension2; // renaming image
			
            $product               = Product::find($id);
            $product->brand        = Input::get('brand');
            $product->model        = Input::get('model');
            $product->description  = Input::get('description');
			$product->supplier     = $supplier;
            $product->category     = $category;
            $product->sub_category = $subcategory;
			$product->image_1  = $fileName1;
			$product->image_2  = $fileName2;
            $product->save();

			$image1->move($destinationPath, $fileName1); // uploading file to given path
			$image2->move($destinationPath, $fileName2); // uploading file to given path

            // redirect
            Session::flash('message', 'Successfully updated Product!');
            return Redirect::to('Products');
        }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateStocks($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
			'stocks' => 'required|integer|min:-10|max:10'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products')
                ->withErrors($validator);
        } else {
			$currentStock = Product::find($id)->stocks;
			$newStock     = Input::get('stocks');
			if ($newStock >= 0) {
				DB::table('products')->where('id', $id)->increment('stocks', $newStock);
			}
			else {
				if ($currentStock <= 0) {
					Session::flash('message-stock-error', 'The Stock is Empty!');
					return Redirect::to('Products');
				}
				else {
					DB::table('products')->where('id', $id)->decrement('stocks', $newStock * -1);
					$pendingStock = Product::find($id)->stocks;
					if ($pendingStock <= 0) {
						DB::table('products')->where('id', $id)->increment('stocks', $pendingStock * -1);
					}
					else {
						Session::flash('message', 'Successfully updated Product Stock!');
						return Redirect::to('Products');
					}
				}
			}
			
            // redirect
            Session::flash('message', 'Successfully updated Product Stock!');
            return Redirect::to('Products');
        }
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		/* starts deleting old file */
		$oldfile1    = Product::find($id)->image_1;
		$oldfile2    = Product::find($id)->image_2;
		File::delete('Uploads/'.$oldfile1);
		File::delete('Uploads/'.$oldfile2);
		/* ends deleting old file */
	
		// delete
        $Product = Product::find($id);
        $Product->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Product!');
        return Redirect::to('Products');
	}
	
	public function destroy1($id)
	{
		// delete
        $ProductSupplier = ProductSupplier::find($id);
        $ProductSupplier->delete();

        // redirect
        Session::flash('message1', 'Successfully deleted the Supplier!');
        return Redirect::to('Products');
	}
	
	public function destroy2($id)
	{
		// delete
        $ProductCategory = ProductCategory::find($id);
        $ProductCategory->delete();

        // redirect
        Session::flash('message2', 'Successfully deleted the Category!');
        return Redirect::to('Products');
	}
	
	public function destroy3($id)
	{
		// delete
        $ProductSubCategory = ProductSubCategory::find($id);
        $ProductSubCategory->delete();

        // redirect
        Session::flash('message3', 'Successfully deleted the Sub Category!');
        return Redirect::to('Products');
	}
	
	public function create1()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'supplierName' => 'required|alpha_dash|unique:productSuppliers'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products/createSCS')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $ProductSupplier               = new ProductSupplier;
            $ProductSupplier->supplierName = Input::get('supplierName');
            $ProductSupplier->save();

            // redirect
            Session::flash('message1', 'Successfully created a Supplier!');
            return Redirect::to('Products/createSCS');
        }
	}
	
	public function create2()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'categoryName' => 'required|alpha_dash|unique:productCategories'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products/createSCS')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $ProductCategory               = new ProductCategory;
            $ProductCategory->categoryName = Input::get('categoryName');
            $ProductCategory->save();

            // redirect
            Session::flash('message2', 'Successfully created a Category!');
            return Redirect::to('Products/createSCS');
        }
	}
	
	public function create3()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'subcategoryName' => 'required|alpha_dash|unique:productSubcategories'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Products/createSCS')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $ProductSubCategory                  = new ProductSubCategory;
            $ProductSubCategory->subcategoryName = Input::get('subcategoryName');
            $ProductSubCategory->save();

            // redirect
            Session::flash('message3', 'Successfully created a Sub Category!');
            return Redirect::to('Products/createSCS');
        }
	}


}
