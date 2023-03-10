@extends('layouts.app')

@section('title', 'La toile - Accueil')

@section('content')
<div class='container'>
    <!-- <h1>La toile</h1> -->

    <div class="flexaccueil">
        <div>
            <h2>Entrez dans</h2>
            <h1 id="description_exposition">
            Une exposition d'art numérique 100% française.
            </h1>
        </div>


    <a class="forward" href="{{route('salles.index')}}"><i class='bx bx-right-arrow-circle' ></i></a>
    </div>

</div>


<div class="metro">
    <img src="{{asset('/images/metrofen.png')}}" />
</div>

<div class="mentions" id="mentionscolor">
        <a href="{{route('mentions')}}">mentions légales</a>
    </div>

@endsection
