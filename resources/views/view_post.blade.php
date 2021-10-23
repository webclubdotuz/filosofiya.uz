@extends('layouts.master')
@section('title', $post->title)
@section('keywords', 'filosofiya, filosoflar, janaliqlar, aforizimler')
@section('description', $post->meta_description)
@section('main')
    {{-- @dd($post) --}}
    <section class="blog_area single-post-area">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src="{{$post->image ? asset('storage/'.$post->image) : asset('no-img.png')}}" alt="img post">
                    </div>
                    <div class="blog_details">
                       <h2>
                           {{$post->title}}
                       </h2>
                       <ul class="blog-info-link mt-3 mb-4">
                          {{-- <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                          <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                       </ul>
                       <p class="excert">
                          {!! $post->body !!}
                       </p>
                    </div>
                 </div>
                 <div class="navigation-top">
                    {{-- <div class="d-sm-flex justify-content-between text-center">
                       <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                          people like this</p>
                       <div class="col-sm-4 text-center my-2 my-sm-0">
                          <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                       </div>
                       <ul class="social-icons">
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fab fa-behance"></i></a></li>
                       </ul>
                    </div> --}}
                    <div class="navigation-area">
                       <div class="row">
                          <div
                             class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                             <div class="thumb">
                                <a href="#">
                                   <img class="img-fluid" src="{{asset('assets/img/post/preview.png')}}" alt="">
                                </a>
                             </div>
                             <div class="arrow">
                                <a href="#">
                                   <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                             </div>
                             <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                   <h4>Space The Final Frontier</h4>
                                </a>
                             </div>
                          </div>
                          <div
                             class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                             <div class="detials">
                                <p>Next Post</p>
                                <a href="#">
                                   <h4>Telescopes 101</h4>
                                </a>
                             </div>
                             <div class="arrow">
                                <a href="#">
                                   <span class="lnr text-white ti-arrow-right"></span>
                                </a>
                             </div>
                             <div class="thumb">
                                <a href="#">
                                   <img class="img-fluid" src="{{ asset('assets/img/post/next.png')}}" alt="">
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                       <form action="#">
                          <div class="form-group">
                             <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='IZLEW...'
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'IZLEW...'">
                                <div class="input-group-append">
                                   <button class="btns" type="button"><i class="ti-search"></i></button>
                                </div>
                             </div>
                          </div>
                          <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                             type="submit">Izlew</button>
                       </form>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                       <h4 class="widget_title">Kategoriya</h4>
                       <ul class="list cat-list">
                          @foreach ($categories as $category)
                          <li>
                             <a href="/category/{{ $category->slug }}" class="d-flex">
                                <p>{{$category->name}}</p>
                             </a>
                          </li>
                          @endforeach
                       </ul>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                       <h3 class="widget_title">Sońgı maqalalar</h3>
                       @foreach ($recents as $recent)
                       <div class="media post_item">
                          <img src="{{Voyager::image($recent->thumbnail('small')) ? asset('storage/'.$recent->image) : asset('no-img.png')}}" alt="post" height="45px" width="70px">
                          <div class="media-body">
                             <a href="/post/{{ $recent->id }}">
                                <h3>{{$recent->title}}</h3>
                             </a>
                             <p>{{ $recent->created_at->format('d-m-Y') }}</p>
                          </div>
                       </div>
                       @endforeach
                    </aside>
                    {{-- <aside class="single_sidebar_widget tag_cloud_widget">
                       <h4 class="widget_title">Tag Clouds</h4>
                       <ul class="list">
                          <li>
                             <a href="#">project</a>
                          </li>
                          <li>
                             <a href="#">love</a>
                          </li>
                          <li>
                             <a href="#">technology</a>
                          </li>
                          <li>
                             <a href="#">travel</a>
                          </li>
                          <li>
                             <a href="#">restaurant</a>
                          </li>
                          <li>
                             <a href="#">life style</a>
                          </li>
                          <li>
                             <a href="#">design</a>
                          </li>
                          <li>
                             <a href="#">illustration</a>
                          </li>
                       </ul>
                    </aside> --}}
                    {{-- <aside class="single_sidebar_widget instagram_feeds">
                       <h4 class="widget_title">Instagram Feeds</h4>
                       <ul class="instagram_row flex-wrap">
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_5.png') }}" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_6.png') }}" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_7.png') }}" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_8.png') }}" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_9.png') }}" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="#">
                                <img class="img-fluid" src="{{ asset('assets/img/post/post_10.png') }}" alt="">
                             </a>
                          </li>
                       </ul>
                    </aside> --}}
                    {{-- <aside class="single_sidebar_widget newsletter_widget">
                       <h4 class="widget_title">Newsletter</h4>
                       <form action="#">
                          <div class="form-group">
                             <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                          </div>
                          <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                             type="submit">Subscribe</button>
                       </form>
                    </aside> --}}
                 </div>
              </div>
           </div>
        </div>
     </section>
     
@endsection