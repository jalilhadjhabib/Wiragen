@extends('frontEnd.layouts.master')
@section('title','List Products')
@section('slider')
@endsection
@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
    <section>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-4">
                                        @include('frontEnd.layouts.category_menu')

                </div>
                <!--<div class="col-sm-8">
                    <div class="pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"  style="font-size: 20px;color: black;font-weight: bold;"><i class="fa fa-shopping-cart"></i>Panier</a>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}" style="font-size: 20px;color: black;font-weight: bold;"><i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/logout') }}" style="font-size: 20px;color: black;font-weight: bold;"><i class="fa fa-lock"></i>Se déconnecter</a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}" style="font-size: 20px;color: black;font-weight: bold;"><i class="fa fa-lock"></i>Se connecter</a></li>
                            @endif
                        </ul>
                    </div>
                </div>-->

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">Category '.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">List Products</h2>';
                            }
                    ?>
                    @foreach($products as $product)
                        @if($product->category->status==1)
                            <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">Voir le produit</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @endif
                    @endforeach
                    {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection