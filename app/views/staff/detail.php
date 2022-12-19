<div class="container my-5">
    <div class="py-3">
        <h1 class="my-2">admin/detail</h1>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['staff']['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['staff']['mobile'] ?></h6>
            <p class="card-text"><?php echo $data['staff']['email'] ?></p>
            <a href="<?php echo BASEURL; ?>staff" class="card-link btn btn-primary">Back to Staff</a>
        </div>
    </div>
</div>