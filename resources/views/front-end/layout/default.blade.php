
<!DOCTYPE html>
<html lang="vi">
	<head>
		@php
	        $system = App\System::where('id',1)->get()->first();
	    @endphp
		@yield('meta')
		@yield('css')

		<link href="{{asset('css/evo-dich-vu.scss.css')}}" rel="stylesheet" type="text/css" />
		

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
		<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
		
		<script src="{{asset('js/option-selectors.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/api.jquery.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/slick.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/flickity.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			{!!$system->script!!}
		</script>
	</head>
	<body class=" @yield('body_class')">
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
		@yield('banner')
		@yield('info')
		@yield('services')
		@yield('feedback')
		@yield('product')
		@yield('blog')
		@yield('gallery')
		@yield('content')
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
		<div id="myModal" class="modal fade" role="dialog"></div>
		<script src="{{asset('js/intersection-observer.js')}}"></script>
		<script src="{{asset('js/lazyload.min.js')}}"></script>
		<script src="{{asset('js/cs.script.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/main.js')}}" type="text/javascript"></script>				
		<script src="{{asset('js/evo-index-js.js')}}" type="text/javascript"></script>
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
		@yield('js')

		
		
	</body>
</html>