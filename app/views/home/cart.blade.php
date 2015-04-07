@extends('_layouts.default')
@section('content')

<?php
$current_user_id = App::make('authenticator')->getLoggedUser()->getID();
$allcart = Session::get($current_user_id . '_cart');
?>
@if(count($allcart)) 
<div class="CSSTableGenerator" >
    <table >

        <tr>
            <td>
                Product
            </td>

            <td>
                Quality
            </td>
            <td>
                Price
            </td>
            <td>
                Action
            </td>
        </tr>
        <?php $count=0;?>
        @foreach($allcart as $cart)
        <?php // print_r($cart);exit();?>
        <tr>
            <td >
                <div style="width: 100%;">
                    <img src="<?php echo URL::to('/'); ?>/<?php echo $cart->image; ?>" style="float: left;" width="100" height="100" alt="product image">
                    <span style="margin-left: 10px; font-weight: bold; font-size: 20px; margin-top: 5px; width: 60%;float: left;">{{{ $cart->title }}}</span>
                    <span style="margin-left: 10px; font-weight: bold; font-size: 12px; margin-top: 5px; width: 60%;float: left;">{{{ $cart->subtitle }}}</span>
                    <span style="margin-left: 10px; font-weight: bold; font-size: 14px; margin-top: 10px; width: 60%;float: left;">${{{ $cart->price }}}</span>

                </div>
            </td>

            <td>
                <input name="quality" id="quality_<?php echo $count; ?>" class="quality" style="width: 50px; height: 20px; text-align: center;" value="1" >
            </td>
            <?php $count=$count + 1; ?>
            <td  data-price=<?php echo $cart->price;?>>
                <span class="prod-price">  ${{{ $cart->price }}} </span>
            </td>
            <td>
                <a class="cancel" href="<?php echo URL::to('/'); ?>/cart/00?removeid=<?php echo $cart->id;?>">Cancel</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
@stop