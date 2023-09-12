@extends('layouts.app')

@section('page-title', 'home')


@section('main-content')
<h1 class="my-3">
BIGLIETTI TRENO
</h1>


<div class="container">
  <div class="row">
    @foreach ($trains as $train)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Agenzia: {{ $train->agency }}</h5>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">partenza</th>
                <th scope="col">destinazione</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $train->departure_station }}</td>
                <td> {{ $train->arrival_station }}</td>
              </tr>
            </tbody>
          </table>

          <p>
            Data viaggio:
            {{ date('d/m/Y', strtotime($train->arrival_time))}}
          </p>
          <p>
            Partenza: 
            {{ date('H:i', strtotime($train->departure_time))}}
          </p>
          <p>
            Arrivo previsto: 
            {{ date('H:i', strtotime($train->arrival_time)) }}
          </p>
          <p>prezzo: {{ $train->price }}€</p>
          <a href="#" class="btn btn-primary mt-3">Info Treno</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@endsection