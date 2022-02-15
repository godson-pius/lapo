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
                <div class="card shadow-sm bg-info bg-opacity-500 text-light">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text"> <i class="fa fa-users" aria-hidden="true"></i> 34</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm bg-warning bg-opacity-500 text-dark">
                    <div class="card-body">
                        <h5 class="card-title">My Loans</h5>
                        <p class="card-text"> <i class="fa fa-dollar" aria-hidden="true"></i> 34</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="approve mt-5" id="loans">
            <h5>My Loans</h5>
            <hr>

            <table class="table table-responsiveness mt-2 text-center">
                <tr>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>$50</td>
                    <td>12 January, 2022</td>
                    <td>
                        <button class="btn btn-success btn-sm">Approved</button>
                    </td>
                </tr>

                <tr>
                    <td>$1000</td>
                    <td>14 April, 2022</td>
                    <td>
                        <button class="btn btn-danger btn-sm">Declined</button>
                    </td>
                </tr>
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
</body>

</html>