@extends('page.layout.content')
@section('title','Học bổng')
@section('style')
<style>
  li.page-item.active span {
    height: 91% !important;
  }

  li.page-item.disabled span {
    height: 91% !important;
  }
</style>
@endSection
@section('content')

<main>
  <div class="main-section">
    <div class="container">
      <div class="main-section-data">
        <div class="row">
          <div class="col-lg-9">
            <div class="main-ws-sec">
              <div class="posts-section">
                @foreach($posts as $post)
                <div class="post-bar d-flex">
                  <div class="thubnail">
                    <a href="{{route('scholarship.detail',$post->id)}}"><img style="width: 310px; padding:5px 10px" src="{{asset('upload/scholarship/'.$post->image)}}" alt=""></a>
                  </div>
                  <div class="caption py-3 px-2">
                    <h2 style="margin-bottom: 10px;"><a style="font-size: 22px; color:black" href="{{route('scholarship.detail',$post->id)}}">{{$post->title}}</a></h2>
                    <p style="font-size: 15px;margin-top:5px;    margin-bottom: 15px;">{{$post->description}}</p>
                    <img style="width:40px; height:40px; border-radius:50%;margin-right: 13px;" src="http://localhost:8000/images/hr-avatar.jpg" alt="">
                    <ul class="like-com">
                      <li>{{$post->user->full_name}}</li>
                      <li>
                        <a style="position:relative; top:-6px" href="javascript:void(0)"><i class="la la-heart"></i>
                          {{$post->total_like}}
                        </a>
                      </li>
                      <li><a href="javascript:void(0)" title="" class="com"><img src="images/com.png" alt="">{{$post->total_coment}} bình luận</a></li>
                      <li><a href="javascript:void(0)" title="" class="com"><i class="fa fa-share-alt"></i>{{$post->total_share}} Chia sẻ</a></li>
                    </ul>
                    <div class="time float-right"><span style="color: #b2b2b2;font-size: 14px;">{{date('d/m/Y',strtotime($post->created_at))}}</span></div>
                  </div>
                </div>
                <!--post-bar end-->
                @endforeach

                {{$posts->links()}}

                <!--process-comm end-->
              </div>
              <!--posts-section end-->
            </div>
            <!--main-ws-sec end-->
          </div>
          <div class="col-lg-3">
            <div class="right-sidebar">
              <div class="widget widget-about">
                <img src="images/wd-logo.png" alt="">
                <h3>Track Time on Workwise</h3>
                <span>Pay only for the Hours worked</span>
                <div class="sign_link">
                  <h3><a href="#" title="">Sign up</a></h3>
                </div>
              </div>
              <!--widget-about end-->
              <div class="widget widget-jobs">
                <div class="sd-title">
                  <h3>Top Jobs</h3>
                  <i class="la la-ellipsis-v"></i>
                </div>
                <div class="jobs-list">
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior Product Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior UI / UX Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Junior Seo Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior PHP Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior Developer Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                </div>
                <!--jobs-list end-->
              </div>
              <!--widget-jobs end-->
              <div class="widget widget-jobs">
                <div class="sd-title">
                  <h3>Most Viewed This Week</h3>
                  <i class="la la-ellipsis-v"></i>
                </div>
                <div class="jobs-list">
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior Product Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Senior UI / UX Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                  <div class="job-info">
                    <div class="job-details">
                      <h3>Junior Seo Designer</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                    </div>
                    <div class="hr-rate">
                      <span>$25/hr</span>
                    </div>
                  </div>
                  <!--job-info end-->
                </div>
                <!--jobs-list end-->
              </div>
              <!--widget-jobs end-->
            </div>
            <!--right-sidebar end-->
          </div>
        </div>
      </div><!-- main-section-data end-->
    </div>
  </div>
</main>
@endSection