<!-- {/*JUANCAMILO*/} -->

<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', 'Product List'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <?php $__currentLoopData = $viewData["products"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <img src="<?php echo e($product->getImage()); ?>" class="card-img-top img-card">
        <div class="card-body text-center">
          <a href="<?php echo e(route('product.show', ['id'=> $product->getId()])); ?>"
            class="btn bg-primary text-white"><?php echo e($product->getTitle()); ?></a>
            <br><br>
          <a href="<?php echo e(route('cart.add', ['id' => $key])); ?>"
            class="btn bg-primary text-white">agregar a carrito</a>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div id="products" style="display: none;">'<?php echo json_encode($viewData["products"], 15, 512) ?>'</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/juancamilosalazar/Desktop/si/Universidad/VII/Topicos Software/ganaderapp/resources/views/product/index.blade.php ENDPATH**/ ?>