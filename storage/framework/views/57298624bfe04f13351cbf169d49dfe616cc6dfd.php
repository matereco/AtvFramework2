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
                        <?php $__currentLoopData = $vendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <table class="table">
                            <tr>
                                <th>
                                    *Produto: <?php echo e($venda->produto); ?><br>
                                    *Valor: R$<?php echo e($venda->preco_unitario); ?><br>
                                    *Quantidade: <?php echo e($venda->quantidade); ?><br>
                                    *Total:R$<?php echo e($venda->preco_unitario * $venda->quantidade); ?><br>
                                </th>


                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </table>

            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\dev\example-app\resources\views/produtos/listagemProdutos.blade.php ENDPATH**/ ?>