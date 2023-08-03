@extends('layouts.base')

@section('contents')
<h2>Questi sono i nostri treni</h2>
<h3>ATTENZIONE: oggi è: 2018-04-30</h3>

<table class="table table-striped">
  
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">dep station</th>
        <th scope="col">dep date</th>
        <th scope="col">dep time</th>
        <th scope="col">arr station</th>
        <th scope="col">arr date</th>
        <th scope="col">arr time</th>
        <th scope="col">company</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($collTrains as $train)
            <tr>
                <th scope="row">{{$train->id}}</th>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->departure_date}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->arrival_date}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->company}}</td>
        </tr>     
        @endforeach
      
      
    </tbody>
  </table>

  @endsection