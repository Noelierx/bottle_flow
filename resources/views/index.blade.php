<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.header')
        <!-- HERO SECTION  -->
	<div class="site-hero bg-dark">
		<ul class="slides">
			<li>
				<div class="big-title uppercase text-white">Jetez-vous à l'eau !</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
                <button type="submit" class="btn white"><a href="#">Lancez une bouteille</a></button>
			</li>
		</ul>
		<div class="mouse">
            <div class="scroll"></div>
        </div>
	</div>

	<!-- INTRO (ABOUT) -->
	<section class="about white-section pb-50 pt-100">
        <svg class="clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <path d="M-5 100 Q 0 20 5 100 Z
                                     M0 100 Q 5 0 10 100
                                     M5 100 Q 10 30 15 100
                                     M10 100 Q 15 10 20 100
                                     M15 100 Q 20 30 25 100
                                     M20 100 Q 25 -10 30 100
                                     M25 100 Q 30 10 35 100
                                     M30 100 Q 35 30 40 100
                                     M35 100 Q 40 10 45 100
                                     M40 100 Q 45 50 50 100
                                     M45 100 Q 50 20 55 100
                                     M50 100 Q 55 40 60 100
                                     M55 100 Q 60 60 65 100
                                     M60 100 Q 65 50 70 100
                                     M65 100 Q 70 20 75 100
                                     M70 100 Q 75 45 80 100
                                     M75 100 Q 80 30 85 100
                                     M80 100 Q 85 20 90 100
                                     M85 100 Q 90 50 95 100
                                     M90 100 Q 95 25 100 100
                                     M95 100 Q 100 15 105 100 Z">
                            </path>
                        </svg>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div>
                        <i class="icon ion-ios-heart"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero pretium, sollicitudin feugiat libero.</p>
                    </div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div>
                        <i class="icon ion-ios-chatboxes"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero pretium, sollicitudin feugiat libero.</p>
                    </div>
				</div>
                <div class="col-xs-12 col-md-4">
					<div>
                        <i class="icon ion-ios-star"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero pretium, sollicitudin feugiat libero.</p>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<!-- TEMOIGNAGES -->
	<section class="services">
		<div class="container">
            <div class="col-md-8 col-sm-12 services-left">
				<div class="row mb-50">
					<div class="col-md-12 col-sm-12">
						<i class="icon ion-ios-lightbulb-outline"></i>
						<h2>Des rencontres uniques</h2>
						<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
					</div>
                </div>
			</div>

			<div class="col-md-4 col-sm-12 services-right visible-lg">
				<div class="frame">
					<img  class="serv-img" src="{{ asset('img/pexels-photo-374845.jpeg') }}" alt="image">
				</div>
			</div>
		</div>
	</section>

	<!-- FACTS -->
	<section class="team mt-30">
		<div class="container">
			<div class="section-padding">
				<div class="top-line"></div>
			</div>
			<div class="row">
				<div class="section-title2">
					<h2>Personnaliser vos bouteilles</h2>
					<p>Vous pouvez ajouter une touche de fantaisie à vos messages en achetant des éléments comme des décorations, des nouvelles couleurs, polices d'écritures, ... et en débloquant des nouveaux types de contenus.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="team_member">
						<img src="{{ asset('img/feuille.jpeg') }}" alt="team image">		
						<div class="team_member_hover">
							<div class="team_member_info">
								<div class="team_member_name">john doe</div>
								<div class="team_member_job">CEO / co-founder</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="team_member">
						<img src="{{ asset('img/micro.jpeg') }}" alt="team image">	
						<div class="team_member_hover">
							<div class="team_member_info">
								<div class="team_member_name">jennifer toms</div>
								<div class="team_member_job">project chied</div>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="team_member">
						<img src="{{ asset('img/fleur.jpeg') }}" alt="team image">	
						<div class="team_member_hover">
							<div class="team_member_info">
								<div class="team_member_name">jack doe</div>
								<div class="team_member_job">graphic designer</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</section>


	<!-- /FACTS-->
	<!-- newsletter -->
	<section class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h2 class="text-white">
						S'inscire à la newsletter !
					</h2>
				</div>
			
				<div class="col-md-6 col-sm-12">
					<form action="#" method="post">
						<div class="input_1 mt-30">
							<input type="text" name="email">
							<span>Email</span>
						</div>
						<button type="submit" class="btn white"><span>Send</span></button>
					</form>
				</div>
			</div>
		</div>
	</section>
    
    <!-- WHY CHOOSE US -->
	<section class="secontact">
		<div class="container">
            <div class="col-md-8 col-sm-12 secontact-right">
				<div class="row mb-50">
					<div class="col-md-12 col-sm-12">
						<h2>Contactez-nous</h2>
						<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).<br>
                            <button type="submit" class="btn black"><span>Contactez-nous</span></button>
                        </p>
					</div>
                </div>
			</div>

			<div class="col-md-4 col-sm-12 secontact-left visible-lg">
				<div class="frame">
					<img  class="serv-img" src="{{ asset('img/office-1.jpeg') }}" alt="image">
				</div>
			</div>
		</div>
	</section>
        @include('partials.footer')
    </body>
</html>