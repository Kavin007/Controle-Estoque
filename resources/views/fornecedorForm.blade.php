<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="{{('/fornecedor/create')}}">Cadastrar Fornecedor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{'/produto/create'}}">Cadastrar Produtos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{('/fornecedor')}}">Fornecedores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{('/produto')}}">Produtos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Inativos</a>
  </li>
</ul>
<div class="container" style="padding: 60px">
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Cadastro de Fornecedor</h5>

    <form action = "{{url(isset($fornecedor) ? 'fornecedor/'.$fornecedor->id : 'fornecedor/')}}" method="post">
    @csrf
    @if(isset($fornecedor))
     @method('PUT')
    @endif

        <div class="form-group">
            <input type="text" class="form-control" name="nome" value="{{isset($fornecedor) ? $fornecedor->nome : ''}}" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cnpj" value="{{isset($fornecedor) ? $fornecedor->cnpj : ''}}" placeholder="CNPJ">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{isset($fornecedor) ? $fornecedor->email : ''}}" placeholder="Email">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    
  </div>
</div>
</div>
    
</body>
</html>