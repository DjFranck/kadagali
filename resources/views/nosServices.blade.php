@extends('template')

@section('titre')
    Nos Services
@endsection

@section('contenu')
    <center>
        <h2 class="h1-responsive font-weight-bold text-center my-5">Nos Services</h2>
        <div class="underline"> </div>
    </center>

    {{-- cours en ligne --}}
    <div class="pb-4 mt-5 titreService"> <b>
        <span class="pr-2 pl-3 py-3 titleEnumaration ">
            <b>1</b>
        </span> &nbsp;
        Cours en Ligne
    </div>

    <div class="row my-4">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <center>
                        titre du livre ici
                    </center>
                </div>
                <div class="card-body">
                    <img src="{{ asset('img/youtube.jpg') }}" class="img-fluid"/>
                </div>
                <div class="card-footer cardFooterlivre">
                    <span class="float-right"><b>$40</b></span>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <center>
                        titre du livre ici
                    </center>
                </div>
                <div class="card-body">
                    <img src="{{ asset('img/youtube.jpg') }}" class="img-fluid"/>
                </div>
                <div class="card-footer cardFooterlivre">
                    <span class="float-right"><b>$40</b></span>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <center>
                        titre du livre ici
                    </center>
                </div>
                <div class="card-body">
                    <img src="{{ asset('img/youtube.jpg') }}" class="img-fluid"/>
                </div>
                <div class="card-footer cardFooterlivre">
                    <span class="float-right"><b>$40</b></span>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <center>
                        titre du livre ici
                    </center>
                </div>
                <div class="card-body">
                    <img src="{{ asset('img/youtube.jpg') }}" class="img-fluid"/>
                </div>
                <div class="card-footer cardFooterlivre">
                    <span class="float-right"><b>$40</b></span>
                </div>
            </div>
        </div>
    </div>
    
    {{--fin cours en ligne --}}

    <div class="mt-5"> &nbsp; 
        
    </div>

   {{--debut cours à domicile --}}
   <div class="ml-3 pb-4 mt-5 titreService"> 
        <span class="pr-2 pl-3 py-3 titleEnumaration ">
            <b>2</b>
        </span> &nbsp;
        Cours à domicile
    </div>
    
    <div class="mt-3 ">
        <div class="card text">
            <div class="card-body">
                <center>
                    Vous avez besoin d’améliorer votre niveau d’anglaise, un professeur de Kadagali
                    Institute peut venir vous enseigner à domicile.
                </center>
            </div>
        </div>

        <div class="mt-4 card text">
            <div class="card-body">
                <center>
                    Vous avez une école, entreprise ou organisation et vous avez besoin d’un
                    professeur d’anglaise pour vos élèves, employés, members, contactez nous et un de
                    nos professeurs viendra vous dispenser les cours dans vos locaux.
                </center>
            </div>
        </div>

        <center class="mt-4">
            <a href="{{route('contact')}}">
                <button class="btn btnKagali">
                    Contactactez-nous pour plus d'informations
                </button>
            </a>
        </center>
    </div>
 
    
    {{-- fin cours à domicile --}}

    <div class="mt-5"> &nbsp; 
    
    </div>
        
    {{-- debut traduction --}}
    <div class="ml-3 pb-4 mt-5 titreService"> 
        <span class="pr-2 pl-3 py-3 titleEnumaration ">
            <b>3</b>
        </span> &nbsp;
        Traductions
    </div>

    <div class="mt-4 card text">
        <div class="card-body">
            <center>
                    A Kadagali Institute, nous sommes spécialisés dans la traduction de vos
                    documents, livres etc d’anglaise en français ou de français en anglaise.
            </center>
        </div>
    </div>

    <center class="mt-4">
        <a href="{{route('contact')}}">
            <button class="btn btnKagali">
                Contactactez-nous pour plus d'informations
            </button>
        </a>
    </center>
    
    {{-- fin   traduction--}}

@endsection