@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$blog->title}}</title>
	<meta name="description" content="{{$blog->seo_description}}">
	<meta name="keywords" content="{{$blog->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$blog->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$blog->title}}">
	<meta property="og:image" content="{{asset('uploads/images/blogs/'.$blog->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/blogs/'.$blog->avata)}}">
	<meta property="og:description" content="{{$blog->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$blog->url}}">
	<meta property="og:site_name" content="{{$blog->name}}">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	
	
	<link href="{{asset('css/evo-article.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-collections.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-products.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('body_class')
bg-body article
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
					<span itemprop="name">{{$blog->name}}</span>
					<meta itemprop="position" content="3" />
				</li>
				
			</ul>
		</div>
	</section>
	<div class="container margin-top-20" itemscope itemtype="http://schema.org/Blog">
		
		<div class="row">
			<section class="main_container collection col-md-9  evo-article" >
				<h1 class="col-title">{{$blog->name}}</h1>
				@php
			        $user = App\User::where('id',$blog->user_id)->get()->first();
			    @endphp
				<div class="postby"><svg viewBox="0 0 101 95" data-radium="true" style="width: 16px; height: 16px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-570.000000, -1905.000000)" fill="rgba(0, 0, 0, .6)"><path d="M620.585796,1958.31466 C635.364122,1958.31466 647.350985,1946.35776 647.350985,1931.61638 C647.350985,1916.875 635.364122,1905 620.585796,1905 C605.807471,1905 593.820608,1916.9569 593.820608,1931.61638 C593.820608,1946.27586 605.807471,1958.31466 620.585796,1958.31466 L620.585796,1958.31466 Z M620.585796,1911.96121 C631.423235,1911.96121 640.29023,1920.80603 640.29023,1931.61638 C640.29023,1942.42672 631.423235,1951.27155 620.585796,1951.27155 C609.748358,1951.27155 600.881363,1942.42672 600.881363,1931.61638 C600.881363,1920.80603 609.748358,1911.96121 620.585796,1911.96121 Z M574.280378,2000 L574.280378,2000 C572.309934,2000 570.75,1998.44397 570.75,1996.47845 C570.75,1977.96983 585.856732,1962.98276 604.329639,1962.98276 L637.170361,1962.98276 C655.725369,1962.98276 670.75,1978.05172 670.75,1996.47845 C670.75,1998.44397 669.190066,2000 667.219622,2000 L574.280378,2000 Z M604.329639,1970.02586 C590.864943,1970.02586 579.781199,1980.09914 578.057061,1992.9569 L663.442939,1992.9569 C661.718801,1980.01724 650.635057,1970.02586 637.170361,1970.02586 L604.329639,1970.02586 Z" id="profile"></path></g></g></svg> Tác giả: <b>{{$user->name}}</b> <svg viewBox="0 0 101 100" data-radium="true" style="width: 16px; height: 16px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-295.000000, -1086.000000)" fill="rgba(0, 0, 0, .6)"><path d="M395.5,1136 C395.5,1108.36615 373.047496,1086 345.5,1086 C317.952504,1086 295.5,1108.36615 295.5,1136 C295.5,1163.5475 317.866149,1186 345.5,1186 C373.133851,1186 395.5,1163.5475 395.5,1136 Z M388.505181,1136 C388.505181,1159.74784 369.247841,1179.00518 345.5,1179.00518 C321.752159,1179.00518 302.494819,1159.66149 302.494819,1136 C302.494819,1112.25216 321.752159,1092.99482 345.5,1092.99482 C369.247841,1092.99482 388.505181,1112.25216 388.505181,1136 Z M359.83506,1141.87219 C361.821244,1141.87219 363.375648,1140.31779 363.375648,1138.33161 C363.375648,1136.34542 361.821244,1134.79102 359.83506,1134.79102 L346.708981,1134.79102 L346.708981,1114.23834 C346.708981,1112.25216 345.154577,1110.69775 343.168394,1110.69775 C341.182211,1110.69775 339.627807,1112.25216 339.627807,1114.23834 L339.627807,1138.33161 C339.627807,1140.31779 341.182211,1141.87219 343.168394,1141.87219 L359.83506,1141.87219 Z"></path></g></g></svg> Ngày đăng: {{$blog->created_at}}</div>
				<div class="content" style="padding-top: 20px;">
					{!!$blog->content!!}
				</div>

			</section>
			@include('front-end.layout.sidebar')
			
			
			
		</div>
	</div>
@endsection