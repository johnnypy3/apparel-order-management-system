<div class="page-content">
    <div class="container">
        <div class="page-content-inner">
            <ul class="page-breadcrumb breadcrumb">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="settings-general.php">General</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Users</span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="settings-password.php">Change Password</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="settings-advanced.php">Order Progress</a>
                    </li>
                </ul>
            </ul>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" method="post" action="">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-users" aria-hidden="true"></i>Users
                                </div>
                                <div class="actions btn-set">
                                    <!--                                    <a href="./orders.php?type=all" name="back" class="btn btn-danger">-->
                                    <!--                                        <i class="fa fa-angle-left"></i> Back</a>-->
                                    <a data-target="#add-user" data-toggle="modal" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Add User
                                    </a>

                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <div class="tab-content">
                                        <div class="form-body">

                                            <div class="general-section">
                                                <h1>User List</h1>
                                            </div>

                                            <?php getUsersAlert(); ?>

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <!--                                                            <th> ID</th>-->
                                                        <th> Type</th>
                                                        <th> Username</th>
                                                        <th> Name</th>
                                                        <th> Last Logged In</th>
                                                        <th> Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    while ($users = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <tr class="clickable-row " data-href="#" <?php if (isset($_SESSION['order_id_updated'])) {
                                                            if ($_SESSION['order_id_updated'] == $users['order_id']) {
                                                                echo "updated-order";
                                                                unset($_SESSION['order_id_updated']);
                                                            }
                                                        } ?>>
                                                            <!--                                                                <td><a href="users.php?account_id=--><?php //echo $users['account_id'] ?><!--"> --><?php //echo $users['account_id'] ?><!--</a></td>-->
                                                            <td> <?php if ($users['account_type'] == 1) echo "Admin"; else if ($users['account_type'] == 2) echo "User"; else echo "Disabled" ?> </td>
                                                            <td> <?php echo $users['username'] ?> </td>
                                                            <td> <?php echo $users['fullname'] ?> </td>
                                                            <td> <?php echo $users['last_login'] ?> </td>
                                                            <td><a class="btn btn-xs btn-default" href="../../index.php"><i class="fa fa-search"></i></a>
                                                                <a class="btn btn-xs btn-default" data-account-id="<?php echo $users['account_id'] ?>" data-account-username="<?php echo $users['username'] ?>" data-target="#edit-user" data-type="edit" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                                                <?php if ($users['account_type'] != 1) { ?><a class="btn btn-xs btn-default" data-account-id="<?php echo $users['account_id'] ?>" data-account-username="<?php echo $users['username'] ?>" data-target="#delete-user" data-type="edit" data-toggle="modal"><i class="fa fa-trash"></i></a></td><?php } ?>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>