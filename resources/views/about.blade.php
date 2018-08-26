@extends('template')

@section('titre')
    A propos
@endsection

@section('contenu')
    <center>
        <h2 class="h1-responsive font-weight-bold text-center my-5">A propos</h2>
        <div class="underline"> </div>
    </center>

   <div class="mt-4 card">
       <div class="card-body">
            <div class="mt-3 row"> 
                <div class="col-12 ">
                    <div class="row">
                        {{-- debut logo --}}
                        <div class="col-3">      
                            <img src="{{ asset('img/logo.jpeg') }}" class="image img-fluid"/>   
                        </div>
                        {{-- fin logo --}}
        
                        {{-- debut text --}}
                        <div class="col-9 mt-5">
                            <div class="text">
                                <b>KADAGALI INSTITUTE</b> est une institution spécialisée dans l’enseignement de
                                l’anglais en ligne et à domicile.<br/>
                                Cette institution a été créée par <i>Monsieur Yao Messa Kadagali</i>.
                            </div>         
                        </div>
                        {{-- debut text --}}
                    </div> 
                </div>
            </div>
       </div>
   </div>

   <div class="mt-5">
        <center>
            <h2>Qui est Monsieur Yao Messa Kadagali? </h2>
            <div class="underline" style="margin-top:0px; !important"> </div>
        </center>
        
        {{-- debut bibliographie --}}
        <div class="mt-3 row"> 
            <div class=" mt- 3col-12">
                <div class="row">
                    {{-- debut text --}}
                    <div class="col-9 mt-5">
                        <h3><i class="fas fa-hand-point-right icon-text"></i>&nbsp; Bibliographie </h3>
                        <div class="text">
                            <span class="ml-5"><b>Yao Messa KADAGALI </b></span> est né le 24 mai 1990 à Atchavé (Haho), un village de la région 
                            des plateaux (la plus grande région du Togo). Yao vient d'une famille très modeste dont le
                                père et la mère sont tous deux des cultivateurs. Il est le troisième d'une fratrie de six (6) enfants. 
                        </div>         
                        </div>
                    {{-- debut text --}}

                    {{-- debut logo --}}
                    <div class="col-3 mt-2">  
                        <center>    
                            <img src="{{ asset('img/logo.jpeg') }}" class="image img-fluid"/>   
                        </center>
                    </div>
                    {{-- fin logo --}}        
                </div> 
            </div>
        </div> 
        {{-- fin bibliographie --}}     

        <hr style="margin-top : 3% !important"/>

        {{-- debut Etudes --}}
        <div class=" row"> 
                <div class=" mt- 3col-12">
                    <div class="row">
                        {{-- debut text --}}
                        <div class="col-9 mt-5" >
                            <h3><i class="fas fa-hand-point-right icon-text"></i>&nbsp; Etudes </h3>
                            <div class=" text" >
                                <p>
                                    <span class="ml-5"><b>Yao Messa KADAGALI alias Joël</b></span> a fait un parcours brillant. <br/>
                                </p>
                                <p>
                                    <span class="ml-5">Il a débuté</span> ses études primaires en 1996 à l'école primaire publique d'Atchavé son village d'origine. 
                                    Dès ses débuts il s'est fait distingué parmi les petits de son âge en occupant le premier rang pour passer
                                    en classe supérieure. Cet exploit a provoqué l'attention de toute l'administration de l'école qui l'a suivi
                                    de près jusqu'à l'obtention de son premier certificat d'étude : le CEPD en 2002 où il a fini troisième (3ème) de son école. 
                                </p>
                                <p>
                                    <span class="ml-5">Il a entamé</span> ses études du secondaire avec la même énergie. En quatre ans d'études au premier cycle du secondaire,
                                    il a parcouru entre la préfecture de Haho et Lomé quatre différents établissements où il a pu s'adapter. Dans tous
                                    ces établissements, il a laissé son nom aux tableaux d'honneur:
                                </p>
                                <p class="ml-5">
                                    <i class="fas fa-thumbs-up icon-text"></i> 2003 : Premier en sixième (6ème) <br/>
                                    <i class="fas fa-thumbs-up icon-text"></i> 2004 : Troisième en cinquième (5ème)<br/>
                                    <i class="fas fa-thumbs-up icon-text"></i> 2005 : Quatrième en quatrième (4ème)<br/>
                                    <i class="fas fa-thumbs-up icon-text"></i> 2006 : Premier en troisième (3ème), année où il a décroché son deuxième 
                                                                                        <span style="margin-left:12% !important" >certificat : le BEPC avec mention "bien"</span>. <br/>
                                </p>
                                <p>
                                    <span class="ml-5">Après trois</span> ans d'études au deuxième cycle du secondaire au lycée de Notsè, il décroche son BAC littéraire. 
                                </p>
                                <p>
                                    <span class="ml-5">Yao Messa KADAGALI</span> a une grande affinité pour la langue anglaise. C'est sans surprise qu'il a continué ses études
                                    universitaires en s'inscrivant à la faculté des lettres, département d'anglais. Quatre ans plus tard, il est 
                                    nanti d'une licence LMD.
                                </p>

                
                            </div>         
                            </div>
                        {{-- debut text --}}
    
                        {{-- debut logo --}}
                        <div class="col-3 mt-2">  
                            
                        </div>
                        {{-- fin logo --}}        
                    </div> 
                </div>
            </div> 
        {{-- fin Etudes --}} 
        
        <hr style="margin-top : 4% !important"/>

        {{-- debut Experience --}}
        <div class="mt-3 row"> 
                <div class=" mt- 3col-12">
                    <div class="row">
                        {{-- debut text --}}
                        <div class="col-9 mt-5 " >
                            <h3><i class="fas fa-hand-point-right icon-text"></i>&nbsp; Expériences </h3>
                            <div class="text">
                                <p>
                                    <span class="ml-5">Au cours de l'année</span> de l'obtention de sa licence (2013), il devient membre de <b>Globalbility</b>,
                                    une association de traduction et d'apprentissage de langues locales et de l'anglais. 
                                </p>
                                <p>
                                    <span class="ml-5">En 2015, </span> a suivi un stage-formation de six (6) mois en enseignement au lycée de Notsè. La même année,
                                    il a suivi une formation en assurance et travaillé comme conseiller en assurance
                                    pour le compte de Beneficial Life Insurance. Toujours en 2015, il co-fonde avec deux de ses frères 
                                    Beyond a New Vision, BNV (un groupe de cinéma). 
                                </p>
                                <p>
                                    <span class="ml-5">Depuis 2016,</span> enseigne l'anglais. Au tout début de 2018, il a suivi une formation en production 
                                    de mycélium (méthode graine à graine). En février 2018, il sort son premier livre: Proficient in Grammar, en version physique. 
                                </p>
                                <p>
                                    <span class="ml-5">Yao Messa KADAGALI</span> parle et écrit le français, l'anglais et l'éwé, sa langue maternelle et langue dominante du Sud-Togo. 
                                </p>
                            </div>         
                            </div>
                        {{-- debut text --}}
    
                        {{-- debut logo --}}
                        <div class="col-3 mt-2">  
                            
                        </div>
                        {{-- fin logo --}}        
                    </div> 
                </div>
            </div> 
            {{-- fin Experience --}}     
   </div>
@endsection