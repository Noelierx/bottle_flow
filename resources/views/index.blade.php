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
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <button id="btn-submit" type="submit" class="btn"><a href="#">Lancez une bouteille</a></button>
            </li>
        </ul>
        <div class="mouse">
            <div class="scroll"></div>
        </div>
    </div>

    <!-- INTRO (ABOUT) -->
    <svg id="shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080">
        <defs>
            <style>.cls-1 {
                    fill: #f6f6ec;
                }</style>
        </defs>
        <path class="cls-1"
              d="M1909.84,725V288a5.69,5.69,0,0,0-4.17,3.5c-3.4,8.31-6.7,16.67-10,25,.12,3.24.37,6.53-2.78,8.74h.1l-.43,5.5q0,1.47,0,2.94c-.16,1.33.07,2.91-.58,3.92-1,1.59-3,1.76-4.84,1.63-2.32-.17-4.44-.69-6-2.55l.07.11a4.8,4.8,0,0,1-2.71-.46c-2.71-.41-5.42-.81-8.13-1.25-1.8-.3-3.74-1.28-5.35-.88-5.13,1.25-10-.68-15-.55-2.73,1.74-5.4,1.27-8-.22-2.51.16-4.8-.21-6.22-2.63l-2.86,0c-1.16,2.41-4.69,3.41-3.94,7.07a4.32,4.32,0,0,1-1.34,3.71c-3,1.86-2.35,6.42-5.77,7.65-1.49.53-2.54-.85-3-2.28-.62-2.09-1.75-3.24-4.06-2.58a5.36,5.36,0,0,0-1.34.48c-3.2,1.95-6.21,1.37-9.27-.45a1.2,1.2,0,0,0-1.8,1.33c2.8,7.67-1.4,13.81-4.36,20.13-1,2-3,3.55-4.68,5.23-.27.28-1.13.43-1.33.23-.61-.58-1.42-1.35-1.44-2.06-.14-4,2.71-7,3.91-10.56a5.06,5.06,0,0,0-.93-5.27,5.92,5.92,0,0,0-6.39-2.1,54.86,54.86,0,0,0-7.84,3.33c-2.44,1.21-4.51,1-6.36-1-.78-.85-1.75-1.07-2.51-.18-2.44,2.85-4.86,2.24-7.39.21-1.78-1.43-3.33-1-5,.37a2.66,2.66,0,0,1-2.56.11c-2.35-2.18-5.32-1.53-8-2.21-3.71-.93-5.31.67-6.42,3.73-.1.27-.75.33-1.18.51-1.77-1.31-1.06-3.27-1.15-5a17.2,17.2,0,0,0-2.56-8c-1.05-1.77-3-3.27-4.54-2.7a19.9,19.9,0,0,1-13.87.1c-3.41-1.13-7.45-.52-11.19-.41-2.24.07-4.58,2.11-6.65,0a11.38,11.38,0,0,1-3.52-7.55c0-.84.47-2.36.95-2.46,4.08-.82,8.11-3.1,12.41-1,2.89,1.4,5.49.37,8.21-.6,4-1.43,5.33-2.64,4.51-4.16-1.12-2.08-3.06-2-4.87-2-3.32-.13-6.65-.07-10-.09-5.7,0-11.44-.35-16.8,2.2-7.91-.11-14.76,3.16-21.47,6.79a18.24,18.24,0,0,1-11,2.18,10.17,10.17,0,0,0-6.42,2.52c-1.43,1.2-3,2.24-4.5,3.35-1.46,4-3.2,7.61-7.52,9.71-11.12,5.42-20.17,13.79-29.47,21.74-1.22,1.78-2.36,3.63-3.67,5.34-1.59,2.07-3.32,4-5,6A12,12,0,0,1,1596,392.9a2.54,2.54,0,0,1-1.83.9c-1.14,2.56-2.25,5.13-3.45,7.66a7,7,0,0,1-5.54,3.83l-8.73,11.08a5.61,5.61,0,0,1-.69,2.61l-5.5,8.67c-3.12,7-6.06,14.17-11.13,20.12-.46,3.07-2,5.26-5.25,5.51-4.68.34-9.19.21-13.38-2.65-2.63-1.79-5.88-2.66-8.79-4.07-2.49-1.21-5.22-2.1-6.9-4.55l-3-2.63a6.53,6.53,0,0,1-5.51-3.08c-5.58-.45-8.88-4-11.62-8.41-2.29-.22-4.43-.76-5.89-2.75a6.67,6.67,0,0,1-5.25-3.31,3.77,3.77,0,0,1-3.08-2.58l0,.17c-3.37-1.39-6.88-2.53-10.09-4.23-5.77-3.05-7.69-8.57-5.72-15.14.65-2.16,1.13-4.38,1.68-6.56a29.51,29.51,0,0,1-8.61-8.39,12.41,12.41,0,0,1-8.64-5.55c-13.39-2-26-6.12-36.93-14.32a6.56,6.56,0,0,1-5.74-3.08,8.82,8.82,0,0,1-5.92-2.74q-4.08-4.39-8.14-8.79c-4.94-3.49-10.27-6.54-14.73-10.56-8.52-7.69-18.74-12.17-29-16.63a20.35,20.35,0,0,0-6.81-1.36,24.56,24.56,0,0,1-9.39-2.54l-11.3-.09,0-.07a3.62,3.62,0,0,1-2.9,2.57l-8.07.58c-3.39,3.26-7.75,2.44-11.83,2.81l.18.18c-2.15,2.85-5.41,3.68-8.59,4.47-4.09,1-8.25,1.74-13,2.72-1.07-.76-2.66-1.72-4.06-2.91a6.63,6.63,0,0,0-6.6-1.34c-3.59,1.14-7.07,2.6-10.63,3.84-1.76.61-3.6,1-5.41,1.51-2.7,2.75-6.23,4-9.71,5.28-2.6,1-5.17,2.08-7.75,3.12l-11.49,8.52c-4.82,5.07-11.34,6.37-17.75,7.58-1.5.28-3.37-1.43-5.07-2.23l-11.4-5.32c-5-2.36-9.76-5.43-15.33-6.67-2.33-.52-3.88-2.47-5.14-4.49a44.08,44.08,0,0,1-6.5-.43c-1.6-.33-3.06-1.37-4.58-2.09-2.75-1.76-5.42-3.58-8.91-3.71-5.54-.2-11.09-1.94-16.61.15a26.75,26.75,0,0,1-2.91,2.59c-2.78,1.85-5.71,2.15-8.59.23a33.09,33.09,0,0,1-3-2.52l-5.39-.09a5.68,5.68,0,0,1-5.74,2.41c-2-.64-2.53-2.54-3.66-4-3.49-4.43-5.62-4.84-10.92-2.68-.87.35-1.72.74-2.58,1.11l-22.19.49c-.37.29-.7.72-1.12.85-11.36,3.32-22.94,5.27-34.77,4.34-3.08-.24-6-2.38-9.27-3.74a67.46,67.46,0,0,0-20.2,4.75c-5.12,2.2-10.85,3-16.34,4.28-2,.45-3.64-.61-5.05-2-2.61-.14-5.23-.26-7.84-.43a8.15,8.15,0,0,1-5.83-2.52c-6.51,0-13,.1-19.53.1-3.88,0-7.22,1.57-10.45,3.47a8.72,8.72,0,0,0-4,9.6c.88,3.11,2.22,6.08,3.36,9.12a10.93,10.93,0,0,1,7.07,3.59c1.27,1.33,2.33,2.77,2.21,4.73-.18,3.11.29,6.34-1.62,9.15a26.78,26.78,0,0,1-.1,4.25,8.42,8.42,0,0,1-7.5,7.32c-9,1.32-15.46-3-21-9.33a44.64,44.64,0,0,1-3.19-4.71c-1.25-.63-3-.93-3.66-1.94-4.73-7.23-11.2-12.69-17.77-18.08-.36-.3-.82-.48-1.18-.78-4.25-3.56-6.32-9.35-12.42-11.12-4.94-1.44-9.55-4-14.42-5.73a15,15,0,0,1-7.59-5.95c-1.57-2.25-4-3.91-6-5.85-1.69-1.61-3.37-3.23-5-4.85L826,302.49c-7.19,0-12.31-4.06-17-8.83-3.18-1.45-6.51-2.68-8.73-5.62-4.43-.72-8.59-2-11.78-5.45a5,5,0,0,1-2.32-.38c-4.09,0-6.82-2.3-9-5.47-5.33.17-10.2-2-14.67-4.22S753,268.66,749,265.42c-9.26-3.14-18.54-6.25-27.77-9.47a18.43,18.43,0,0,1-3.53-2.21c-3.17,0-6.39.22-8.57-2.79q-1.41,0-2.82-.11c-2.76,0-5.52,0-8.28,0a7.63,7.63,0,0,1-6.06-2.73h0l-1.37,0-1.37-.05-22.71.1c-1.14.77-2.26,2.18-3.41,2.21-5.55.13-9.6,3.18-13.65,6.36a8.26,8.26,0,0,1-2.65,6c-.45,1.78-1,3.64-2.87,4.3a6.78,6.78,0,0,1-4,.19c-3-.91-6-2-8.2-4.53-1.68-.7-3.67-1-5-2.16a29.08,29.08,0,0,0-23.12-6.78c-1.25,2.07-3.25,2.84-5.49,3.23-2.3,2.82-5.77,2.86-8.87,3.45a9.34,9.34,0,0,1-5.33-.93c-5.86-2.77-11.6-5.77-18.1-6.9-.76-.13-1.37-1.17-2-1.79-2.42-1-4.88-1.82-7.24-2.91a42.33,42.33,0,0,1-4.35-2.65h.06a16.14,16.14,0,0,1-11.38-5.81l-5.7-2.95a3.88,3.88,0,0,1-3-2.64V234a8.24,8.24,0,0,1-2.64-.63,67.62,67.62,0,0,0-14.63-7.15c-2-.7-3.69-2.51-5.52-3.81-1.88-1.05-3.77-2.09-5.63-3.17A6.34,6.34,0,0,1,500.7,214l-8.76-8.44-2.57-2.26-2.73-3.46c-2.3-.23-4.26-1-5.38-3.22l-.13-.12c-2.82-1.28-5.69-2.44-8.43-3.88-2.33-1.22-4.49-2.75-6.73-4.14-4.15-.18-8.32-.64-12.45-.47a30.15,30.15,0,0,1-18.14-5.38c-3.58-.45-7.17-.85-10.74-1.36-4-.57-8-1.22-12.05-1.83-3.46.52-6.76.44-9.42-2.31a6.76,6.76,0,0,1-1.39-.12,75.24,75.24,0,0,0-23.38-3c-4.46,2.49-9.36,2.65-14.28,2.68l-1.09.36-1.15,0c-3.62,2-7.34,3.87-10.85,6s-6.85,4.77-10.34,7-7.1,4.39-10.66,6.57c-.12,4-2.5,7-4.92,9.88-2.71,3.24-2.35,6.68-1.4,10.58,1.08,4.44,4,7.34,6.81,10.44,4.9.85,5.14,4.65,5.37,8.45,6,1,11.69,2.9,16.48,6.93a6.15,6.15,0,0,0,5.23,1.14,10.71,10.71,0,0,1,4.09,0c2.23.51,4.39,1.35,6.25,1.94,3,3.77,3.42,8,4.51,12a7.67,7.67,0,0,1-2.3,7.64,3.66,3.66,0,0,1-.21,2.2q-.12,4.22-.24,8.45a9.33,9.33,0,0,1-2.43,6.42q-.06,2.55-.12,5.09l3,5.48v-.1c4.86.06,7.85,3.15,10,6.88,2.33,4.07,4,8.49,6,12.79.6,1.34-.81,4-2.34,4.72-.42.19-.79.59-1.22.67-6.52,1.22-13.07,1.66-19.58,0a8.27,8.27,0,0,1-2.3-1.58c-8.85.1-17.11-2.24-25-6a39.7,39.7,0,0,1-17.75-2.46c-4.28-1.71-8.94-2.43-13.37-3.78a15.9,15.9,0,0,1-3.49-2.15,12.76,12.76,0,0,1-2.73-.28q-17-5.53-34-11.14a18.12,18.12,0,0,1-2.83,0c-12.6-1.93-25.27-3-38-3.74-1.78-.1-3.5-1.18-5.25-1.81-4.29,2.2-9,2.28-13.64,2.88-2.35,2.3-5.4,2.51-8.42,2.81-.55.76-1.07,1.54-1.65,2.28-1.58,2-2,4.26-.79,6.53,1.12,2.05,2.64,3.88,3.8,5.91,2,3.59,1.59,6.64-1.39,10.23-.89,1.08-1.83,2.11-2.75,3.17l2.55,2.92c3.52.19,5.72,1.86,6.13,5.51l.11-.22a14.75,14.75,0,0,1,2.52,3.1c1.73,3.95,4.88,6.44,8.31,8.71,1.69.55,3.78.66,5,1.74,3.37,3,6.42,6.38,9.53,9.67,1.87,2,3.62,4.06,5.42,6.09,4.85,2.15,6.46,6,5.87,11.05a2.49,2.49,0,0,1,.25,2l2.7,3.54c2.31,3.07,2.31,3.07-.16,6-.26,2.27-.91,4.35-2.86,5.78,0,4.07-2.16,6.77-5.55,8.68l0-.07c-.29.36-.51.89-.88,1.06-6.68,3.07-13.23,3.39-19.51-1.08l.1.1c-7.79-.84-15.72.5-23.44-1.72a10,10,0,0,0-5.43.36c-3.85,1.23-7.29.13-10.77-1.23-1.87,1.5-4.07,1.78-6.38,1.85-3.63.1-7.25.37-10.87.57-1.1.82-2.08,1.95-3.32,2.39-5.21,1.87-10.5,3.52-15.75,5.28a10.67,10.67,0,0,1-8.07-.54,9.59,9.59,0,0,1-2.43-1.32c-3.84-3.38-8.36-3.42-13-2.79-5.06,2.38-10.06,4.87-15.19,7.07a3.66,3.66,0,0,1-4.77-1.78l-.1-.09-3.1-2.23a131.19,131.19,0,0,0-17,10.88c-1.1,2.51-3.18,3.14-5.68,3a27.12,27.12,0,0,0-14.31,2.83c-.3.35-.54.84-.92,1-3,1.51-10.78,8.27-12.81,10.82-.82,1-2.21,1.62-3.34,2.41h0c-1.07,2.12-2.46,4.29-4.76,4.78-4.88,1.05-6.86,4-7.18,8.71-.14,2.12-1.95,3-3.86,3.34a28,28,0,0,1-4.16,0l-.07.12c-1.19,2.27-3.35,2.72-5.61,3,1.66,3.44,3,6.92,2.87,10.89-.17,3.79,0,7.6,0,11.4q0,91.14,0,182.28,2.46-.14,4.93-.23Z"/>
    </svg>
    <section class="about wh-section pb-50 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div>
                        <i class="icon ion-ios-heart"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero
                            pretium, sollicitudin feugiat libero.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div>
                        <i class="icon ion-ios-chatboxes"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero
                            pretium, sollicitudin feugiat libero.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div>
                        <i class="icon ion-ios-star"></i>
                    </div>
                    <div class="service-entry">
                        <h3>Decouvrir</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat tellus eget libero
                            pretium, sollicitudin feugiat libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEMOIGNAGES -->
    <section class="services">
        <div class="container">
            <div class="col-md-6 col-sm-12 services-left visible-lg">
                <div>
                    <img class="serv-img" src="{{ asset('img/unic.png') }}" alt="image">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 services-rigth">
                <div class="row mb-50">
                    <div class="col-md-12 col-sm-12">
                        <i class="icon ion-ios-lightbulb-outline"></i>
                        <h2>Des rencontres uniques</h2>
                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source
                            de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du
                            Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède
                            une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du
                            français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous
                            conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
                            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent
                            intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases
                            embarassantes).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source
                            de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du
                            Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède
                            une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du
                            français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous
                            conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
                            Plusieurs versions sont apparues avec le temps, parfois par accident, souvent
                            intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases
                            embarassantes).<br>
                            <button type="submit" class="btn black"><span>Contactez-nous</span></button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 secontact-left visible-lg">
                <div class="pt-50">
                    <img class="serv-img" src="{{ asset('img/office-1.jpeg') }}" alt="image">
                </div>
            </div>
        </div>
    </section>
        @include('partials.footer')
    </body>
</html>