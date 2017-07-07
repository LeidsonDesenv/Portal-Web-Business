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
    <th>Editar</th>
    
</tr>
@foreach($showtable as $colluns)
<tr>
    <td> {{$colluns->customer_name}} </td>     
    <td> {{$colluns->email}} </td>
    <td>{{$colluns->phone}}</td>
    <td>{{$colluns->address}}</td>
    <td>{{$colluns->UF}}</td>
    <td><a class=" btn btn-warning" href="{{url("{$colluns->idCustomer}/editcustomer")}}">Editar</a></td>
</tr>
    
@endforeach
</table>
@endsection