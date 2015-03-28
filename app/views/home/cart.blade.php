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
                           Price
                        </td>
                        <td>
                           Action
                        </td>
                    </tr>
                    
                    @foreach($allcart as $cart)
                    <?php // print_r($cart);exit();?>
                    <tr>
                        <td >
                            <div style="width: 100%;">
                            <img src="<?php echo $cart->image; ?>" style="float: left;" width="100" height="100" alt="product image">
                            <span style=" font-weight: bold; font-size: 14px; margin-top: 5px; width: 60%;float: left;">{{{ $cart->title }}}</span>
                            <span style=" font-weight: bold; font-size: 12px; margin-top: 5px; width: 60%;float: left;">{{{ $cart->subtitle }}}</span>
                            <span style=" font-weight: bold; font-size: 14px; margin-top: 10px; width: 60%;float: left;">${{{ $cart->price }}}</span>
                         
                             </div>
                            </td>
                        
                        <td>
                            <input name="quality" id="quality" style="width: 50px; height: 20px;" value="1" >
                        </td>
                        <td>
                           ${{{ $cart->price }}}
                        </td>
                        <td>
                            <a herf="">Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
 @endif
@stop