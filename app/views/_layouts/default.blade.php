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
                        <a class="mult-icons" href="#"><i class="fa fa-lock"></i></a>
                        <a class="mult-icons" href="#"><i class="fa fa-shopping-cart"></i></a>
                        <a class="mult-icons" href="#"><i class="fa fa-heart"></i></a>
                        <a class="mult-icons" href="#"><i class="fa fa-star"></i></a>
                        <a class="mult-icons" href="#"><i class="fa fa-comment"></i></a>
                        <div class="header-text"><span style="color: #b65d35">Good Evening,</span> versesdesign</div>
                    </div>            
                </div><!--header end-->
            </div><!--main-header end-->
            <div class="main-header-light">
                <div class="wall">
                    <div class="head-div">
                        <!-- Place somewhere in the <body> of your page -->
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="images/slide1.jpg" />
                                </li>
                                <li>
                                    <img src="images/slide1.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header-dark">    
                <div class="wall">
                    <div class="head-div">
                        <!-- Here's all it takes to make this navigation bar. -->
                        <ul id="nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Communities</a></li>
                            <li><a href="#">Deilivery</a></li>
                            <li><a href="#">Store</a></li>
                        </ul>
                        <!-- That's it! -->
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
                            <div class="feat-view"> view all items</div>
                            <!--<div class="top-brands"> Top selling</div>-->
                        </div>
                        <div class="featured-box">
                                        <div>
			<div class="list_carousel">
                            <a id="prev2" class="prev" href="#">
                                &lt;</a>
				<ul id="foo2">
                                      <?php $featured=Session::get('featured') ?>
                             @if(count($featured))
                             @foreach($featured as $feat)  
					<li>
                                    <div class="featured-image"><a href="#"> <img src="<?php echo $feat->image; ?>" alt="image"></a></div>
                                    <div class="featured-text"> <a href="#" style="text-decoration: none; color:#000;">{{{$feat->title}}}</a></div>
                           
                                            </li>
                                         @endforeach
                             @endif
                             @if(count($featured))
                             @foreach($featured as $feat)  
					<li>
                                            <div class="featured-image"><a href="#"> <img src="<?php echo $feat->image; ?>" alt="image"></a></div>
                                               <div class="featured-text"> <a href="#" style="text-decoration: none; color:#000;">{{{$feat->title}}}</a></div>
                           
                                            </li>
                                         @endforeach
                             @endif
                             @if(count($featured))
                             @foreach($featured as $feat)  
					<li>
                                      <div class="featured-image"><a href="#"> <img src="<?php echo $feat->image; ?>" alt="image"></a></div>
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
                          <?php $populars=Session::get('populars') ?>
                         @if(count($populars))   
                         @foreach($populars as $popular)  
                          <a href="#" target="_blank">
                            <div class="categories-box">
                               <?php  $categoy_data =Category::find($popular->category_id); ?>
                                <div class="cat-name"><span style="font-weight: bold; font-size:13px;">{{{$categoy_data->name}}} </span>{{{$popular->name}}}</div>
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
                        <div class="promotion-small"></div>
                        <div class="promotion-large"></div>
                    </div><!--sidebar end-->

                    <div class="main-content">
                        <div class="top-content">
                            <div class="feat-text">Top selling items</div>
                            <div class="view-items"> view all items</div>
                        </div>
                        <div class="search-bar">
                            <i class="fa fa-search search-icon"></i>
                           
                         {{ Form::open(array('action' => 'HomeController@getIndex','method' => 'GET','id' => 'search-item') ) }}
                               <?php $brands=Session::get('brands') ?>
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
                                    <option value="<?php echo $brand->id?>">{{{ $brand->name }}}</option>
                                     @endif
                                    @endforeach
                                   
                                </select> 
                                <input type="text" name="keyword" id="keyword" value="<?php echo $data['keyword']; ?>">
                                @else
                                <select name="namebrands" id="namebrands">
                                     <option value="">Chose brand</option>
                                    @foreach($brands as $brand)                                   
                                    <option value="<?php echo $brand->id?>">{{{ $brand->name }}}</option>
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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Communities</a></li>
                            <li><a href="#">Deilivery</a></li>
                            <li><a href="#">Store</a></li>
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

    </body>
</html>
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/jquery.carouFredSel-6.2.1-packed.js') }}
{{ HTML::script('js/jquery.mousewheel.min.js') }}
{{ HTML::script('js/jquery.touchSwipe.min.js') }}
{{ HTML::script('js/jquery.transit.min.js') }}
{{ HTML::script('js/jquery.ba-throttle-debounce.min.js') }}
{{ HTML::script('js/jquery.flexslider.js') }}
{{ HTML::script('js/myscript.js') }}