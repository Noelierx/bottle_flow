<div class="menu">
    <!-- desktop navbar -->
    <nav class="desktop-nav">
        <ul class="first-level">
            @if(Auth::check())
                <li><a href="">Boutique</a>
                    <ul class="second-level">
                        <li>{!! html()->a(route('products.index'), 'Les produits') !!}</li>
                        <li>{!! html()->a(route('cart.index'), 'Mon panier') !!}</li>
                        <li>{!! html()->a(route('orders.index'), 'Mes commandes') !!}</li>
                        <li>{!! html()->a(route('inventory.index'), 'Mon inventaire') !!}</li>
                    </ul>
                </li>
                @if(Auth::user()->hasMessagesToRead())
                    <li>{!! html()->a(route('messages.index'), 'Mes messages (' . Auth::user()->messagesToRead()->count() . ')') !!}</li>
                @else
                    <li>{!! html()->a(route('messages.index'), 'Mes messages') !!}</li>
                @endif
                <li>{!! html()->a(route('auth.logout'), 'Déconnexion') !!}</li>
            @else
                <li>{!! html()->a(route('auth.showLoginForm'))->child('Connexion') !!}</li>
                <li>{!! html()->a(route('auth.showRegistrationForm'))->child('Inscription') !!}</li>
            @endif
            <li><a href="">Informations</a>
                <ul class="second-level">
                    <li><a href="{{ route('mentions') }}" class="animsition-link">Mentions légales</a></li>
                    <li><a href="{{ route('cgv') }}" class="animsition-link">Conditions Générales de Ventes</a></li>
                    <li><a href="{{ route('donnees') }}" class="animsition-link">Données personnelles</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact.index') }}" class="animsition-link">contact</a></li>
        </ul>
    </nav>
    <!-- mobile navbar -->
    <nav class="mobile-nav"></nav>
    <div class="menu-icon">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>