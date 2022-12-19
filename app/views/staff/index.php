<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h1 class="my-2">admin/index</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Insert New Staff
        </button>
    </div>

    <!-- flash -->
    <?php Flasher::flash(); ?>

    <table class="table">
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
                    <td><?php echo ($index + 1) ?></td>
                    <td><?php echo $staff['name'] ?></td>
                    <td><a href="<?php echo BASEURL; ?>staff/detail/<?php echo $staff['id']; ?>" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Staff Detail"><i class="bi bi-file-earmark-richtext"></i></a></td>
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
                <form action="<?php echo BASEURL; ?>staff/create" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="input name...." required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="input email address...." required>
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="input phone number...." required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
</div>