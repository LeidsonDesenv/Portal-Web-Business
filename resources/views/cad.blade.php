@extends('template/modelo')

@section('content')
@if(isset($edit))
    <form method="post" action='{{url("savealtcustomers/{$edit->idCustomer}")}}'>
@else
<form method="post" action="{{route('addcustomers')}}">
@endif
    {{csrf_field()}}
    <h2 class="forte">Cadastre seus Dados : </h2>    
    
    <table class="">
        <tr>
            <td>Nome :</td> 
            <td><input name="customer_name" required
                       value="{{$edit->customer_name or ''}}"
                                       class="rounded" type="text" size="80"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input name="email" 
                       value="{{$edit->email or ''}}"
                       class="rounded" type="email" size="30"/></td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td><input  name="phone"  
                        value="{{$edit->phone or ''}}"
                        class="rounded" type="tel" /></td>
        </tr>
        <tr>
            <td style="vertical-align: top ">
                Endereço:</td>
            <td>  
                <input class="rounded" 
                       value="{{$edit->address or ''}}"
                       name="address"  type="text" size="80"/>
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
@if(isset($edit))
    <input style="margin-top:10px" type="submit" class="btn btn-warning" value="Atualizar Dados"/>    
@else
    <input style="margin-top:10px" type="submit" class="btn btn-success" value="Enviar"/>
@endif 
</form>

@if(isset($edit))
    <form method="post" action='{{url("deletacustomer/{$edit->idCustomer}")}}'>
        {{csrf_field()}}
            <input style="margin-top:10px" type="submit" class="btn btn-danger" value="Deletar Cadastro"/>    
    </form>
@endif 



@if(isset($errors) and count($errors) > 0)
    <div    class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
@endif



@endsection
