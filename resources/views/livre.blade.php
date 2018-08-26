@extends('template')

@section('titre')
    Livres
@endsection

@section('contenu')
    <center>
        <h2 class="h1-responsive font-weight-bold text-center my-5">Livres</h2>
        <div class="underline"> </div>
    </center>

    {{-- debut Livres (en paperback) --}}
    <div class="mt-5" >
        <div class="card text py-2 titlePart">
            <span class="ml-3"><i class="fas fa-book "> </i> Livres (en paperback) <br/> <span>
        </div>
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
                    <img src="{{ asset('img/book.jpg') }}" class="img-fluid"/>
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
                    <img src="{{ asset('img/book.jpg') }}" class="img-fluid"/>
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
                    <img src="{{ asset('img/book.jpg') }}" class="img-fluid"/>
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
                    <img src="{{ asset('img/book.jpg') }}" class="img-fluid"/>
                </div>
                <div class="card-footer cardFooterlivre">
                    <span class="float-right"><b>$40</b></span>
                </div>
            </div>
        </div>
    </div>
    
    {{-- fin  Livres (en paperback) --}}

    <hr style="margin-top : 5% !important"/>

    {{-- debut Livres en pdf --}}
    <div class="mt-5" >
            <div class="card text py-2 titlePart">
                <span class="ml-3"><i class="fas fa-book "> </i> Livres en  pdfs <br/> <span>
            </div>
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
                        <img src="{{ asset('img/pdf.png') }}" class="img-fluid"/>
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
                        <img src="{{ asset('img/pdf.png') }}" class="img-fluid"/>
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
                        <img src="{{ asset('img/pdf.png') }}" class="img-fluid"/>
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
                        <img src="{{ asset('img/pdf.png') }}" class="img-fluid"/>
                    </div>
                    <div class="card-footer cardFooterlivre">
                        <span class="float-right"><b>$40</b></span>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- fin  Livres pdf --}}

@endsection