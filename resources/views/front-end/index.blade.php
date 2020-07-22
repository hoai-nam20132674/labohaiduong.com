@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$system->title}}</title>
	<meta name="description" content="{{$system->seo_description}}">
	<meta name="keywords" content="{{$system->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$system->title}}">
	<meta property="og:image" content="">
	<meta property="og:image:secure_url" content="">
	<meta property="og:description" content="{{$system->seo_description}}">
	<meta property="og:url" content="{{$system->website}}">
	<meta property="og:site_name" content="{{$system->name}}">
@endsection
@section('css')
	<link href="{{asset('css/bootstrap.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />							
	<link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />	
	<link href="{{asset('css/evo-main.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/slick.scss.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/evo-index.scss.css')}}" rel="stylesheet" type="text/css" />
	
	
	<style type="text/css">
		.image-source-link {
			color: #98C3D1;
		}

		.mfp-with-zoom .mfp-container,
		.mfp-with-zoom.mfp-bg {
			opacity: 0;
			-webkit-backface-visibility: hidden;
			/* ideally, transition speed should match zoom duration */
			-webkit-transition: all 0.3s ease-out; 
			-moz-transition: all 0.3s ease-out; 
			-o-transition: all 0.3s ease-out; 
			transition: all 0.3s ease-out;
		}

		.mfp-with-zoom.mfp-ready .mfp-container {
				opacity: 1;
		}
		.mfp-with-zoom.mfp-ready.mfp-bg {
				opacity: 0.8;
		}

		.mfp-with-zoom.mfp-removing .mfp-container, 
		.mfp-with-zoom.mfp-removing.mfp-bg {
			opacity: 0;
		}
	</style>
@endsection
@section('body_class')
index
@endsection
@section('banner')
	<section class="awe-section-1">	
		<div class="home-slider">
			<div class="item">
				<a href="#" class="clearfix" title="{{$system->title}}">
					<img src="{{asset('uploads/images/systems/'.$system->banner)}}" width="100%" data-lazy="{{asset('uploads/images/systems/'.$system->banner)}}" alt="{{$system->title}}" class="lazy img-responsive center-block" />
				</a>
				<h1 class="hidden">{{$system->title}}</h1>
			</div>
		</div>
	</section>
@endsection
@section('info')
	<section class="awe-section-2">	
		<div class="section_gioi_thieu">
			<div class="container">
				<div class="row row-flex align-items-lg-center">
					<div class="col-md-6">
						<div class="block-header">
							<p>Nha khoa thẩm mỹ đẳng cấp quốc tế</p>
							<h2>DENTAL PLUS - Với sứ mệnh đem lại nụ cười tự tin tỏa sáng cho cộng đồng</h2>
						</div>
						<p>Với sứ mệnh mang lại nụ cười tự tin tỏa sáng, nâng cao chất lượng cuộc sống cho cộng đồng.  Đội ngũ y bác sỹ của <strong>Dental Plus</strong> vẫn không ngừng học hỏi, cập nhật những giải pháp công nghệ mới trong lĩnh vực thẩm mỹ nha khoa để đem lại cho Quý khách những trải nghiệm về chất lượng và dịch vụ tuyệt vời nhất .</p>
						<p><strong>Dental Plus</strong> với hơn 5 năm hoạt động trong lĩnh vực nha khoa thẩm mỹ. Đội ngũ y bác sỹ dày dặn kinh nghiệm, tận tâm tư vấn miễn phí cho quý khách để đưa ra hướng giải quyết tốt nhất. Giúp quý khách lấy lại tự tin với hàm răng mới thẩm mỹ trắng sáng rạng ngời.</p>
						<p>Đừng ngần ngại, hãy cho <strong>Dental Plus</strong> biết vấn đề răng miệng bạn đang gặp phải, bạn sẽ nhận lại những giá trị tuyệt vời hơn những gì bạn nghĩ.</p>
						<a href="#" class="read-more" title="Xem thêm">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none"><path d="M0.505883 5.20577L0.491834 5.2027L6.51423 5.2027L4.62101 7.10009C4.5283 7.19272 4.47745 7.31821 4.47745 7.44992C4.47745 7.58162 4.5283 7.70623 4.62101 7.79909L4.91559 8.09382C5.00823 8.18645 5.13166 8.23767 5.2633 8.23767C5.39501 8.23767 5.51852 8.18682 5.61115 8.09418L8.85649 4.84913C8.94949 4.75613 9.00035 4.63226 8.99998 4.50048C9.00035 4.36796 8.94949 4.24401 8.85649 4.15116L5.61115 0.905818C5.51852 0.813257 5.39508 0.76233 5.2633 0.76233C5.13166 0.76233 5.00823 0.813331 4.91559 0.905818L4.62101 1.20055C4.5283 1.29304 4.47745 1.41655 4.47745 1.54826C4.47745 1.67989 4.5283 1.79689 4.62101 1.88945L6.53559 3.79745L0.499152 3.79745C0.227908 3.79745 -1.94412e-05 4.03123 -1.94175e-05 4.30233L-1.93811e-05 4.71918C-1.93574e-05 4.99028 0.23464 5.20577 0.505883 5.20577Z"></path></svg></a>
					</div>
					<div class="col-md-6">
						<div class="el-wr">
							<div class="learning-elements-wrap">
								<div class="circle-container">
									<div class="learning-item" data-learn-tab='#0'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_1.png')}}" alt="Sứ mệnh" class="lazy" />
										<p>Sứ mệnh</p>
									</div>
									<div class="learning-item" data-learn-tab='#1'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_2.png')}}" alt="Đội ngũ" class="lazy" />
										<p>Đội ngũ</p>
									</div>
									<div class="learning-item" data-learn-tab='#2'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_3.png')}}" alt="Cơ sở VC" class="lazy" />
										<p>Cơ sở VC</p>
									</div>
									<div class="learning-item" data-learn-tab='#3'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_4.png')}}" alt="Máy móc" class="lazy" />
										<p>Máy móc</p>
									</div>
									<div class="learning-item" data-learn-tab='#4'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_5.png')}}" alt="Dịch vụ" class="lazy" />
										<p>Dịch vụ</p>
									</div>
									<div class="learning-item" data-learn-tab='#5'>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{asset('uploads/images/systems/evo_gioi_thieu_content_image_6.png')}}" alt="Hệ thống" class="lazy" />
										<p>Hệ thống</p>
									</div>
								</div>
								<div class="tab-element-content">
									<div class="for-tab start">
										<h3>Nụ cười tự tin tỏa sáng<br>DENTAL PLUS</h3>
									</div>
									<div class="for-tab" id="0">
										<h3>Sứ mệnh</h3>
										<p>Với sứ mệnh mang lại nụ cười tự tin tỏa sáng, nâng cao chất lượng cuộc sống cho cộng đồng.</p>
									</div>
									<div class="for-tab" id="1">
										<h3>Đội ngũ</h3>
										<p>100% bác sĩ tại DENTAL PLUS được đào tạo bài bản, Đội ngũ y bác sỹ của Dental Plus vẫn không ngừng học hỏi, cập nhật những giải pháp công nghệ mới trong lĩnh vực thẩm mỹ nha khoa để đem lại cho Quý khách những trải nghiệm về chất lượng và dịch vụ tuyệt vời nhất </p>
									</div>
									<div class="for-tab" id="2">
										<h3>Cơ sở VC</h3>
										<p>Với mong muốn mang đến cho khách hàng những trải nghiệm dịch vụ chất lượng tốt nhất, DENTAL PLUS được đầu tư cơ sở vật chất hiện đại, đạt tiêu chuẩn 5 sao.</p>
									</div>
									<div class="for-tab" id="3">
										<h3>Máy móc</h3>
										<p>Hệ thống máy móc hiện đại. 100% phòng ốc, thiết bị máy móc nhập khẩu trực tiếp từ nước ngoài, vô trùng, đảm bảo tính an toàn tuyệt đối trong Y tế</p>
									</div>
									<div class="for-tab" id="4">
										<h3>Dịch vụ</h3>
										<p>DENTAL PLUS mang đến cho khách hàng bằng dịch vụ chăm sóc chu đáo. Sau khi sử dụng dịch vụ, Quý khách sẽ được các bác sĩ dặn dò kỹ lưỡng, cấp phát thuốc theo chỉ định cùng thẻ bảo hành kết quả thẩm mỹ.</p>
									</div>
									<div class="for-tab" id="5">
										<h3>Hệ thống</h3>
										<p>CS1: Địa chỉ Số 1 Thi Sách, phường Phạm Đình Hổ, quận Hai Bà Trưng, Hà Nội.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('services')
	<section class="awe-section-3">	
		<div class="section_dich_vu">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 evo_dich_vu_title text-center">
						<h2 class="section_dich_vu_title">Dental Plus</h2>
						<h4>Dịch vụ nổi bật</h4>
					</div>
				</div>
				<div class="row row-dich-vu">
					@foreach($services as $service)
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="evo-box-dich-vu">
								<div class="evo-box-dich-vu-group">
									<div class="evo-box-dich-vu-image">
										<img src="{{asset('uploads/images/services/'.$service->avata)}}" data-src="{{asset('uploads/images/services/'.$service->avata)}}" alt="{{$service->name}}" class="lazy img-responsive center-block" />
									</div>
									<div class="content-box-dich-vu hidden-sm hidden-xs">
										{{$service->seo_description}}
									</div>
								</div>
								<h3><a href="/{{$service->url}}" title="Nâng mũi Model">{{$service->name}}</a></h3>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
@section('feedback')
	<section class="awe-section-4">	
		<div class="section_khach_hang">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 evo_dich_vu_title text-center">
						<h2 class="section_dich_vu_title">Dental Plus</h2>
						<h4>Câu chuyện khách hàng</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="tab-content">
							@php
								$i=1;
							@endphp
							@foreach($products as $product)
								@if($i==1)
								<div id="item{{$i}}" class="tab-pane active">
								@else
								<div id="item{{$i}}" class="tab-pane">
								@endif
									<div class="h2big">
										<div class="h2big__pic col-6">
											<a href="/{{$product->url}}" class="align-middle" title="{{$product->title}}">
												
												<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" class="lazy img-responsive center-block" />
												
											</a>
										</div>
										<div class="h2big__box col-6">
											<h3><a class="line-clamp" href="/{{$product->url}}" title="{{$product->title}}">{{$product->title}}</a></h3>
											<div class="evo-customer-des">{{$product->seo_description}}</div>
											<div class="h2big__more">
												<a href="/{{$product->url}}" title="Xem ngay">Xem ngay</a>
											</div>
										</div>
									</div>
								</div>
								@php
									$i++;
								@endphp
							@endforeach
							
							
						</div>
					</div>
					<div class="col-md-6">
						<ul class="row evo-tabs" role="tablist">
							@php
								$i=1;
							@endphp
							@foreach($products as $product)
								@if($i==1)
								<li class="col-md-4 col-sm-3 col-xs-4 nav-item active">
								@else
								<li class="col-md-4 col-sm-3 col-xs-4 nav-item">
								@endif
									<a href="#item{{$i}}" data-toggle="tab">
										
										<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" class="lazy img-responsive center-block" />
										
									</a>
								</li>
								@php
									$i++;
								@endphp
							@endforeach
							
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('product')
	
@endsection
@section('blog')
	<section class="awe-section-6">	
	
		<div class="container section_blogs">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="evo_dich_vu_title text-center">
						<h2 class="section_dich_vu_title">Dental Blogs</h2>
						<h4><a href="tin-tuc" title="Evo Beauty Magazine">TIN TỨC</a></h4>
					</div>
					
					<div class="evo-owl-blog evo-slick">
						@foreach($blogs as $blog)
						
							@include('front-end.layout.blog-item')
						@endforeach
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
@endsection
@section('gallery')
	<section class="awe-section-7">	
		<div class="section_instagram">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="evo_dich_vu_title text-center">
							<h2 class="section_dich_vu_title">#Feedback</h2>
							<h4><a href="https://www.instagram.com/emlem.beauty" title="Dental Plus và Khách hàng" target="_blank" rel="nofollow">Ý Kiến Khách Hàng</a></h4>
						</div>
					</div>
				</div>
				<div class="instagram-list-image">
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_1.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_2.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_3.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_4.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_5.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_6.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_7.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_8.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_9.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_10.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_11.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-4 no-padding">
						<div class="instagram-image">
							<a href="#" title="Dental Plus" rel="nofollow" target="_blank">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/image_instagram_image_12.jpg?1593142743270" alt="Dental Plus" class="lazy img-responsive center-block" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection
@section('js')
	
@endsection