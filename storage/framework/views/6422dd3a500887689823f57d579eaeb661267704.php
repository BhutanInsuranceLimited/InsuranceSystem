<?php $__env->startSection('content'); ?>
    <div class="page-header navbar">
        <div class="page-header-inner">
            <div class="page-logo">
                <a href="">
                    <img src="<?php echo e(asset('public/admin/layout/images/logo.png')); ?>" alt="logo" class="logo-default"/>
                </a>
                <div class="menu-toggler sidebar-toggler hide">
                </div>
                <h3 class="insurance-header">Bhutan Insurance Limited</h3>
            </div>
        </div>
    </div>

    <div class="content margin-top-20" id="login_form">
        <div id="error"></div>
        <!-- BEGIN LOGIN FORM -->
        <?php echo Form::open(['url' => 'login', 'method'=>'POST', 'id'=>'loginForm']); ?>

            <?php echo e(csrf_field()); ?>

            <h3 class="form-title"><i class="glyphicon glyphicon-lock"></i> Login </h3>
            <div class="form-group margin-bottom-15">
                <?php echo Form::label('user_id', 'User ID', ['class'=>'control-label']); ?>

                <?php echo Form::text('email', NULL, ['class'=>'form-control', 'placeholder'=>'User ID']); ?>

            </div>
            <div class="form-group margin-bottom-15">
                <?php echo Form::label('password', 'Password', ['class'=>'control-label']); ?>

                <?php echo Form::password('password', ['class'=>'form-control form-control-solid placeholder-no-fix', 'placeholder'=>'Password']); ?>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase pull-right" id="btn-login">
                    <span class="glyphicon glyphicon-log-in"> </span> Login
                </button>
            </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>