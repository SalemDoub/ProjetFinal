<!DOCTYPE html>
<html lang="en">
<head>
<title>Sophie Tells</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

<?php require("modules/header.php"); ?>

	<!-- Home -->

	<div class="home">
	 <div class="background_image" style="background-image:url(Content/images/index_1.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Le Luxe à la Française</div>
							<div class="booking_form_container">
								<form action="#" class="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
											<div><input type="text" class="booking_input booking_input_a booking_in" placeholder="City..." required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Number..." required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Réserver maintenant</button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="Content/images/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Des Hôtels fabuleux</h2></div>
						<div class="icon_box_text">
							<p>Au cœur de vibrantes métropoles telles que Paris, Londres, New York ou Sydney, ou loin de toute agitation dans les paisibles espaces du Maroc, de l'Égypte, de la Polynésie française ou de la Thaïlande, les hôtels Sophie Tells vous invitent à savourer et célébrer les bonheurs de la vie et le nouvel art de vivre à la française.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="Content/images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Live the French way</h2></div>
						<div class="icon_box_text">
							<p>Le fleuron de  Sophie Tells, Sophie Tells Legend mélange l’art de vivre et l’élégance à la française à l’héritage unique de chaque hôtel. Hanoi, Carthagène, Aswan, Xi’an, Amsterdam… Vivez une histoire hors du temps, un séjour inoubliable, une légende dont vous faites désormais partie.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="Content/images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Offrez-vous le luxe</h2></div>
						<div class="icon_box_text">
							<p>Quels que soient les prochains horizons que vous choisirez d'explorer, votre toute première découverte sera le plaisir d'un séjour dans les hôtels Sophie Tells. Laissez-vous séduire par l'excellence du service, un goût immodéré...</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(Content/images/gallery_1.jpg)"></div>
					<a class="colorbox" href="Content/images/gallery_1.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(Content/images/gallery_2.jpg)"></div>
					<a class="colorbox" href="Content/images/gallery_2.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(Content/images/gallery_3.jpg)"></div>
					<a class="colorbox" href="Content/images/gallery_3.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(Content/images/gallery_4.jpg)"></div>
					<a class="colorbox" href="Content/images/gallery_4.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title"><h2>Sophie Tells / 10 years of excellence</h2></div>
						<div class="about_text">
							<p>Prendre soin de soi n'a jamais été un tel plaisir. Profitez du luxe somptueux de votre chambre ou de votre suite et régalez-vous avec le petit-déjeuner Sofitel De-Light, aussi équilibré qu'appétissant. Grâce au départ...</p>
						</div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
						<img src="Content/images/about_1.png" alt="">
						<img src="Content/images/about_2.png" alt="">
						<img src="Content/images/about_3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme test_slider">

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Un endroit parfait</a></div>
								<div class="testimonial_text">
									<p>Sa situation, son aimable personnel, son excellent petit-déjeuner, ses chambres de style parisien, notre 6e séjour en cet hôtel et nous n'avons jamais été déçus</p>
								</div>
								<div class="testimonial_image"><img src="Content/images/user_1.jpg" alt=""></div>
								<div class="testimonial_author"><a href="#">Samantha Smith</a>, Greece</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Quel bon séjour !</a></div>
								<div class="testimonial_text">
									<p>L’hôtel est très beau et idéalement situé !
Tout était parfait, mention toute particulière pour le brunch du dimanche ! Nous y retournerons sans hésiter !</p>
								</div>
								<div class="testimonial_image"><img src="Content/images/user_2.jpg" alt=""></div>
								<div class="testimonial_author"><a href="#">Michael Doe</a>, Italy</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Nous avons adoré</a></div>
								<div class="testimonial_text">
									<p>Un hotel tout simplement d'un charme fou.
Des espaces agréables, un accueil très pro et agréable, et une restauration avec des découvertes très intéressantes.</p>
								</div>
								<div class="testimonial_image"><img src="Content/images/user_3.jpg" alt=""></div>
								<div class="testimonial_author"><a href="#">Luis Garcia</a>, Spain</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

		<?php require("modules/footer.php") ?>

</div>

<script src="Content/js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="Content/js/custom.js"></script>
</body>
</html>
