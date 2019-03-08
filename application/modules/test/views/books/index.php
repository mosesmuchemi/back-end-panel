<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Display</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>

</head>

<body>
    <div class="container">
        <h1>Book List</h1>
        <table id="book-table" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <td>Book Title</td>
                    <td>Book Price</td>
                    <td>Book Author</td>
                    <td>Rating</td>
                    <td>Publisher</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>



    <script type="text/javascript">
    $(document).ready(function() {
        $('#book-table').DataTable({
            "ajax": {
                url: "<?php echo site_url("test/books/books_page") ?>",
                type: 'GET'
            },
        });
    });
    </script>
</body>

</html>