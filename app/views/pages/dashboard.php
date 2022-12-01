<div class="content-body">

    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Users Details</h4>
                    </div>
                    <div class="card-body">
                        <?php flash('user_message') ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $kounter = 0;
                                    foreach ($data['users'] as $user) : ?>
                                        <tr>
                                            <th><?= ++$kounter; ?></th>
                                            <td><?= $user->first_name . ' ' . $user->last_name ?></td>
                                            <td><?= $user->dob ?></td>
                                            <td><?= $user->country ?></td>
                                            <td><?= $user->city ?></td>
                                            <td><?= $user->address ?></td>
                                            <td><img src="<?= $user->profile_photo ?>" alt="" width="35" height="35" class="img img-fluid thumbnail rounded"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>