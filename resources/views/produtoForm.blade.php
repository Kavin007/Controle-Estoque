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
    <a class="nav-link" href="{{('/produto/create')}}">Cadastrar Produtos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{('/fornecedor')}}">Editar Fornecedor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{('/fornecedor')}}">Fornecedores</a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{'/produto'}}">Produtos</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Inativos</a>
  </li>
</ul>
<div class="container" style="padding: 60px">
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Cadastro de Produtos</h5>

    <form action = "{{url(isset($produto) ? 'produto/'.$produto->id : 'produto/')}}" method="post">
    @csrf
    @if(isset($produto))
     @method('PUT')
    @endif
        <div class="form-group">
            <input type="text" class="form-control" name="nome" value="{{isset($produto) ? $produto->nome : ''}}" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="descricao" value="{{isset($produto) ? $produto->descricao : ''}}" placeholder="Descrição">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="preco" value="{{isset($produto) ? $produto->preco : ''}}" placeholder="Preço">
        </div>

        <div class="form-group">
            <select class="form-control" name="fornecedor_id">
                @foreach($fornecedores as $fornecedor)
                    <option {{ isset($fornecedor) && $fornecedor->fornecedor_id == $fornecedor->id ? 'selected' : '' }} value="{{ $fornecedor->id }}" >{{ $fornecedor->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    
  </div>
</div>
</div>
    
</body>
</html>