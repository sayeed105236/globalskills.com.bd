<div class="section-area section-sp2 popular-courses-bx">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Mock<span>Test</span></h2>
            </div>
        </div>
        <div class="row">
        <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">

            @php
                $mockTest = App\Models\mockTestCategory::all();
            @endphp
            @foreach ($mockTest as $mock)
            <div class="item">
                <div class="cours-bx">
                    <div class="action-box">
                        <img src="{{ asset($mock->image) }}" alt="" style="height: 180px; width: 250px;"/>
                        <?php
                        $enrolled= App\Models\UserEnrollment::where('user_id',Auth::id())->where('mocktest_id',$mock->id)->first();

                         ?>
                      @if(!$enrolled)
                      <form class="hidden" action="{{route('add-carts')}}" method="post">
                        @csrf
                        <input type="hidden" name="mocktest_id" value="{{$mock->id}}">

                        <button  class="btn"><i class="fa fa-shopping-cart"></i></button>
                      </form>
                      @else
                        <a href="/mocktest/topics/view/{{$mock->id}}" class="btn"><i class="fa fa-eye"></i></a>
                      @endif

                    </div>
                    <div class="info-bx text-center">

                        <h5><a href="/home/mock_details/{{ $mock->id }}">{{Str::limit($mock->mock_category,18)}}</a></h5>
                        <span>Mock Test Course</span>
                    </div>
                    <div class="cours-more-info">
                        <div class="review">
                            <del style="color: #CD3239">{{ $mock->regular_price }}৳</del>
                        </div>
                        <div class="price">

                            <h5 style="color:#CD3239">{{ $mock->discount_price }}৳</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
