@extends('_layouts.default')
@section('content')

 <?php
 $current_user_id=App::make('authenticator')->getLoggedUser()->getID();
 $allcart=Session::get($current_user_id.'_cart'); 
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
                           Action
                        </td>
                    </tr>
                    
                    @foreach($allcart as $cart)
                    <?php // print_r($cart);exit();?>
                    <tr>
                        <td >
                            <img src="<?php echo $cart->image; ?>" style="float: left" width="150" height="150" alt="product image">
                            <span style="float: left; font-weight: bold; font-size: 14px; margin-top: 5px;">{{{ $cart->title }}}</span>
                            <span style="float: left; font-weight: bold; font-size: 12px; margin-top: 5px;">{{{ $cart->subtitle }}}</span>
                            <span style="float: left; font-weight: bold; font-size: 14px; margin-top: 10px;">${{{ $cart->price }}}</span>
                        </td>
                        
                        <td>
                            <input name="quality" id="quality">
                        </td>
                        <td>
                            <a herf="">Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td >
                            Row 2
                        </td>
                        <td>
                            Row 2
                        </td>
                        <td>
                            Row 2
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Row 2
                        </td>
                        <td>
                            Row 2
                        </td>
                        <td>
                            Row 2
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Row 3
                        </td>
                        <td>
                            Row 3
                        </td>
                        <td>
                            Row 3
                        </td>
                    </tr>
                </table>
            </div>
 @endif
@stop