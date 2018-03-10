<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
                    @if(Auth::check())
                    <ul class="first-level">
						<li><a href="">Boutique</a>
							<ul class="second-level">
								<li>{!! html()->a(route('products.index'), 'Les produits') !!}</li>
                                <li>{!! html()->a(route('cart.index'), 'Mon panier') !!}</li>
                                <li>{!! html()->a(route('orders.index'), 'Mes commandes') !!}</li>
                                <li>{!! html()->a(route('inventory.index'), 'Mon inventaire') !!}</li>
							</ul>
						</li>
                        <li>{!! html()->a(route('messages.index'), 'Mes messages') !!}</li>
						<li>{!! html()->a(route('auth.logout'), 'Déconnexion') !!}</li>
						<li><a href="">Informations</a>
							<ul class="second-level">
								<li><a href="#" class="animsition-link">Mentions légales</a></li>
                                <li><a href="#" class="animsition-link">Conditions Générales d'Utilisation</a></li>
                                <li><a href="#" class="animsition-link">Conditions Générales de Ventes</a></li>
                                <li><a href="#" class="animsition-link">Données personnelles</a></li>
							</ul>
						</li>
						<li><a href="#" class="animsition-link">contact</a></li>
					</ul>
                    @else
                    <ul class="first-level">
						<li>{!! html()->a(route('auth.showLoginForm'))->child('Connexion') !!}</li>
						<li>{!! html()->a(route('auth.showRegistrationForm'))->child('Inscription') !!}</li>
						<li><a href="">Informations</a>
							<ul class="second-level">
								<li><a href="#" class="animsition-link">Mentions légales</a></li>
                                <li><a href="#" class="animsition-link">Conditions Générales d'Utilisation</a></li>
                                <li><a href="#" class="animsition-link">Conditions Générales de Ventes</a></li>
                                <li><a href="#" class="animsition-link">Données personnelles</a></li>
							</ul>
						</li>
						<li><a href="#" class="animsition-link">contact</a></li>
					</ul>
                    @endif
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>