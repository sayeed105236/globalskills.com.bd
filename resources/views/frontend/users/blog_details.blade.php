@extends('frontend.layouts.master')


@section('content')



<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry">
              <br/>
              <br/>
                <h1 class="text-white">Blog Details</h1>
    </div>
        </div>
    </div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
  <div class="container">
    <ul class="list-inline">
      <li><a href="{{route('home')}}">Home</a></li>
      <li>Blog Details</li>
      <li>{{$blogs->blogs_title}}</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb row END -->
    <div class="content-block">
  <div class="section-area section-sp1">
    <div class="container">
      <div class="row">
        <!-- Left part start -->
        <div class="col-lg-8 col-xl-8">
          <!-- blog start -->
          <div class="recent-news blog-lg">
            <div class="action-box blog-lg">
              <img src="{{asset('storage/blogs/' .$blogs->blogs_image)}}" alt="image"
              height="700"
              width="438">
            </div>
            <div class="info-bx">
              <ul class="media-post">
                <li><a href="#"><i class="fa fa-calendar"></i>{{$blogs->created_at}}</a></li>
                <li><a href="#"><i class="fa fa-comments-o"></i>10 Comment</a></li>
              </ul>
              <h5 class="post-title"><a href="#">{{$blogs->blogs_title}}</a></h5>
              <p>{{$blogs->blogs_details}}</p>

              <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
            <!--  <div class="widget_tag_cloud">
                <h6>TAGS</h6>
                <div class="tagcloud">
                  <a href="#">Design</a>
                  <a href="#">User interface</a>
                  <a href="#">SEO</a>
                  <a href="#">WordPress</a>
                  <a href="#">Development</a>
                  <a href="#">Joomla</a>
                  <a href="#">Design</a>
                  <a href="#">User interface</a>
                  <a href="#">SEO</a>
                  <a href="#">WordPress</a>
                  <a href="#">Development</a>
                  <a href="#">Joomla</a>
                  <a href="#">Design</a>
                  <a href="#">User interface</a>
                  <a href="#">SEO</a>
                  <a href="#">WordPress</a>
                  <a href="#">Development</a>
                  <a href="#">Joomla</a>
                </div>
              </div>-->
              <!--<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                <h6>SHARE </h6>
                <ul class="list-inline contact-social-bx">
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>-->
            </div>
          </div>
          <div class="clear" id="comment-list">

          </div>
          <!-- blog END -->
        </div>
        <!-- Left part END -->
        <!-- Side bar start -->
        <div class="col-lg-4 col-xl-4">
          <aside  class="side-bar sticky-top">
            <div class="widget">
              <h6 class="widget-title">Search</h6>
              <div class="search-bx style-1">
                <form role="search" method="post">
                  <div class="input-group">
                    <input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
                    <span class="input-group-btn">
                      <button type="submit" class="fa fa-search text-primary"></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget recent-posts-entry">
              <h6 class="widget-title">Recent Posts</h6>
              <div class="widget-post-bx">
                @foreach($lts_blogs as $row)
                <div class="widget-post clearfix">
                  <div class="ttr-post-media"> <img src="{{asset('storage/blogs/' .$row->blogs_image)}}" width="200" height="143" alt=""> </div>
                  <div class="ttr-post-info">
                    <div class="ttr-post-header">
                      <h6 class="post-title"><a href="/blogs_details/{{$row->id}}">{{$row->blogs_title}}</a></h6>
                    </div>
                    <ul class="media-post">
                      <li><a href="#"><i class="fa fa-calendar"></i>{{$row->created_at}}</a></li>
                    
                    </ul>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
        <!--    <div class="widget widget-newslatter">
              <h6 class="widget-title">Newsletter</h6>
              <div class="news-box">
                <p>Enter your e-mail and subscribe to our newsletter.</p>
                <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                  <div class="ajax-message"></div>
                  <div class="input-group">
                    <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
                    <button name="submit" value="Submit" type="submit" class="btn black radius-no">
                      <i class="fa fa-paper-plane-o"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget widget_gallery gallery-grid-4">
              <h6 class="widget-title">Our Gallery</h6>
              <ul>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic2.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic1.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic5.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic7.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic8.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic9.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic3.jpg')}}" alt=""></a></div></li>
                <li><div><a href="#"><img src="{{ asset('images/gallery/pic4.jpg')}}" alt=""></a></div></li>
              </ul>
            </div>-->
          <!--  <div class="widget widget_tag_cloud">
              <h6 class="widget-title">Tags</h6>
              <div class="tagcloud">
                <a href="#">Design</a>
                <a href="#">User interface</a>
                <a href="#">SEO</a>
                <a href="#">WordPress</a>
                <a href="#">Development</a>
                <a href="#">Joomla</a>
                <a href="#">Design</a>
                <a href="#">User interface</a>
                <a href="#">SEO</a>
                <a href="#">WordPress</a>
                <a href="#">Development</a>
                <a href="#">Joomla</a>
                <a href="#">Design</a>
                <a href="#">User interface</a>
                <a href="#">SEO</a>
                <a href="#">WordPress</a>
                <a href="#">Development</a>
                <a href="#">Joomla</a>
              </div>
            </div>->>
          </aside>
        </div>
        <!-- Side bar END -->
      </div>
    </div>
  </div>
    </div>
</div>

<!-- Content END-->




@endsection
