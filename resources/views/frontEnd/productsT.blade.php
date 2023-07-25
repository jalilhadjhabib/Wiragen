@extends('frontEnd.layouts.master')
@section('title','Produits')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-4">
                                        @include('frontEnd.layouts.category_menu')

                </div>
               <!-- <div class="col-sm-8">
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
            </div>

                <div class="padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">PRODUITS</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart" style="font-size:20px;background-color: pink;">Voir le produit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection