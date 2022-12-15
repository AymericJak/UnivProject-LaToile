@extends('layouts.appSalles')

@section('title', 'Liste de salles')

@section('content')

<div class="retour">
    <a href="{{route('accueil')}}"><i class='bx bx-left-arrow-circle' ></i></a>
</div>

<h1>Choisis ton arrêt</h1>



@if(!empty($salles))
        <div class="ronds">
            @foreach($salles as $salle)
            <div class="tabflex">
            <a href="{{route('salles.show',$salle->id)}}">
                <div onmouseover="display{{$salle->id}}(this)" onmouseout="nodisplay{{$salle->id}}(this)" class='round a{{$salle->id}}'>

                {{$salle->id}}

                </div> 
                </a>

                <div class="descrioeuvre{{$salle->id}}">
                    <p>{{$salle->description}}</p>
                </div>
            </div>
                @if($salle->id!==5)
                    @if($salle->id==1 Or $salle->id==3)
                    <img src="{{asset('/images/lineup.svg')}}">
                    @else
                    <img src="{{asset('/images/linedown.svg')}}">
                    @endif
                @endif
            @endforeach
        </div>
    @else
        <h3>aucune salle</h3>
    @endif



    <div class="metro">
    <img src="{{asset('/images/metro2.png')}}" />
    </div>

<script src='hover.js'>

</script>

@endsection
