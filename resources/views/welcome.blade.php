@extends('layouts.master')

@section('title', 'Filosofiya.UZ - Bas bet')
@section('keywords', 'filosofiya, filosoflar, janaliqlar, aforizimler')

@section('main')
<div class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Filosoflar</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        {{-- @dd($filosoflars) --}}
                        @foreach ($filosoflars as $filosoflar)
                        <div class="weekly-single">
                            <div class="weekly-img">
                                <img src="{{$filosoflar->image ? asset('storage/'.$filosoflar->image) : asset('no-img.png')}}" alt="" width="270px" height="195px">
                            </div>
                            <div class="weekly-caption">
                                <span class="color1">FILOSOFLAR</span>
                                <h4><a href="/post/{{ $filosoflar->id }}">{{$filosoflar->title}}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>JAŃALÍQLAR</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        {{-- <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($news as $new)
                            <div class="col-lg-3">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{$new->image ? asset('storage/'.$new->image) : asset('no-img.png')}}" alt="News post" width="250px" height="195px">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        {{-- <span class="color1">Lifestyple</span> --}}
                                        <h4><a href="/post/{{ $new->id }}">{{$new->title}}</a></h4>
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection