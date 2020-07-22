@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$blog_cate->title}}</title>
	<meta name="description" content="{{$blog_cate->seo_description}}">
	<meta name="keywords" content="{{$blog_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$blog_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$blog_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/blogs/categories/'.$blog_cate->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/blogs/categories/'.$blog_cate->avata)}}">
	<meta property="og:description" content="{{$blog_cate->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$blog_cate->url}}">
	<meta property="og:site_name" content="{{$blog_cate->name}}">
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
@endsection
@section('body_class')
bg-body blog
@endsection
@section('content')
	<section class="bread-crumb margin-bottom-10">
		<div class="container">
			<ul class="breadcrumb" itemscope itemtype="">						
				<li class="home" itemprop="itemListElement" itemscope itemtype="">
					<a itemprop="item" href="/" title="Trang chủ">
						<span itemprop="name"><i class="fa fa-home"></i> Trang chủ</span>
						<meta itemprop="position" content="1" />
					</a>
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				
				
				<li itemprop="itemListElement" itemscope itemtype="">
					<span itemprop="name">{{$blog_cate->name}}</span>
					<meta itemprop="position" content="3" />
				</li>
				
			</ul>
		</div>
	</section>
	<div class="container margin-top-20" itemscope itemtype="http://schema.org/Blog">
		
		<div class="row">
			<div class="col-md-12 evo-list-blog-page">	
				<h1 class="title-head">{{$blog_cate->name}}</h1>
				
				
				<section class="evo-list-blogs row">
					@foreach($blogs as $blog)
						@include('front-end.layout.blog-box')
					@endforeach
					
					
					<div class="col-md-12 col-sm-12 col-xs-12"><div class="text-xs-right text-center pagging-css"><nav class="text-center">
		<ul class="pagination clearfix">
			  
			<li class="page-item disabled"><a class="page-link" href="#"><svg viewBox="0 0 100 100" data-radium="true" style="width: 14px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-645.000000, -879.000000)" fill="#000"><path d="M743.998989,926.504303 L697.512507,880.032702 C696.909905,879.430293 695.962958,879 695.016011,879 C694.069064,879 693.122117,879.430293 692.519515,880.032702 L646.033033,926.504303 C644.655656,927.881239 644.655656,930.118761 646.033033,931.495697 C646.721722,932.184165 647.582582,932.528399 648.529529,932.528399 C649.476476,932.528399 650.337337,932.184165 651.026025,931.495697 L691.486482,891.048193 L691.486482,975.471601 C691.486482,977.450947 693.036031,979 695.016011,979 C696.995991,979 698.54554,977.450947 698.54554,975.471601 L698.54554,891.048193 L739.005997,931.495697 C740.383374,932.872633 742.621612,932.872633 743.998989,931.495697 C745.376366,930.118761 745.29028,927.881239 743.998989,926.504303 L743.998989,926.504303 Z" transform="translate(695.000000, 929.000000) rotate(-90.000000) translate(-695.000000, -929.000000) "></path></g></g></svg></a></li>
			

			
			
			
			<li class="active page-item disabled"><a class="page-link" href="#" title="1">1</a></li>
			
			
			
			
			<li class="page-item"><a class="page-link" href="/tin-tuc?page=2" title="2">2</a></li>
			
			

			
			<li class="page-item"><a class="page-link" href="/tin-tuc?page=2"><svg viewBox="0 0 100 100" data-radium="true" style="width: 14px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-463.000000, -879.000000)" fill="#000"><path d="M561.998989,926.504303 L515.512507,880.032702 C514.909905,879.430293 513.962958,879 513.016011,879 C512.069064,879 511.122117,879.430293 510.519515,880.032702 L464.033033,926.504303 C462.655656,927.881239 462.655656,930.118761 464.033033,931.495697 C464.721722,932.184165 465.582582,932.528399 466.529529,932.528399 C467.476476,932.528399 468.337337,932.184165 469.026025,931.495697 L509.486482,891.048193 L509.486482,975.471601 C509.486482,977.450947 511.036031,979 513.016011,979 C514.995991,979 516.54554,977.450947 516.54554,975.471601 L516.54554,891.048193 L557.005997,931.495697 C558.383374,932.872633 560.621612,932.872633 561.998989,931.495697 C563.376366,930.118761 563.29028,927.881239 561.998989,926.504303 L561.998989,926.504303 Z" id="up-arrow-copy-2" transform="translate(513.000000, 929.000000) rotate(-270.000000) translate(-513.000000, -929.000000) "></path></g></g></svg></a></li>
			
		</ul>
	</nav></div></div>
				</section>
				
				
			</div>
			
			
			
		</div>
	</div>
@endsection