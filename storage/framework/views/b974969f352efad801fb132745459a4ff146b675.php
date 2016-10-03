<?php if(Spark::billsUsingStripe()): ?>
    <?php echo $__env->make('spark::auth.register-stripe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('spark::auth.register-braintree', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
