@extends('layouts/main')

@section('content')

<table class="table">

    <thead>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Stazione di arrivo</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>

    </thead>

    <tbody>
        
        @foreach($trains as $singleTrain)
            <tr>
                <td>{{$singleTrain->company}}</td>
                <td>{{$singleTrain->departure_station}}</td>
                <td>{{$singleTrain->arrival_station}}</td>
                <td>{{$singleTrain->departure_time}}</td>
                <td>{{$singleTrain->arrival_time}}</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection