<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="clearfix"></div>
        <br>
        <br>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>ISBN</th>
                    <th>Harga</th>
                    <th>Tahun</th>
                    <th>Sinopsis</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Penulis</th>
                    <th>ISBN</th>
                    <th>Harga</th>
                    <th>Tahun</th>
                    <th>Sinopsis</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "serverSide": true,
                "bProcessing":false,
                "bSort":false,
                "ajax": "{{ route('api.buku') }}",
                "columns": [
                {data: 'judul', name: 'judul'},  
                {data: 'penerbit', name: 'penerbit'},
                {data: 'penulis', name: 'penulis'},
                {data: 'isbn', name: 'isbn'},
                {data: 'harga', name: 'harga'},
                {data: 'tahun', name: 'tahun'},
                {data: 'sinopsis', name: 'sinopsis'},
                ],        
            });
        } );
    </script>
</body>
</html>