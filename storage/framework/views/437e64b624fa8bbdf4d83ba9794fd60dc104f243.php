<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask for Delivery</div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('delivery.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="pkgOwner" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Owner')); ?></label>

                            <div class="col-md-6">
                                <input id="pkgOwner"  type="text" class="form-control<?php echo e($errors->has('pkgOwner') ? ' is-invalid' : ''); ?>" name="pkgOwner" value="<?php echo e(old('pkgOwner')); ?>" required autofocus>

                                <?php if($errors->has('pkgOwner')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('pkgOwner')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pkgReciever" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Reciever')); ?></label>

                            <div class="col-md-6">
                                <input id="pkgReciever" type="pkgReciever" class="form-control<?php echo e($errors->has('pkgReciever') ? ' is-invalid' : ''); ?>" name="pkgReciever" value="<?php echo e(old('pkgReciever')); ?>" required>

                                <?php if($errors->has('pkgReciever')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('pkgReciever')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pkgType" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                            <div class="col-md-6">
                                <input id="pkgType" type="pkgType" class="form-control<?php echo e($errors->has('pkgType') ? ' is-invalid' : ''); ?>" name="pkgType" required>

                                <?php if($errors->has('pkgType')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('pkgType')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pkgCredit" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Credit')); ?></label>

                            <div class="col-md-6">
                                <input id="pkgCredit" type="pkgCredit" class="form-control<?php echo e($errors->has('pkgCredit') ? ' is-invalid' : ''); ?>" name="pkgCredit" required>

                                <?php if($errors->has('pkgCredit')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('pkgCredit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fromLoc" class="col-md-4 col-form-label text-md-right"><?php echo e(__('From')); ?></label>

                            <div class="col-md-6">
                                <input id="fromLoc" type="fromLoc" class="form-control<?php echo e($errors->has('fromLoc') ? ' is-invalid' : ''); ?>" name="fromLoc" required>

                                <?php if($errors->has('fromLoc')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('fromLoc')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="toLoc" class="col-md-4 col-form-label text-md-right"><?php echo e(__('To')); ?></label>

                            <div class="col-md-6">
                                <input id="toLoc" type="toLoc" class="form-control<?php echo e($errors->has('toLoc') ? ' is-invalid' : ''); ?>" name="toLoc" required>

                                <?php if($errors->has('toLoc')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('toLoc')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                            <div class="col-md-6">
                                <textarea id="description" type="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" required>
                                </textarea>
                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Ask now')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>