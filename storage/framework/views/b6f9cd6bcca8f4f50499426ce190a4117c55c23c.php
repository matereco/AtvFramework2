<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Listagem de Veiculos</title>
   <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-12">

               <table class="table">
                   <tr>
                       <th>Nome</th>
                       <th>Categoria</th>
                       <th>Preco</th>
                       <th>Estado</th>
                       <th>Promoção</th>
                   </tr>

                   <?php if(count ($produtos) > -1): ?>

                   <?php



                     $foo = array_search('novo', $produtos);
                     print_r($foo);
                     if ($foo == 'novo') {
                         echo('<h1>haaaa</h1>');


                   }

                   ?>
                       <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                       <tr>
                           <td><?php echo e($produto['nome']); ?></td>
                           <td><?php echo e($produto['categoria']); ?></td>
                           <td><?php echo e($produto['preco']); ?></td>
                           <td><?php echo e($produto['novo']); ?></td>
                           <td><?php echo e($produto['promocao']); ?></td>
                       </tr>

                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   <?php else: ?>
                       <tr>
                           <td colspan="4">
                               <div class="alert alert-warning">
                                   <p>Não há veículos nessa categoria.</p>
                               </div>
                           </td>
                       </tr>
                   <?php endif; ?>
               </table>

           </div>
       </div>
   </div>

</body>
</html>
<?php /**PATH C:\dev\example-app\resources\views/veiculos/listagem.blade.php ENDPATH**/ ?>