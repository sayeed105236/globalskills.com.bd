<div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
      <!-- Header Logo ==== -->
      <div class="menu-logo">
        <a href="{{route('home')}}"><img src="{{ asset('images/only logo.png')}}" alt=""></a>
      </div>
      <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- Author Nav ==== -->
                <div class="secondary-menu">
                    <div class="secondary-inner">
                        <ul>
                          <i class="fas fa-cart-plus"></i>
                <li><a href="{{route('carts')}}" class="btn-link"><i class="fa fa-cart-plus"></i></a></li>
            <li><a href="https://www.facebook.com/globalskillsbd" class="btn-link"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/gsdabd?lang=en" class="btn-link"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/company/globalskillsbd" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
            <!-- Search Button ==== -->
            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
          </ul>
        </div>
                </div>
      <!-- Search Box ==== -->
                <div class="nav-search-bar">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span><i class="ti-search"></i></span>
                    </form>
        <span id="search-remove"><i class="ti-close"></i></span>
                </div>
      <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
        <div class="menu-logo">
          <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
        </div>
                    <ul class="nav navbar-nav">
          <li class="active"><a href="{{route('home')}}">Home</a>

          </li>
          <li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
              <li><a href="{{route('about')}}">About</a>

              </li>
              <li><a href="javascript:;">Event<i class="fa fa-angle-right"></i></a>
                <ul class="sub-menu">
                  <li><a href="{{route('event')}}">Event</a></li>
                  <li><a href="{{route('event_details')}}">Events Details</a></li>
                </ul>
              </li>
              <li><a href="{{route('faq')}}">FAQ's</a>

              </li>
              <li><a href="{{route('contact')}}">Contact Us</a>

              </li>

              <li><a href="{{route('error')}}">404 Page</a></li>
            </ul>
          </li>
          <li class="add-mega-menu"><a href="javascript:;">Our Courses <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu add-menu">
              <li class="add-menu-left">
                <h5 class="menu-adv-title">Our Courses</h5>
                <ul>
                  <li><a href="{{route('courses')}}">Courses </a></li>
                  <li><a href="{{route('course_details')}}">Courses Details</a></li>
                  <li><a href="{{route('user_profile')}}">User Profile</a></li>

                </ul>
              </li>
              <li class="add-menu-right">
                <img src="{{ asset('images/adv/adv.jpg')}}" alt=""/>
              </li>
            </ul>
          </li>
          <li><a href="javascript:;">Blogs <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">

              <li><a href="{{route('blogs')}}">Blogs</a></li>
              <li><a href="{{route('blogs_details')}}">Blog Details</a></li>
            </ul>
          </li>
          <li class="nav-dashboard"><a href="javascript:;">Dashboard <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
              <li><a href="admin/index.html">Dashboard</a></li>
              <li><a href="admin/add-listing.html">Add Listing</a></li>
              <li><a href="admin/bookmark.html">Bookmark</a></li>
              <li><a href="admin/courses.html">Courses</a></li>
              <li><a href="admin/review.html">Review</a></li>
              <li><a href="admin/teacher-profile.html">Teacher Profile</a></li>
              <li><a href="admin/user-profile.html">User Profile</a></li>
              <li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
                <ul class="sub-menu">
                  <li><a href="admin/basic-calendar.html">Basic Calendar</a></li>
                  <li><a href="admin/list-view-calendar.html">List View Calendar</a></li>
                </ul>
              </li>
              <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
                <ul class="sub-menu">
                  <li><a href="admin/mailbox.html">Mailbox</a></li>
                  <li><a href="admin/mailbox-compose.html">Compose</a></li>
                  <li><a href="admin/mailbox-read.html">Mail Read</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <div class="nav-social-link">
          <a href="javascript:;"><i class="fa fa-facebook"></i></a>
          <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
          <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
        </div>
                </div>
      <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
