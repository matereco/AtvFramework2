<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>##Produtos##</h1>
                        @foreach ($vendas as $venda)

                        <table class="table">
                            <tr>
                                <th>
                                    *Produto: {{$venda->produto}}<br>
                                    *Valor: R${{ $venda->preco_unitario}}<br>
                                    *Quantidade: {{ $venda->quantidade}}<br>
                                    *Total:R${{$venda->preco_unitario * $venda->quantidade}}<br>
                                </th>


                            </tr>

                        @endforeach


                </table>

            </div>
        </div>
    </div>
</body>
</html>
