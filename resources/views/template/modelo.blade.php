<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Titulo</title>
        <link rel='stylesheet' href="{{url('css/app.css')}}"/>
        <link rel='stylesheet' href="{{url('css/myStyle.css')}}"/>
    </head>
    <body class="container">
        
        <header style="margin-top:5px" class="jumbotron">
            <h1>Web Business</h1>
            <h3>Serviço integrado com API remota</h3>
        </header>
         <div class="content-custom">
            <a href="#" class=" btn btn-default">Web Business</a>
            <a href="{{url('/')}}" class=" btn btn-primary">Home</a>
            <a href="{{url('cadastro')}}" class=" btn btn-success">Cadastro</a>
            <a href="#" class=" btn btn-info">Consulta</a>
            <a href="#" class=" btn btn-warning">Edição</a>
      
      
            
        
            
        
        @yield('content')
        
       </div>
    </body>
</html>
