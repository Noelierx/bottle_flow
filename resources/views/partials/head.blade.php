	<title>@yield('title')</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<meta name="author" content="Noëlie Roux">
	<meta name="description" content="Un site de qualité fait avec bootstrap">

      {{-- la fonction asset() permet d'appeler des fichiers JS, CSS ou images.. en prenant pour racine le dossier public --}}
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
      <link rel="stylesheet" href="{{ asset('css/animsition.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <link href="{{ asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet">
