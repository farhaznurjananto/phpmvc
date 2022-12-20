<div class="container my-5">
    <div class="py-3">
        <h1 class="my-2">admin/index</h1>
    </div>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary insertModal my-1" data-bs-toggle="modal" data-bs-target="#formModal">
            Insert New Data Staff
        </button>

        <form class="d-flex my-1" role="search" action="<?php echo BASEURL; ?>staff/search" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keyword">
            <button class="btn btn-outline-primary" type="submit" id="search"><i class="bi bi-search" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Search Staff"></i></button>
        </form>
    </div>

    <!-- flash -->
    <?php Flasher::flash(); ?>

    <table class="table overflow-scroll">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['staff'] as $index => $staff) : ?>
                <tr>
                    <td width=10%><?php echo ($index + 1) ?></td>
                    <td><?php echo $staff['name'] ?></td>
                    <td width=20% align="center">
                        <a href="<?php echo BASEURL; ?>staff/detail/<?php echo $staff['id']; ?>" class="btn btn-outline-secondary my-1"><i class="bi bi-file-earmark-richtext" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Staff Detail"></i></a>
                        <a href="<?php echo BASEURL; ?>staff/update/<?php echo $staff['id']; ?>" class="btn btn-success my-1 updateModal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?php echo $staff['id']; ?>"><i class=" bi bi-pencil-square" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Update Staff"></i></a>
                        <a href="<?php echo BASEURL; ?>staff/delete/<?php echo $staff['id']; ?>" class="btn btn-danger my-1" onclick="return confirm('Are you sure you want to delete this staff?');"><i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Staff"></i></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Insert New Staff</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>staff/create" method="post" class="needs-validation" novalidate>
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="name" name="name" placeholder="input name...." required>
                            <div class="invalid-feedback">
                                Please fill input name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" id="email" name="email" placeholder="input email address...." required>
                            <div class="invalid-feedback">
                                Please fill input email.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="mobile" class="form-label">Phone Number</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="input phone number...." required>
                            <div class="invalid-feedback">
                                Please fill input phone number.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="btnModal">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>