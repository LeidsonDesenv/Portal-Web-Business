@extends('template/modelo')

@section('content')
<h1>Lista de Clientes</h1>
<table class="table table-striped">
<tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Tel</th>
    <th>Endereço</th>
    <th>UF</th>
    
</tr>
@foreach($showtable as $colluns)
<tr>
    <td> {{$colluns->customer_name}} </td>     
    <td> {{$colluns->email}} </td>
    <td>{{$colluns->phone}}</td>
    <td>{{$colluns->address}}</td>
    <td>{{$colluns->UF}}</td>
</tr>
    
@endforeach
</table>
@endsection