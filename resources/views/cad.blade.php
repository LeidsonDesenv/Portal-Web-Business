@extends('template/modelo')

@section('content')
<form method="post" action="{{route('addcustomers')}}">
    {{csrf_field()}}
    <h2 class="forte">Cadastre seus Dados : </h2>    
       
    <table class="">
        <tr>
            <td>Nome :</td> <td><input name="customer_name" required class="rounded" type="text" size="80"/></td>
        </tr>
        <tr>
            <td>Email:</td><td><input name="email"  class="rounded" type="email" size="30"/></td>
        </tr>
        <tr>
            <td>Tel:</td><td><input  name="phone"  class="rounded" type="tel" /></td>
        </tr>
        <tr>
            <td style="vertical-align: top ">
                Endereço:</td><td>  
                <input class="rounded" name="address"  type="text" size="80"/>
            </td>
        </tr>         
        <tr>
            <td>UF</td>
            <td>
                <select name="UF">
                    <option>SP</option>
                    <option>RJ</option>
                    <option>MG</option>                    
                </select>
            </td>
        </tr>        
    </table>    
    <input style="margin-top:10px" type="submit" class="btn btn-success"/>
    
@if(isset($errors) and count($errors) > 0)
    <div    class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
@endif

</form>
@endsection
