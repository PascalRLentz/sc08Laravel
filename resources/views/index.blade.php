@extends('layouts.app')

@section('content')
<div class="container news">
    <div class="row news-header">
        <div class="col-12">
            <h3>Melde dich jetzt an um ein Teil von uns zu werden!</h3>
        </div>
    </div>
    <hr>
    <div class="news-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                </p>
            </div>
        </div>
        <div class="row min-vh-100 align-items-center">
            <div class="col-12" id="slider">
                <div id="myCarousel" class="carousel slide shadow">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active carousel-item" data-slide-number="0">
                            <img src="http://placehold.it/1200x480&amp;text=one" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="1">
                            <img src="http://placehold.it/1200x480/888/FFF" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="2">
                            <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="3">
                            <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="4">
                            <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="5">
                            <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="6">
                            <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="7">
                            <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="8">
                            <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                        </div>
                        <div class="carousel-item" data-slide-number="9">
                            <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                    <!-- main slider carousel nav controls -->


                    <ul class="carousel-indicators list-inline mx-auto border px-2">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=one" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=two" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row news-footer">
        <div class="col-12">
            <p class="text-right small">Datum: 22.10.2020 - Uhrzeit: 10:44</p>
        </div>
    </div>
</div>
@endsection
