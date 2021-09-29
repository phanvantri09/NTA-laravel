@extends('pages.index')
@section('content')
<section class="blog-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="blog-single-main">
                    <div class="row">
                        <div class="col-12">
                            <div class="image">
                                <img src="{{ asset("/imgUploads/$book->imgBook")}}" alt="#">
                            </div>
                            <div class="share-social">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-tags">
                                            <h4>Action:</h4>
                                            <ul class="tag-inner">
                                                <li><a href="{{route('bookShop.addCard', [Auth::user()->id, $book->id])}}">Add To Card</a></li>
                                                <li><a href="#">Buy Now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-detail">
                                <h2 class="blog-title">Name Book : {{$book->nameBook}}</h2>
                                <div class="blog-meta">
                                    <span class="author">
                                        <a href="#">Amount: <b>{{$book->amountBook}}</b></a>
                                        <a href="#"><i class="fa fa-calendar"></i>{{$book->created_at}}</a>
                                        <a href="#"><i class="fa fa-comments"></i>Comment ()</a>
                                    </span>
                                </div>
                                <div class="content">
                                    {{$book->infoBook}}
                                </div>
                            </div>
                    
                        </div>
                        <div class="col-12">
                            <div class="comments">
                                <h3 class="comment-title">Comments ()</h3>
                                <!-- Single Comment -->
                                @foreach ($commentData as $comment)
                                <div class="single-comment">
                                    <img src="https://via.placeholder.com/80x80" alt="#">
                                    <div class="content">
                                        <h4>{{$comment->userName}} <span>At {{$comment->created_at}}</span></h4>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>									
                        </div>											
                        <div class="col-12">			
                            <div class="reply">
                                <div class="reply-head">
                                    <h2 class="reply-title">Leave a Comment</h2>
                                    <!-- Comment Form -->
                                    <form class="form" action="{{route('bookShop.postComment', $book->id)}}"  method="POST" enctype="multipart/form-data">
                                        @csrf @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Your comment<span>*</span></label>
                                                    <textarea name="content" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn">Post comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Comment Form -->
                                </div>
                            </div>			
                        </div>			
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search Here...">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Blog Categories</h3>
                        <ul class="categor-list">
                            <li><a href="#">Men's Apparel</a></li>
                            <li><a href="#">Women's Apparel</a></li>
                            <li><a href="#">Bags Collection</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sun Glasses</a></li>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="https://via.placeholder.com/100x100" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="https://via.placeholder.com/100x100" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="image">
                                <img src="https://via.placeholder.com/100x100" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget side-tags">
                        <h3 class="title">Tags</h3>
                        <ul class="tag">
                            <li><a href="#">business</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">html</a></li>
                            <li><a href="#">multipurpose</a></li>
                            <li><a href="#">education</a></li>
                            <li><a href="#">template</a></li>
                            <li><a href="#">Ecommerce</a></li>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget newsletter">
                        <h3 class="title">Newslatter</h3>
                        <div class="letter-inner">
                            <h4>Subscribe & get news <br> latest updates.</h4>
                            <div class="form-inner">
                                <input type="email" placeholder="Enter your email">
                                <a href="#">Submit</a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop