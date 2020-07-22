@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$product_cate->title}}</title>
	<meta name="description" content="{{$product_cate->seo_description}}">
	<meta name="keywords" content="{{$product_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$product_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$product_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/products/categories/'.$product_cate->avata)}}">
	<meta property="og:description" content="{{$product_cate->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$product_cate->url}}">
	<meta property="og:site_name" content="{{$product_cate->name}}">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	
	<link href="{{asset('css/evo-blogs.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-collections.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-products.scss.css')}}" rel="stylesheet" type="text/css" />
	
@endsection
@section('body_class')
bg-body collection
@endsection
@section('content')
	<div class="container margin-top-20">
		<div class="row">
			<section class="main_container collection col-md-9" >
				<h1 class="col-title">{{$product_cate->name}}</h1>
				<div class="evo-list-blog-page products category-products-grids">
						
					
					
					<section class="evo-list-blogs section_dich_vu row" style="background: #fff">
		
						@foreach($products as $product)
							
							<article class="col-md-4 col-sm-6 col-xs-12 blog-item">
								<a href="/{{$product->url}}" title="{{$product->title}}" class="clearfix">
									<div class="evo-article-image">
										
										<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" class="lazy img-responsive center-block" />
										
									</div>
									<h3 class="line-clamp">{{$product->title}}</h3>
									<p>{!! \Illuminate\Support\Str::words($product->content, 10,'...')  !!}</p>
								</a>
							</article>
						@endforeach

						
						
						<div class="clearfix"></div>
						<div class="text-xs-right">
							
						</div>
					</section>	
					
					
				</div>
			</section>
			@include('front-end.layout.sidebar')
			<div id="open-filters" class="open-filters hidden-lg hidden-md">
				<i class="fa fa-filter" aria-hidden="true"></i>
			</div>
		</div>
	</div>
@endsection