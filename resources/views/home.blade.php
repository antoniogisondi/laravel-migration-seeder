@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($trains as $train)
            <div class="col-10">
               <div class="card my-3">
                    <div class="card-title mx-3 my-2">
                        <h3>{{ $train->azienda }}</h3>
                    </div>
                    <div class="card-body">
                        <h5>{{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}}</h5>
                        <h6>Data di partenza: {{$train->data_di_partenza}}</h6>
                        <h6>Orario di partenza: {{$train->orario_di_partenza}}</h6>
                        <h6>Orario di arrivo: {{$train->orario_di_arrivo}}</h6>
                        <h6>Carrozza n° {{$train->numero_carrozze}}</h6>

                        @if ($train->in_orario === 'si')
                            <h6>Il tuo treno arriverà in orario</h6> 
                        @elseif($train->cancellato === 'si')
                            <h6>Il tuo treno è stato cancellato</h6>
                        @else
                            <h6>Il tuo treno arriverà in ritardo di 5 minuti</h6>
                        @endif
                    </div>
               </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

    