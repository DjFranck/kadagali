@extends('template')


@section('contenu')  
<div class="section">
    <center>
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contactez-nous</h2>
        <div class="underline"> </div>
    </center>

    <div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
            {{-- debut formulaire --}}
            <form id="contact-form" name="contact-form" action="#" method="POST">
                {{-- debutnom et email --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="nom" name="nom" class="form-control">
                            <label for="nom" class="">Votre nom</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Votre adresse mail</label>
                        </div>
                    </div>
                </div>
                {{--fin nom et email --}}
               
                {{--debut  subject --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="sujet" class="form-control">
                            <label for="subject" class="">Le sujet de votre message</label>
                        </div>
                    </div>
                </div>
                {{--fin  subject --}}
                
                {{--debut  message --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Votre Message</label>
                        </div>

                    </div>
                </div>
                {{--debut  message --}}

            </form>
            {{-- fin formulaire --}}

            <div class="text-center text-md-left">
                <a class="btn btn-success" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
            </div>
            <div class="status"></div>
        </div>
      
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Togo,Lomé</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+223 44333 223 333</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>lemail@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>

</div>

@endsection