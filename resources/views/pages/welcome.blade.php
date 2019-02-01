<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Our Campus</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
    <link href="home/css/style.css" rel='stylesheet' type='text/css' />  
    <script src="home/js/jquery.min.js"> </script>

    
<!--/script-->
<script type="text/javascript" src="home/js/move-top.js"></script>
<script type="text/javascript" src="home/js/easing.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>

</head>
<body>
    <!-- header-section-starts -->
      @include('pages.nav')
   
    <div class="col-md-9 main">
        <!--banner-section-->
        <div class="banner-section page-content">
           <br><br>

            <div class="banner">
                 <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">
                           <li>
                              <img src="home/images/jnu1.jpg" class="img-responsive" alt="" />

                            </li>
                            <li>
                                 <img src="home/images/jnu2.jpg" class="img-responsive" alt="" />


                            </li>
                            <li>
                             <img src="home/images/jnu3.jpg" class="img-responsive" alt="" />

                            
                            </li>
                            <li>
                             <img src="home/images/jnu1.jpg" class="img-responsive" alt="" />


                            </li>
                        </ul>
                    </div>
                    <br><br>
                    <!--banner-->
                <script src="home/js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager:true,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
              <br><br>
         <div class="clearfix"> </div>
         <br><br>
                
             </div>
               <!--//banner-->
              <!--/top-news-->
         <div class="span8">
    @foreach($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{substr(strip_tags($post->body),0,500)}}{{strlen(strip_tags($post->body))>500 ? "......" : ""}}</p>
    <div>
        <span class="badge badge-success">Posted {{date("F nS,Y,g:i a",strtotime($post->created_at))}}&nbsp;</span>
    </div> 
       
    <hr>
    <div class="custom-space"></div>
     <hr class="hrclr">
    @endforeach

</div>
                    <!--//top-news-->
             </div>
            <!--//banner-section-->
            <div class="banner-right-text page-content">
             <h3 class="tittle">JnU News<i class="glyphicon glyphicon-facetime-video"></i></h3>
            <!--/general-news-->
             <div class="general-news">
                <div class="general-inner">
                    <div class="general-text">
                         <a href="single.html"><img src="images/gen1.jpg" class="img-responsive" alt=""></a>
                            <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                     </div>
                     <div class="edit-pics">
                                  <div class="editor-pics">
                                         <div class="col-md-3 item-pic">
                                           <img src="images/f4.jpg" class="img-responsive" alt="">

                                           </div>
                                            <div class="col-md-9 item-details">
                                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                                 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                                             </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="editor-pics">
                                         <div class="col-md-3 item-pic">
                                           <img src="images/f1.jpg" class="img-responsive" alt="">

                                           </div>
                                            <div class="col-md-9 item-details">
                                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                                 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                                             </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="editor-pics">
                                         <div class="col-md-3 item-pic">
                                           <img src="images/f1.jpg" class="img-responsive" alt="">

                                           </div>
                                            <div class="col-md-9 item-details">
                                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                                 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                                             </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="editor-pics">
                                         <div class="col-md-3 item-pic">
                                           <img src="images/f4.jpg" class="img-responsive" alt="">

                                           </div>
                                            <div class="col-md-9 item-details">
                                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                                 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                                             </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                <div class="media"> 
                                 <h3 class="tittle media">Media <i class="glyphicon glyphicon-floppy-disk"></i></h3>
                                  <div class="general-text two">
                                     <a href="single.html"><img src="images/gen3.jpg" class="img-responsive" alt=""></a>
                                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                                  </div>
                             </div>
                        <div class="general-text two">
                            <a href="single.html"><img src="images/gen2.jpg" class="img-responsive" alt=""></a>
                            <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                        </div>
                 </div>
            </div>  
            <!--//general-news-->
            <!--/news-->
            <!--/news-->
         </div>
            <div class="clearfix"> </div>
    <!--/footer-->
      
        <div class="container">
  
    <!----------- Footer ------------>
    

</div>
     <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>  
        <!--//footer-->
            <!--start-smooth-scrolling-->
                        <script type="text/javascript">
                                    $(document).ready(function() {
                                        /*
                                        var defaults = {
                                            containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                        };
                                        */
                                        
                                        $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                                    });
                                </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
<footer class="footer-bs">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft">
               <!--  <h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2014 BS3 UI Kit, All rights reserved</p> -->
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Tution</a></li>
                        <li><a href="#">Notice Board</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">RSS</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-ns animated fadeInRight">
                <!-- <h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div> --><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
     <section style="text-align:center; margin:10px auto;"><p>Copyright © CSE,JnU</p></section>
</html>