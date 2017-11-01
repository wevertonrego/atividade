<!DOCTYPE html>
<html>
<head>
	<title>ATIVIDADE 01 E 02 </title>
</head>
<body>
<h5>Criei uma rota que recebe 3 nomes, e exibe em uma VIEW (atividade 01 - 6 questão )</h2>
<h6></h6>
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ORDENAR</th>
      <th scope="col">USUARIOS</th>
  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>NOME</td>
      <td>{{$nome1}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>NOME</td>
      <td>{{$nome2}}</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>NOME</td>
      <td>{{$nome3}}</td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
       var res = parseInt({{$nome3}}) + parseInt({{$nome3}});
      	document.write('', res);
      </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
