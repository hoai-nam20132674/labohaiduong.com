<footer class="footer bg-footer">
	<div class="site-footer">	
		<img class="footer-wave" src="{{asset('uploads/images/systems/bg-waves.png')}}" alt="" />
		<div class="container">			
			<div class="footer-inner padding-bottom-20">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget footer-contact">
							<h3>Dental Plus</h3>
							<ul class="list-menu">
								
								<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$system->address}}</li>
								<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$system->phone}}" title="{{$system->phone}}">{{$system->phone}}</a></li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="{{$system->email}}" title="{{$system->email}}">{{$system->email}}</a></li>
								
							</ul>
							<ul class="footer-social">
								
								<li>
									<a href="{{$system->zalo}}" title="Theo dõi Twitter " target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</li>
								
								
								<li>
									<a href="{{$system->facebook}}" title="Theo dõi Facebook " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</li>
								
								
								<li>
									<a href="{{$system->instagram}}" title="Theo dõi Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								</li>
								
								
								<li>
									<a href="{{$system->youtube}}" title="Theo dõi Youtube " target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget had-click">
							<h3>Về chúng tôi <span class="Collapsible__Plus"></span></h3>
							<ul class="list-menu has-click">
								@php
							        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
							    @endphp
								@foreach($menus as $menu)
									<li><a href="/{{$menu->url}}" title="{{$menu->title}}" rel="nofollow">{{$menu->title}}</a></li>
								@endforeach
								
								
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget had-click">
							<h3>Khách hàng tại DentalPlus <span class="Collapsible__Plus"></span></h3>
							<ul class="row evo-tabs" role="tablist">
								@php
							        $products = App\Product::where('hot',1)->take(6)->get();
							    @endphp
								
								@foreach($products as $product)
									
									<li class="col-md-4 col-sm-3 col-xs-4 nav-item">
									
										<a href="" data-toggle="tab">
											
											<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" class="lazy img-responsive center-block" />
											
										</a>
									</li>
									
								@endforeach
								
								
								
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget had-click">
							<h3>Tin tức mới <span class="Collapsible__Plus"></span></h3>

							<ul class="evo-tabs" role="tablist">
								@php
							        $blogs = App\Blog::where('display',1)->take(6)->get();
							    @endphp
								@foreach($blogs as $blog)
									
									<li class=" nav-item">
									
										<a href="/{{$blog->url}}" style="color: #fff;" data-toggle="tab" title="{{$blog->title}}"><i class="fa fa-angle-double-right"></i> {{$blog->title}}
											
											<!-- <img src="{{asset('uploads/images/blogs/'.$blog->avata)}}" data-src="{{asset('uploads/images/blogs/'.$blog->avata)}}" alt="{{$blog->title}}" class="lazy img-responsive center-block" /> -->
											
										</a>
									</li>
									
								@endforeach
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="copyright clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<span>© Bản quyền thuộc về <b>Dental Plus</b> <span class="s480-f">|</span> Cung cấp bởi<a href="" title="Dental plus" target="_blank" rel="nofollow"> Espic</a></span>
					
				</div>
			</div>
			
			<div class="back-to-top" title="Lên đầu trang"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
			
		</div>
	</div>
</footer> 