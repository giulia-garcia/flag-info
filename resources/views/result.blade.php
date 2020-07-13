@extends('template')
  
@section('title')
	Resultado
@endsection
  
@section('content')
    <div class="container-fluid w-100"> 
        <div class="rounded container col-12 col-md-12 col-lg-8 w-100 p-5" id="margin">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-5 col-lg-5" id="flag">
                        <img class="flag" src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg">
                    </div>
                    <div class="col-7 col-lg-7">
                        <div>
                            <label for="name">Nome:</label>
                            <input id="name" type="text" disabled>
                        </div>
                        <div>
                            <label for="capital">Capital:</label>
                            <input id="capital" type="text" disabled>
                        </div>
                        <div>
                            <label for="region">Região:</label>
                            <input id="region" type="text" disabled>
                        </div>
                        <div>
                            <label for="subregion">Sub-região:</label>
                            <input id="subregion" type="text" disabled>
                        </div>
                        <div>
                            <label for="population">População:</label>
                            <input id="population" type="text" disabled>
                        </div>
                        <div>
                            <label for="languages.nativeName">Linguas:</label>
                            <input id="languages.nativeName" type="text" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ml-3 mt-5 row">
                <span>Países Vizinhos:</span>
            </div>
        </div>
    </div>
@endsection