@extends('_layouts.default')
@section('content')
@if(count($products))
<?php $count=0; ?>
    @foreach($products as $product)
<div class="item-box">
    <figure>
        <img src="<?php echo $product->image; ?>" alt="image">

            <figcaption>
                <div class="item-star"></div>                        
                <div class="item-search-icon"><i class="fa fa-search search-icon fa-2x"></i></div>     
                <div class="fivestar"></div>

                <!--<p><a href="#">Read More</a></p>-->
                <div class="item-options">
                    <a href="#" class="option-price">${{{ $product->price }}}</a>
                    <a href="#" class="option-cart"><i class="fa fa-cart-plus"></i></a>
                    <a href="#"class="option-heart" data-bind="<?php echo  $product->id; ?>"><i class="fa fa-heart"></i><div class="likes-no">{{{ $product->likes }}}</div></a>
                    <a href="#"class="option-detail">View Details</a>
                </div>
            </figcaption>
    </figure>
    <div class="item-box-text"> <span style="font-size:14px; color: #801d0a; margin-bottom: 10px;" >{{{ $product->title }}}</span></br> <p style="margin-top: 6px;">{{{ $product->subtitle }}}</p></div>

</div>  
    <?php $count=$count + 1; ?>
    
    @if($count == 3)
    <div style="margin-bottom: 20px; border-top: 2px solid #ede8dd; border-bottom: 2px solid #fff; width: 100%; height: 0px; float: left;"></div>
    <?php $count=0; ?>
    @endif
    
    @endforeach

@endif
<?php echo $products->links(); ?>
@stop