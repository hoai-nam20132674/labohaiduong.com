
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
		<title>{{$product->title}}</title>
		<meta name="description" content="{{$product->seo_description}}">
		<meta name="keywords" content="{{$product->seo_keyword}}"/>		
		<link rel="canonical" href="{{$system->website}}/{{$product->url}}"/>
		<meta name='revisit-after' content='1 days' />
		<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
		<meta property="og:type" content="website">
		<meta property="og:title" content="{{$product->title}}">
		<meta property="og:image" content="{{asset('uploads/images/products/avata'.$product->avata)}}">
		<meta property="og:description" content="{{$product->seo_description}}">
		<meta property="og:url" content="{{$system->website}}/{{$product->url}}">
		<meta property="og:site_name" content="{{$product->name}}">
		<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
		<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
		<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		
		<link href="{{asset('css/evo-dich-vu.scss.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/evo-blogs.scss.css')}}" rel="stylesheet" type="text/css" />
		
		<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
		
		<script src="{{asset('js/option-selectors.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/api.jquery.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/slick.js')}}" type="text/javascript"></script>
		
		<script src="{{asset('js/flickity.js')}}" type="text/javascript"></script>
		
		

<script>
	(function () {
		function asyncLoad() {
			var urls = [];
			for (var i = 0; i < urls.length; i++) {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = urls[i];
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		};
		window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
	})();
</script>


	</head>
	<body class="bg-body product-dich-vu">
		@if( Session::has('flash_message'))
			<p style="display: none;" class="contact-success">{{ Session::get('flash_message')}}</p>
		@endif	
		<div class="evo-search-bar">
			<form action="/search" method="get">
				<div class="input-group">
					<input type="text" name="query" class="search-auto form-control" placeholder="Bạn cần tìm gì hôm nay?" />
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			<button class="site-header__search" title="Đóng tìm kiếm"><svg xmlns="http://www.w3.org/2000/svg" width="26.045" height="26.044"><g data-name="Group 470"><path d="M19.736 17.918l-4.896-4.896 4.896-4.896a1.242 1.242 0 0 0-.202-1.616 1.242 1.242 0 0 0-1.615-.202l-4.896 4.896L8.127 6.31a1.242 1.242 0 0 0-1.615.202 1.242 1.242 0 0 0-.202 1.615l4.895 4.896-4.896 4.896a1.242 1.242 0 0 0 .202 1.615 1.242 1.242 0 0 0 1.616.202l4.896-4.896 4.896 4.896a1.242 1.242 0 0 0 1.615-.202 1.242 1.242 0 0 0 .202-1.615z" data-name="Path 224" fill="#1c1c1c"></path></g></svg></button>
		</div>
		@include('front-end.layout.header')
		
		
			
		
		<section class="bread-crumb margin-bottom-10">
			<div class="container">
				<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
					<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="/" title="Trang chủ">
							<span itemprop="name">Trang chủ</span>
							<meta itemprop="position" content="1" />
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="" title="Dịch vụ Spa">
							<span itemprop="name">Khách hàng</span>
							<meta itemprop="position" content="2" />
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<span itemprop="name">{{$product->name}}</span>
						<meta itemprop="position" content="3" />
					</li>
					
				</ul>
			</div>
		</section>

		<div id="product" class="productDetail-page product-dich-vu" itemscope itemtype="http://schema.org/Product">
			
			<div class="container">
				<div class="row product-detail-wrapper">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row product-detail-main pr_style_01">
							<div class="col-md-7 col-sm-12 col-xs-12">
								
								
								<div class="product-gallery">
									<div class="product-gallery__thumbs-container hidden-sm hidden-xs">
										<div class="product-gallery__thumbs thumb-fix">
											
											<div class="product-gallery__thumb active"  data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}">
												<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-zoom-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}">
													<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
												</a>
											</div>
											@foreach($images as $image)
											<div class="product-gallery__thumb "  data-image="{{asset('uploads/images/products/details/'.$image->url)}}">
												<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="{{asset('uploads/images/products/details/'.$image->url)}}" data-zoom-image="{{asset('uploads/images/products/details/'.$image->url)}}">
													<img src="{{asset('uploads/images/products/details/'.$image->url)}}" data-image="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
												</a>
											</div>
											@endforeach
											
											
										</div>
									</div> 
									<div class="product-image-detail box__product-gallery scroll">
										<ul id="sliderproduct" class="site-box-content slide_product">
											
											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature img-responsive center-block" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
											</li>	
											@foreach($images as $image)
											<li class="product-gallery-item gallery-item">
												<img class="product-image-feature img-responsive center-block" src="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
											</li>	
											@endforeach
											
											
										</ul>
										<div class="product-image__button">
											<div id="product-zoom-in" class="product-zoom icon-pr-fix " aria-label="Zoom in" title="Click chuột để phóng to">
												<span class="zoom-in" aria-hidden="true">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve"><polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 "/><polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 "/><polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 "/><polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 "/> </svg>
												</span>
											</div>		
										</div>
									</div>
								</div>							
								
								
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12 product-content-desc details-pro" id="detail-product">
								<div class="product-title">
									<h1 class="title-head">{{$product->title}}</h1>
								</div>
								<div class="product-description">
									
									<div class="description-content">
										
										
										{!!$product->content!!}
										
									</div>
									<div class="contact" style="border: 1px solid #cca900; border-radius: 5px; padding: 10px;">
										<div>
											<p><i class="fa fa-hand-o-right" style="color: green;"></i> Quý khách quan tâm đến dịch vụ mà khách hàng sử dụng tại Dental Plus có thể liên hệ số điện thoại bên dưới để được tư vấn trực tiếp hoặc click <span class="badge badge-warning" style="background: #dcb048;">đăng ký tư vấn</span> và để lại thông tin trong form đăng ký. Đội ngũ y bác sỹ của Dental Plus sẽ liên hệ ngay cho quý khách</p>
										</div>
										<div class="row-flex" >
										
										
											<br>
											<a class="service_button" style="font-weight: 800;" href="tel:{{$system->phone}}" title="Liên hệ {{$system->phone}}"><i class="fa fa-phone-square"></i> Liên hệ {{$system->phone}}</a>
											
											<button class="service_button" style="font-weight: 800;" type="button" data-toggle="modal" data-target="#myModalCall">
												Đăng ký tư vấn
											</button>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>					
					
					
					
					
										
					
					<div class="list-productRelated clearfix evo-list-blog-page">
						<div class="heading-title text-center">
							<h2>THÊM KHÁCH HÀNG</h2>
						</div>
						<div class="evo-owl-product clearfix ">
													
							<div class="evo-slick">
								 
								<div class="evo-product-block-item product.dich-vu evo-list-blogs">
									@foreach($products as $pr)
									<article class="col-md-12 col-sm-12 col-xs-12 blog-item">
										<a href="/{{$pr->url}}" title="{{$pr->title}}" class="clearfix">
											<div class="evo-article-image">
												
												<img src="{{asset('uploads/images/products/avatas/'.$pr->avata)}}" data-src="{{asset('uploads/images/products/avatas/'.$pr->avata)}}" alt="{{$pr->title}}" class="lazy img-responsive center-block" />
												
											</div>
											<h3 class="line-clamp">{{$pr->title}}</h3>
											<p>{!! \Illuminate\Support\Str::words($pr->content, 10,'...')  !!}</p>
										</a>
									</article>
									@endforeach
								</div>
							</div>
							
							
							
							
						</div>	
					</div>
					
					
				</div>
			</div>
		</div>



		<div id="divzoom">
			<div class="divzoom_main">
				
				<div class="product-thumb text-center">
						<img class="product-image-feature" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
					</div>
					@foreach($images as $image)
					<div class="product-thumb text-center">
						<img class="product-image-feature" src="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
					</div>
					@endforeach
				
			</div>
			<div id="positionButtonDiv" class="hidden">
				<p> 
					<span>
						<button type="button" class="buttonZoomIn"><i></i></button>
						<button type="button" class="buttonZoomOut"><i></i></button>			
					</span>
				</p>
			</div>
			<button id="closedivZoom"><i></i></button>
		</div>
		<script>
			$(document).ready(function(){
				$('.evo-owl-product').slick({
					dots: false,
					infinite: false,
					speed: 300,
					slidesToShow: 4,
					slidesToScroll: 4,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 4,
								slidesToScroll: 4
							}
						},
						{
							breakpoint: 991,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 767,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2,
								dots: true
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2,
								dots: true
							}
						}
					]
				});
			});
			$(document).on("click","#product-zoom-in",function(){
				$("body").addClass("open_layer");
				$("#divzoom").css({'opcaity':0,'visibility':'hidden'}).show();
				$('.divzoom_main').flickity({
					resize:true,
					draggable: true,
				});
				if($(window).width() > 768){
					var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
				}
				else{
					var ncurrent = parseInt($(".product-gallery-item.is-selected").index());
				}
				$('.divzoom_main').flickity('select',ncurrent);
				setTimeout(function(){$("#divzoom").css({'opcaity': 1,'visibility':'visible'})},50);
			});
			$(document).on('click','#closedivZoom', function(event) {
				$("#divzoom").hide();
				$("body").removeClass("open_layer");
				$('.divzoom_main').flickity('select',0);
			});
		</script>
		<script>
			$(".product-gallery__thumb img").click(function(){
				$(".product-gallery__thumb").removeClass('active');
				$(this).parents('.product-gallery__thumb').addClass('active');
				var img_thumb = $(this).data('image');
				$('html, body').animate({
					scrollTop: $("#sliderproduct img[src='"+img_thumb+"']").offset().top
				}, 1000);
			});
			$(".product-gallery__thumb").first().addClass('active');
		</script>
		<div class="callmeback-form modal fade" id="myModalCall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" style="font-weight: 800;" id="myModalLabel">ĐĂNG KÝ TƯ VẤN DỊCH VỤ</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<img src="{{asset('uploads/images/systems/contact.png')}}" width="100%">
							</div>
							<div class="col-md-6 col-sm-12">
								<form accept-charset="utf-8" action="{{URL::route('addContact')}}" id="contact" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token()}}">
									<div class="form-signup clearfix">
										<div class="row">
											<div class="col-xs-12">
												<fieldset class="form-group">
													<label>Họ tên *</label>
													<input placeholder="Nguyễn Văn A" type="text" name="name" id="name" class="form-control" data-validation-error-msg= "Không được để trống" data-validation="required" required />
													
												</fieldset>
											</div>
											<div class="col-xs-12">
												<fieldset class="form-group">
													<label>Số điện thoại *</label>
													<input placeholder="0989xxxxxx" type="text" name="phone" id="phone" class="form-control number-sidebar" data-validation-error-msg= "Không được để trống" data-validation="required" required />
												</fieldset>
											</div>
											<div class="col-xs-12">
												<fieldset class="form-group">
													<label>Email</label>
													<input placeholder="email@gmail.com" type="email" name="email" id="email" class="form-control" />
												</fieldset>
											</div>
											<div class="col-xs-12">
												<fieldset class="form-group">
													<label>Lời nhắn</label>
													<textarea placeholder="Nội dung" name="message" id="comment" class="form-control" rows="3" data-validation-error-msg= "Không được để trống" ></textarea>
												</fieldset>
												<div class="pull-xs-right text-center" style="margin-top:10px;">
													<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi thông tin</button>
												</div> 
											</div>
										</div>
									</div>
								<footer class="notification-box margin-top-10"></footer>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		

		@include('front-end.layout.footer')
		<div class="backdrop__body-backdrop___1rvky"></div>
		<script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="{{asset('js/jquery.form-validator.min.js')}}" type="text/javascript"></script>
		<script>$.validate({});</script>	
		<div class="ajax-load"> 
			<span class="loading-icon">
				<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					</rect>
				</svg>
			</span>
		</div>
		<div class="loading awe-popup">
			<div class="overlay"></div>
			<div class="loader" title="2">
				<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
					<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					</rect>
					<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
						<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
						<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					</rect>
				</svg>
			</div>
		</div>

		<div id="myModal" class="modal fade" role="dialog"></div>
		<script src="{{asset('js/intersection-observer.js')}}"></script>
		<script src="{{asset('js/lazyload.min.js')}}"></script>
		<script src="{{asset('js/cs.script.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/main.js')}}" type="text/javascript"></script>				
		<script src="{{asset('js/sweetalert.min.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				var alert = $(".contact-success").length;
				if(alert != 0){
					swal({
					  title: "Gửi yêu cầu thành công",
					  text: "Chúng tôi sẽ liên hệ với quý sách trong thời gian sớm nhất",
					  icon: "success",
					  button: "OK",
					});
					
					
				}
			});
		</script>				
	</body>
</html>