<header class="header">
	<div class="evo-top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-3 slogan text-center">
					<p>
						Nha khoa thẩm mỹ đẳng cấp quốc tế hàng đầu tại Việt Nam
					</p>
				</div>
				<div class="col-md-3 col-md-pull-6 logo hidden-sm hidden-xs">
					<a href="/" class="logo-wrapper" title="{{$system->title}}">
						<img src="{{asset('uploads/images/systems/'.$system->logo)}}" data-src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="{{$system->title}}" class="lazy img-responsive center-block" />
					</a>
				</div>
				<div class="col-md-3 hotline hidden-sm hidden-xs">
					<div class="evo-hotline hidden-md">
						
						<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{$system->phone}}" title="{{$system->phone}}">{{$system->phone}}</a>
						
					</div>
					<div class="evo-cart">
						<a href="#" class="service_button" title="Đặt lịch" data-toggle="modal" data-target="#myModalCall" style="color: #000; font-weight: 600;" rel="nofollow"><i class="fa fa-calendar" aria-hidden="true"></i> ĐẶT LỊCH</a>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="evo-header-mobiles hidden-lg hidden-md">
		<div class="container">
			<div class="row">
				<div class="col-md-12 evo-header-mobile">
					<div class="evo-flexitem evo-flexitem-fill navbar-toggle collapsed" id="trigger-mobile">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<div class="logo evo-flexitem evo-flexitem-fill">
						<a href="/" class="logo-wrapper" title="{{$system->title}}">
							<img src="{{asset('uploads/images/systems/'.$system->logo)}}" data-src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="{{$system->title}}" class="lazy img-responsive center-block" />
						</a>
					</div>
					<div class="evo-flexitem evo-flexitem-fill">
						
						<a href="javascript:void(0);" class="site-header-search" rel="nofollow" title="Tìm kiếm">
							<i class="fa fa-search" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="evo-main-nav">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					
					<div class="mobile-main-menu hidden-lg hidden-md">
						<div class="drawer-header">
							<div id="close-nav">
								<svg viewBox="0 0 100 100" data-radium="true" style="width: 16px;"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-645.000000, -879.000000)" fill="#000"><path d="M743.998989,926.504303 L697.512507,880.032702 C696.909905,879.430293 695.962958,879 695.016011,879 C694.069064,879 693.122117,879.430293 692.519515,880.032702 L646.033033,926.504303 C644.655656,927.881239 644.655656,930.118761 646.033033,931.495697 C646.721722,932.184165 647.582582,932.528399 648.529529,932.528399 C649.476476,932.528399 650.337337,932.184165 651.026025,931.495697 L691.486482,891.048193 L691.486482,975.471601 C691.486482,977.450947 693.036031,979 695.016011,979 C696.995991,979 698.54554,977.450947 698.54554,975.471601 L698.54554,891.048193 L739.005997,931.495697 C740.383374,932.872633 742.621612,932.872633 743.998989,931.495697 C745.376366,930.118761 745.29028,927.881239 743.998989,926.504303 L743.998989,926.504303 Z" transform="translate(695.000000, 929.000000) rotate(-90.000000) translate(-695.000000, -929.000000) "></path></g></g></svg>
							</div>
							<a href="/" class="logo-wrapper" title="{{$system->title}}">
								<img src="{{asset('uploads/images/systems/'.$system->logo)}}" data-src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="{{$system->title}}" class="lazy img-responsive center-block" />
							</a>
							
						</div>
						
					</div>

					<ul id="nav" class="nav">
						@php
					        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
					    @endphp
						
						
						@foreach($menus as $menu)
						
							@php
						        $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
						    @endphp
						    @if(count($menu2s)!=0)
						    <li class=" nav-item has-childs">
								<a href="/{{$menu->url}}" target="{{$menu->target}}" class="nav-link" title="Dịch vụ">{{$menu->title}} <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
								<ul class="dropdown-menu">
									@foreach($menu2s as $menu2)
										@php
									        $menu3s = App\Menu::where('parent_id',$menu2->id)->orderBy('stt','ASC')->get();
									    @endphp
									    @if(count($menu3s)!=0)
											<li class="dropdown-submenu nav-item-lv2 has-childs2">
												<a class="nav-link" href="/{{$menu2->url}}" target="{{$menu2->target}}" title="{{$menu2->title}}">{{$menu2->title}}<i class="fa fa-angle-right"></i></a>
												<ul class="dropdown-menu">
													@foreach($menu3s as $menu3)
														<li class="nav-item-lv3"><a class="nav-link" href="/{{$menu3->url}}" target="{{$menu3->target}}" title="{{$menu3->title}}">{{$menu3->title}}</a></li>
													
													@endforeach
												</ul>                      
											</li>
										@else
											<li class="nav-item-lv2"><a class="nav-link" target="{{$menu2->target}}" href="/{{$menu2->url}}" title="{{$menu2->title}}">{{$menu2->title}}</a></li>
										@endif
									
									@endforeach
								</ul>
							</li>
							@else
							<li class=" nav-item">
								<a href="/{{$menu->url}}" target="{{$menu->target}}" class="nav-link" title="Dịch vụ">{{$menu->title}}</a>
							</li>
							@endif
						
						@endforeach
						<li class="nav-item hidden-sm hidden-xs">
							<a href="javascript:void(0);" class="site-header-search" rel="nofollow" title="Tìm kiếm">
								<i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>