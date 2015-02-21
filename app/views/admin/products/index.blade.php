@extends('laravel-authentication-acl::admin.layouts.base')

@section('content')

@if(Session::get('message'))
@if(!empty(Session::get('message')))

<div class="alert alert-block alert-success">
        {{ Session::get('message') }}
        {{ Session::put('message', ''); }}
</div>
@endif
@endif
<h1>Products</h1>
{{ link_to_route('admin.products.create', 'Create new Product',array(), array('class' => 'btn btn-inverse')) }}
<button class="btn btn-danger" onclick="multipleDelete('products');"><i class="icon-trash bigger-130"></i> Multiple Delete</button>
<div class="row">
        <div class="col-xs-12">
                <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                <thead>
                                        <tr>
                                                <th class="center">
                                                        <label>
                                                                <input type="checkbox" class="ace" id="selectall" />
                                                                <span class="lbl"></span>
                                                        </label>
                                                </th>
                                                <th>Title</th>
                                                <th>Subtitle</th>
                                                <th>Likes</th>
                                                <th>Stars</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Brand</th>
                                                <th>Category</th>
                                                <th></th>
                                        </tr>
                                </thead>

                                <tbody class="product-table">
                                    @if(count($products))
                                     @foreach($products as $product)
                                     <tr data-id="<?php echo $product->id ?>">
                                                <td class="center">
                                                        <label>
                                                                <input type="checkbox" class="ace checkbox1"/>
                                                                <span class="lbl"></span>
                                                        </label>
                                                </td>

                                                <td>
<!--                                                        <a href="#">app.com</a>-->
                                                        {{{ $product->title }}}
                                                </td>
                                                <td>{{{ $product->subtitle }}}</td>
                                                <td>{{{ $product->likes }}}</td>
                                                <td>{{{ $product->star }}}</td>
                                                <td>{{{ $product->price }}}</td>
                                                <td><img src="<?php echo $product->image; ?>" width="50px" height="50px" alt="product"></td>
                                                <td>{{{ $product->brand_id }}}</td>
                                                <td>{{{ $product->category_id }}}</td>

                                                <td>
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                                
                                                                <a class="green" href="/admin/products/<?php echo $product->id ?>/edit">
                                                                        <i class="icon-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#" onclick="openModal('products','<?php echo $product->id; ?>','<?php echo $product->title; ?>');">
                                                                        <i class="icon-trash bigger-130"></i>
                                                                </a>
<!--                                                                         <button class="red" onclick="openModal('Products','<?php echo $product->id; ?>','<?php echo $product->title; ?>');">
                                                                            <i class="icon-trash bigger-130"></i>   
                                                                        </button>-->
                                                      
<!--                                                            {{ Form::open(array('route' => array('admin.products.destroy', $product->id), 'method' => 'delete', 'class' => 'destroy')) }}
                                                                   {{ Form::submit('Delete') }}-->
                                                        </div>

                                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                                <div class="inline position-relative">
                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                <span class="blue">
                                                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                <span class="green">
                                                                                                        <i class="icon-edit bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>

                                                                                <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                <span class="red">
                                                                                                        <i class="icon-trash bigger-120"></i>
                                                                                                </span>
                                                                                        </a>
                                                                                </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </td>
                                        </tr>       
                                           @endforeach
                                        @endif
                                        
                                </tbody>
                        </table>
                    <?php echo $products->links(); ?>
                </div>
        </div>
</div>

@stop