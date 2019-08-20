<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Produtos</title>
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
    <h5 class="card-title d-flex justify-content-center">Editar Produtos</h5>
    <table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Editar</th>
      <th scope="col">Inativar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produto as $produto)
    <tr>
      <td>{{$produto->nome}}</td>
      <td>{{$produto->descricao}}</td>
      <td>{{$produto->preco}}</td>
      <td>{{$produto->fornecedor->nome}}</td>
      <td><a class="btn btn-warning" href="{{url('produto/'.$produto->id.'/edit')}}">Editar</a></td>
      <td>
      <form action="{{url($produto->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Inativar</button>
                </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
    
  </div>
</div>
</div>
    
</body>
</html>