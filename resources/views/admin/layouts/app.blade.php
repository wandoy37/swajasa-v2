<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Swajasa - Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/brand-swajasa.png') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('atlantis/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.css') }}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('atlantis/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo text-white h2 mt-4 py-2" style="font-weight: 700;">
					<img src="{{ asset('assets/img/brand-swajasa.png') }}" alt="navbar brand" width="45px" class="navbar-brand">
                    Swajasa
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->			
            @include('admin.layouts.components.navbar')
		</div>

		@include('admin.layouts.components.sidebar')

		<div class="main-panel">

			{{-- Content --}}
			@yield('content')
			{{-- /Content --}}
			
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="http://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://api.whatsapp.com/send/?phone=6282148722747&text=Hi,+we+are+form+Swajasa+Lintas+Media+request+Support+Service">
									Help
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li> --}}
						</ul>
					</nav>
					<div class="copyright ml-auto">
						<span class="text-muted fst-italic">Copyright &copy; WanSite 2022</span>
						{{-- 2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a> --}}
					</div>				
				</div>
			</footer>
		</div>












        
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Moment JS -->
	<script src="{{ asset('atlantis/js/plugin/moment/moment.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('atlantis/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{ asset('atlantis/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{ asset('atlantis/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

	<!-- Bootstrap Wizard -->
	<script src="{{ asset('atlantis/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

	<!-- jQuery Validation -->
	<script src="{{ asset('atlantis/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

	<!-- Summernote -->
	<script src="{{ asset('atlantis/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

	<!-- Select2 -->
	<script src="{{ asset('atlantis/js/plugin/select2/select2.full.min.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('atlantis/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Owl Carousel -->
	<script src="{{ asset('atlantis/js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>

	<script>
		window.setTimeout(function() {
		  $(".alert").fadeTo(300, 0).slideUp(300, function(){
			$(this).remove(); 
		  });
		}, 5000);
	  </script>
</body>
</html>