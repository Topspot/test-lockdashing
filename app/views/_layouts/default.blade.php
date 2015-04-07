<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Awesome Blog</title>


        {{ HTML::style('css/style.css') }}
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/flexslider.css') }}
        {{ HTML::style('css/banner.css') }}
        {{ HTML::style('css/cloud-zoom.css') }}


        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="wrapper">
            <div class="main-header-dark">    
                <!--header start-->
                <div class="wall">
                    <div class="head-div">
                        <div class="logo"></div>
                        <?php
                         Session::set('message', "");
                            if (App::make('authenticator')->getLoggedUser()) {
                         ?>       
                        <a class="mult-icons" href="<?php echo URL::to('/'); ?>/user/logout"><i class="fa fa-sign-out"></i></a>
                            <?php }else{ ?>                          
                        <a class="mult-icons" href="<?php echo URL::to('/'); ?>/login"><i class="fa fa-sign-in"></i></a>
                            <?php } ?>
                        <a class="mult-icons" href="<?php echo URL::to('/'); ?>/cart/0"><i class="fa fa-shopping-cart"></i></a>
                        <div class="header-text"><span style="color: #b65d35"></span>
                            <?php
                            if (App::make('authenticator')->getLoggedUser()) {
                                echo App::make('authenticator')->getLoggedUser()->getLogin();
                            } else {
                                
                            }
                            ?>
                        </div>
                    </div>            
                </div><!--header end-->
            </div><!--main-header end-->
            <div class="main-header-light">
                <div class="wall">
                    <div class="head-div">
                        <!-- Place somewhere in the <body> of your page -->
                        <div class="flexslider">
                            <ul class="slides">
                                  <?php $sliders = Session::get('sliders') ?>
                                  @if(count($sliders))
                                  @foreach($sliders as $slider) 
                                <li>
                                    <img src="<?php echo URL::to('/')."/".$slider->image ?>" alt="Sliders image" >                                   
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-dark">    
                <div class="wall">
                    <div class="head-div">
                    <nav id="primary_nav_wrap">
                        <ul>
                            <li class="current-menu-item"><a href="<?php echo URL::to('/'); ?>">Home</a></li>
                            <li><a href="#">Men</a>
                                <ul>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=62&price=0">Casual Dressing</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=63&price=0">Formal Dressing</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=64&price=0">Jeans</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=66&price=0">T Shirts</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=67&price=0">Sunglasses </a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=68&price=0">Accessories</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=69&price=0">Footwear</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=70&price=0">Wholesale Deals</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=71&price=0">Brands</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=65&price=0">Shirts</a>
                                    </li>
                             
                                </ul>
                            </li>
                            <li><a href="#">Women</a>
                                <ul>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=52&price=0">Casual Dressing</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=53&price=0">Formal Dressing</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=54&price=0">Jeans</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=55&price=0">T Shirts</a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=56&price=0">Saree</a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=72&price=0">Cosmetics</a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=73&price=0">Undergarments </a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=74&price=0">Night wear </a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=75&price=0">Party dresses </a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=76&price=0">Footwear</a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=58&price=0">Jewelry</a></li>
                                     <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=57&price=0">Sunglasses </a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=59&price=0">Accessories</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=60&price=0">Wholesale Deals</a></li>
                                    <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=61&price=0">Brands</a></li>
                     
                                </ul>
                            </li>
                            <li><a href="<?php echo URL::to('/'); ?>/cart/0">Cart</a></li>
                            <li><a href="<?php echo URL::to('/'); ?>/brands">Brands</a></li>
                        </ul>
                    </nav>


                   </div>
                </div>                    
            </div>  
            <div class="border-brown"></div>
            <div style="clear: both;"></div>  
            <div class="main-featured-item">
                <div class="wall">

                    <div class="first-featured">
                        <div class="top-featured">
                            <div class="feat-text">Featured Items</div>
                            <div class="feat-view"><a  style="color: #000;text-decoration: none;"href="<?php echo URL::to('/'); ?>/featureditem">view all items</div></div>
                        </div>
                        <div class="featured-box">
                            <div>
                                <div class="list_carousel">
                                    <a id="prev2" class="prev" href="#">
                                        &lt;</a>
                                    <ul id="foo2">
                                        <?php $featured = Session::get('featured') ?>
                                        @if(count($featured))
                                        @foreach($featured as $feat)  
                                        <li>
                                            <div class="featured-image">
                                                <a href="<?php echo URL::to('/'); ?>/details/<?php echo  $feat->id; ?>"> 
                                                    
                                                    <img src="<?php echo URL::to('/'); ?>/<?php echo $feat->image; ?>" alt="image">
                                                </a>
                                            </div>
                                            <div class="featured-text"> <a href="#" style="text-decoration: none; color:#000;">{{{$feat->title}}}</a></div>

                                        </li>
                                        @endforeach
                                        @endif

                                    </ul>
                                    <div class="clearfix"></div>

                                </div>
                                <a id="next2" class="next" href="#">&gt;</a>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>  
            <div style="clear: both;"></div>   
            <div class="main-middle">
                <div class="wall">
                    <div class="sidebars">
                        <div class="categories-text">Popular categories</div>
                        <?php $populars = Session::get('populars') ?>
                        @if(count($populars))   
                        @foreach($populars as $popular)  
                        <a href="<?php echo URL::to('/'); ?>/getCategories?cat=<?php echo $popular->category_id ?>&sub=<?php echo $popular->subcategory_id ?>&price=<?php echo $popular->price ?>">
                            <div class="categories-box">
                                <?php $categoy_data = Category::find($popular->category_id); ?>
                                <?php $subcategoy_data = SubCategory::find($popular->subcategory_id); ?>
                                <div class="cat-name"><span style="font-weight: bold; font-size:13px;">{{{$categoy_data->name}}} </span>{{{$subcategoy_data->name}}} {{{$popular->name}}}</div>
                                <div class="cat-price">${{{$popular->price}}}</div>
                            </div></a>
                        @endforeach
                        @endif

                        <div class="categories-text">What's hot</div>
                        <a href="#" target="_blank">
                            <div class="hot-items">
                                <div class="hot-img1">
                                    <span style="font-weight: bold; font-size:19px; color: #fff;">WOMEN STORE</span> </br>GARMENTS & ACCESSORIES
                                </div>
                                <div class="hot-img1-dollar">
                                    <span style="font-weight: normal; font-size:12px;">Start from</span> </br>$40                            
                                </div>
                            </div></a>
                        <a href="#" target="_blank">
                            <div class="hot-items">
                                <div class="hot-img1">
                                    <span style="font-weight: bold; font-size:19px; color: #fff;">MEN STORE</span> </br> 
                                    <b style="font-weight: normal; color: #2ad1f0;">GARMENTS & ACCESSORIES</b>
                                </div>
                                <div class="hot-img1-dollar">
                                    <span style="font-weight: normal; font-size:12px;">Start from</span> </br>$50                            
                                </div>
                            </div> </a>
                        <div class="categories-text">Promotions</div>
                        <div class="promotion-large">
                             <div class="flexslider">
                            <ul class="slides">
                                  <<?php $promotions = Session::get('promotions') ?>
                                        @if(count($promotions))
                                        @foreach($promotions as $promotion)  
                                <li>
                                    <img src="<?php echo URL::to('/')."/".$promotion->image ?>" alt="Promotion image" >                                   
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                            <!--<a href=""> <img src="<?php echo URL::to('/'); ?>/images/monochic.jpg" alt="promotion pic" ></a>-->
                        </div>
                    </div><!--sidebar end-->

                    <div class="main-content">
                        <div class="top-content">
                            <div class="feat-text">Top selling items</div>
                            <div class="view-items"> </div>
                        </div>
                        <div class="search-bar">
                            <i class="fa fa-search search-icon"></i>

                            {{ Form::open(array('action' => 'HomeController@getIndex','method' => 'GET','id' => 'search-item') ) }}
                            <?php $brands = Session::get('brands') ?>
                            @if(count($brands))            
                            @if(isset($data))
                            <select name="namebrands" id="namebrands">
                                @foreach($brands as $brand)   
                                @if($brand->id == $data['namebrands'])
                                <option value="<?php echo $brand->id; ?>">{{{ $brand->name }}}</option>
                                @endif
                                @endforeach
                                @foreach($brands as $brand)    
                                @if($brand->id != $data['namebrands'])
                                <option value="<?php echo $brand->id ?>">{{{ $brand->name }}}</option>
                                @endif
                                @endforeach

                            </select> 
                            <input type="text" name="keyword" id="keyword" value="<?php echo $data['keyword']; ?>">
                            @else
                            <select name="namebrands" id="namebrands">
                                <option value="">Choose brand</option>
                                @foreach($brands as $brand)                                   
                                <option value="<?php echo $brand->id ?>">{{{ $brand->name }}}</option>
                                @endforeach
                            </select> 
                            <input type="text" name="keyword" id="keyword">
                            @endif
                            @endif
                            <input type="submit" value="Search" class="btn-search">
                            {{ Form::close() }}
                        </div>
                        <div class="main-content-box">
                            @yield('content')
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div><!--wall end-->
            </div><!--main-middle end-->
            <div class="main-footer">
                <div class="wall">
                    <div class="footer-nav">
                        <!-- Here's all it takes to make this navigation bar. -->
                        <ul id="footer-nav">
                            <li><a href="<?php echo URL::to('/'); ?>">Home</a></li>
                            <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=2&sub=66&price=0">Men</a></li>
                            <li><a href="<?php echo URL::to('/'); ?>/getCategories?cat=1&sub=52&price=0">Women</a></li>
                            <li><a href="<?php echo URL::to('/'); ?>/brands">Brands</a></li>
                            <li><a href="#">Cart</a></li>
                        </ul>
                        <!-- That's it! -->                              
                    </div>
                    <div class="social-icon">
                        <div class="social-text">Connect with us</div>
                        <a class="social-fb" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a class="social-tw" href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a class="social-rss" href="#"><i class="fa fa-rss fa-2x"></i></a>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="copy-right">
                    <div class="wall">© 2015 Look Dashing. All Rights Reserved.</div>                        
                </div>
            </div>
        </div><!--wrapper end-->
        <div class="demo">


        </div>
    </body>
</html>
{{ HTML::script('js/jquery.js') }}
<!--{{ HTML::script('jquery.js') }}-->
{{ HTML::script('js/jquery.carouFredSel-6.2.1-packed.js') }}
{{ HTML::script('js/jquery.mousewheel.min.js') }}
{{ HTML::script('js/jquery.touchSwipe.min.js') }}
{{ HTML::script('js/jquery.transit.min.js') }}
{{ HTML::script('js/jquery.ba-throttle-debounce.min.js') }}
{{ HTML::script('js/jquery.flexslider.js') }}
{{ HTML::script('js/myscript.js') }}
{{ HTML::script('js/cloud-zoom.1.0.2.min.js') }}
