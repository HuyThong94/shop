@extends('layout')
@section('content')
<div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Buttons</a></li>
                            <li><a href="#">Dividers</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{URL::to('san-pham')}}"><img src="public/frontend/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"><a href="{{URL::to('san-pham')}}">Sample Woman Top</a></p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{URL::to('san-pham')}}"> Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{URL::to('san-pham')}}"><img src="public/frontend/images/products/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{URL::to('san-pham')}}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space40">&nbsp;</div>

                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div>
@endsection
