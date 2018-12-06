<?php require view('static/header');?>
<div class="container">


<div class="row justify-content-md-center mt-4">

<div class="col-md-4">
    <form action="" method="post">
        <h3 class="mb-3">Register</h3>
        <?php if($err = error()):?>
            <div class="alert alert-danger" role="alert">
                <?=$err?>
            </div>
        <?php endif; ?> 
        <?php if($suc = success()):?>
        <div class="alert alert-success" role="alert">
            <?=$suc?>
        </div>
        <?php endif; ?> 
        <div class="form-group">
            <label for="username">Username</label>
            <input value="<?=post('username')?>" type="text" class="form-control" name="username" id="username"placeholder="Username">
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input value="<?=post('email')?>" type="text" class="form-control" name="email" id="email"placeholder="E-Mail">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="*******">
        </div>
        <div class="form-group">
            <label for="password-again">Confirm Password</label>
            <input type="password" class="form-control" name="password-confirm" id="password-confirm" placeholder="*******">
        </div>
        <input type="hidden" name="submit" value="1">
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

</div>

</div>
<?php require view('static/footer');?>