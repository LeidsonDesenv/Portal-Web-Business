@extends('template/modelo')

@section('content')
<form>
    <h2 class="forte">Cadastre seus Dados : </h2>    
       
    <table class="">
        <tr>
            <td>Nome :</td> <td><input class="rounded" type="text" size="40"/></td>
        </tr>
        <tr>
            <td>Email:</td><td><input class="rounded" type="email" size="30"/></td>
        </tr>
        <tr>
            <td>Tel:</td><td><input class="rounded" type="tel" /></td>
        </tr>
        <tr>
            <td style="vertical-align: top ">Endereço:</td><td>  
                <input class="rounded" type="text" size="80"/>
            </td>
        </tr>
        <tr>
            <td>CEP</td><td><input class="rounded"  type="tel" /></td>
        </tr>
        <tr>
            <td>CPF</td><td><input class="rounded" type="tel" /></td>
        </tr>
        <tr>
            <td>UF</td>
            <td>
                <select>
                    <option>SP</option>
                </select>
            </td>
        </tr>        
    </table>
    <input type="submit" class="btn btn-success"/>
    
</form>
@endsection
