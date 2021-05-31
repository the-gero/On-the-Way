<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <a href="/delivery/create"><button class="btn btn-success "  > Request a delivery</button></a>
<hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Delivery Requests</div>
                
                <div class="card-body">
                        
                        <?php if(count($dels) > 0): ?>
                            <?php $__currentLoopData = $dels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $del): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($del->status == "waiting"): ?>
                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <?php echo e($del->fromLoc); ?>-<?php echo e($del->toLoc); ?>

                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h3><a href="/delivery/<?php echo e($del->id); ?>"><?php echo e($del->fromLoc); ?>-<?php echo e($del->toLoc); ?></a></h3>
                                            <small> Owner <?php echo e($del->pkgOwner); ?> Reciever <?php echo e($del->pkgReciever); ?></small>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <p><?php if($del->status == "waiting"): ?> <div class=""> Waiting</div> <?php endif; ?></p>
                                                
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($dels->links()); ?>

                        <?php else: ?>
                            <p>No Requests found</p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">My Deliveries On the way</div>
    
                    <div class="card-body">
                            
                        <?php if(count($dels) > 0): ?>
                        <?php $__currentLoopData = $dels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $del): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($del->status == "accepted"): ?>
                            <div class="well">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <?php echo e($del->fromLoc); ?>-<?php echo e($del->toLoc); ?>

                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3><a href="/delivery/<?php echo e($del->id); ?>"><?php echo e($del->fromLoc); ?>-<?php echo e($del->toLoc); ?></a></h3>
                                        <small> Owner <?php echo e($del->pkgOwner); ?> Reciever <?php echo e($del->pkgReciever); ?></small>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                            <small><div class="">Accepted</div></small>
                                            
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($dels->links()); ?>  
                    <?php else: ?>
                        <p>No Deliveries found</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>