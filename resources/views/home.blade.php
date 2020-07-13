@extends('template')
  
@section('title')
	Home
@endsection
  
@section('content')
    <div class="container-fluid w-100"> 
        <div class="rounded container col-12 col-md-12 col-lg-10 w-100 p-5" id="margin">
            <div class="row">
                <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-sm-0">
                    <label for="regions">Região</label>
                    <select id="regions" class="custom-select">
                        <option value="AF">Africa</option>
                        <option value="AM">Americas</option>
                        <option value="AS">Asia</option>
                        <option value="EU">Europa</option>
                        <option value="OC">Oceania</option>
                    </select>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 mb-4 mb-sm-0">
                    <a id="search_region" type="submit" class="btn-search mt-30">Pesquisar região</a>    
                </div>

                <div class="col-12 col-sm-3 col-lg-3 mt-5 mt-sm-0">
                    <label for="countries">País</label>
                    <select id="countries" class="custom-select"></select>
                </div>

                <div id="search_country" class="col-12 col-sm-3 col-lg-3 mt-4 mt-sm-0">
                    <a type="submit" class="btn-search mt-30">Pesquisar país</a>    
                </div>
            </div>
            <div class="row" id="flags">
                <img href="{{ route('result') }}" src="" alt="">
            </div>   
        </div>
    </div>
@endsection