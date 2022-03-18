<?php 
    require_once 'config.php';
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
    }

    function getTotal($table) {
        global $link;

        $sql = "SELECT * FROM $table";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return mysqli_num_rows($query);
        }
    }

    function getContent($table) {
        global $link;

        $sql = "SELECT * FROM $table";
        $query = mysqli_query($link, $sql);

        if (mysqli_num_rows($query) > 0) {
            return $query;
        }
    }

    function getLoan() {
        global $link;

        $sql = "SELECT * FROM loan_requests INNER JOIN users ON loan_requests.user_id = users.id WHERE approve = 0";
        $query = mysqli_query($link, $sql);

        if (mysqli_num_rows($query) > 0) {
            return $query;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>LAPO - ADMIN</title>

    <style>
        .card {
            transition: 1s;
        }

        .card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
        }

        .approve {
            margin-top: 90px !important;
        }
    </style>
</head>

<body>

    <!-- Start Header -->

    <?php require_once 'inc/header.php'; ?>

    <!-- End Header -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text"> <i class="fa fa-users" aria-hidden="true"></i> <?= getTotal('users'); ?> </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Current Loans</h5>
                        <p class="card-text"> <i class="fa fa-bank" aria-hidden="true"></i> $<?= getTotal('loan_requests'); ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="approve mt-5">
            <h5>Approve Loans</h5>
            <hr>

            <table class="table table-responsiveness mt-2">
                <tr>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Guarantor 1</th>
                    <th>Guarantor 2</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <?php
                    $loans = getLoan();
                    if (!empty($loans)) {
                        foreach ($loans as $loan) {
                            extract($loan); ?>
                            <tr>
                                <td><?= $fullname; ?></td>
                                <td>$<?= $amount; ?></td>
                                <td>
                                    <button data-bvn="<?= $garantor1; ?>" onclick="viewBvnDetails(this)" type="button" class="btn btn-info">
                                    <?= $garantor1; ?>
                                    </button>
                                </td>
                                <td>
                                    <button data-bvn="<?= $garantor2; ?>" onclick="viewBvnDetails(this)" type="button" class="btn btn-warning">
                                    <?= $garantor2; ?>
                                    </button>
                                </td>
                                <td><?= date('d-M-Y', strtotime($date)); ?></td>
                                <td>
                                    <button id="approve" onclick="approveLoan(this)" data-id="<?= $loan_id; ?>" class="btn btn-success btn-sm">Approve</button>
                                    <button id="decline" onclick="declineLoan(this)" data-id="<?= $loan_id; ?>" class="btn btn-danger btn-sm">Disapprove</button>
                                </td>
                            </tr>
                    
                <?php } } else { ?>
                    <tr>
                                <td style="color: red;">No Loan to approve!</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                <?php } ?>
            </table>

             <!-- Modal -->
            <div class="bg-dark rounded p-3 shadow opacity-70" id="BvnContainer" style="display: none;">
                <span class="text-danger d-flex flex-row-reverse" id="previewBvn" style="font-size: 30px; cursor: pointer">&times;</span>
                <img width="100%" height="400" style="object-fit: contain" src="../img/blog/article-3.png" id="BvnImg" alt="BVN DETAILS" srcset="">
               
            </div>
            <progress class="p-2" id="loader" style="width: 100%; display: none" max="100"></progress>
        </div>


        <!-- Users -->

        <div class="approve mt-5" id="users">
            <h5>Users</h5>
            <hr>

            <table class="table table-responsiveness mt-2 text-center">
                <tr>
                    <th>User</th>
                    <th>Phone Number</th>
                    <th>Location</th>
                    <th>Date Registered</th>
                    <th>Action</th>
                </tr>
                
                <?php
                    $users = getContent('users');
                    if (!empty($users)) {
                        foreach ($users as $user) {
                            extract($user); ?>
                            <tr>
                                <td><?= $fullname; ?></td>
                                <td><?= $phone; ?></td>
                                <!-- <td><?= $address; ?></td> -->
                                <td>
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $address; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:600px;}</style></div></div>
                                </td>
                                <td><?= date('d-M-Y', strtotime($date)); ?></td>
                                <td>
                                    <button id="delete" onclick="removeUser(this)" data-id="<?= $id; ?>" class="btn btn-info btn-sm">Remove User</button>
                                </td>
                            </tr>
                    
                <?php } } else { ?>
                    <tr>
                                <td style="color: red;">No User!</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                <?php } ?>
                
            </table>
        </div>
    </div>


    <!-- Footer -->

    <?php require_once 'inc/footer.php'; ?>

    <!-- End of footer -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"
        integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="./script.js"></script>
</body>

</html>