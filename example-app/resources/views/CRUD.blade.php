<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Simple Data Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>

    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Customer <b>Details</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="/customer/create"><button class="add-btn">Add</button>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th>phone</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($customer as $index => $customerrr) { ?>
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $customerrr->c_name }}</td>
                            <td>{{ $customerrr->c_phone }}</td>
                            <td>
                                <a href="customer/{{ $customerrr->c_id }}" class="view" title="View"><i
                                        class="material-icons">&#xE417;</i></a>


                                <a href="customer/{{ $customerrr->c_id }}/edit" class="edit" title="Edit"><i
                                        class="material-icons">&#xE254;</i></a>


                                <form class="delete-form" action="customer/{{ $customerrr->c_id }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="delete-btn" type="submit"><i class="material-icons delete">&#xE872;</i></button>
                                </form>

                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
