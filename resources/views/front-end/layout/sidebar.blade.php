<aside class="evo-sidebar sidebar left-content col-md-3" style="background: #f9f9f9">
	<aside class="aside-item collection-category">
		<div class="aside-title">
			<h3 class="title-head margin-top-0">Danh mục</h3>
		</div>
		<div class="aside-content">
			
			<ul class="nav navbar-pills nav-category">
				@php
			        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
			    @endphp
				@foreach($menus as $menu)
					@php
				        $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
				    @endphp
				    @if(count($menu2s)!=0)
				    <li class="nav-item ">
						<a href="/{{$menu->url}}" class="nav-link" title="{{$menu->title}}">{{$menu->title}}</a>
						<span class="Collapsible__Plus"></span>
						<ul class="dropdown-menu">
							@foreach($menu2s as $menu2)
								@php
							        $menu3s = App\Menu::where('parent_id',$menu2->id)->orderBy('stt','ASC')->get();
							    @endphp
							    @if(count($menu3s)!=0)
							    	<li class="dropdown-submenu nav-item ">
										<a class="nav-link" href="/{{$menu2->url}}" title="{{$menu2->title}}">{{$menu2->title}}</a>
										<span class="Collapsible__Plus"></span>
										<ul class="dropdown-menu">
											@foreach($menu3s as $menu3)
												<li class="nav-item ">
													<a class="nav-link" href="/{{$menu3->url}}" title="{{$menu3->title}}">{{$menu3->title}}</a>
												</li>
											@endforeach
										</ul>
									</li>
							    @else
							    <li class="nav-item ">
									<a class="nav-link" href="/{{$menu2->url}}" title="{{$menu2->title}}">{{$menu2->title}}</a>
								</li>
							    @endif
							@endforeach

						</ul>
					</li>

				    @else
				    <li class="nav-item ">
						<a class="nav-link" href="/{{$menu->url}}" title="{{$menu->title}}">{{$menu->title}}</a>
					</li>
				    @endif
					
				@endforeach
				
				
				
				
			</ul>
			
		</div>
	</aside>
	<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 margin-top-20">
		<div class="aside-item evo-product-article">
			<h2 class="title-head">
				<a href="tin-tuc" title="Tin khuyến mãi">Tin tức mới</a>
			</h2>
			<div class="list-blogs">
				@php
			        $bls = App\Blog::orderBy('id','ASC')->take(6)->get();
			    @endphp
				@foreach($bls as $bl)									
				<article class="blog-item blog-item-list clearfix">
					<a href="/{{$bl->url}}" title="{{$bl->title}}">
						<div class="panel-box-media">
							
							<img class="lazy loaded" src="{{asset('uploads/images/blogs/'.$bl->avata)}}" data-src="{{asset('uploads/images/blogs/'.$bl->avata)}}" alt="{{$bl->title}}" data-was-processed="true">
							
						</div>
						<div class="blogs-rights">
							<h3 class="blog-item-name">
								{{$bl->title}}
							</h3>
						</div>
					</a>
				</article>									
				@endforeach
			</div>
			<div class="blogs-mores text-center"><a href="/tin-tuc" title="Xem thêm">Xem thêm</a></div>
		</div>
	</div>
	
	
</aside>