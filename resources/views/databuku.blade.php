@extends('layouts.app-backend')
@section('content')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Data Buku</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('buku.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive" style="width: 98%; margin: 10px">
                    <!-- Projects table -->
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item)
                            <tr>
                                <td>{{ $item['judul'] }}</td>
                                <td>{{ $item['penerbit'] }}</td>
                                <td>{{ $item['penulis'] }}</td>
                                <td>{{ $item['isbn'] }}</td>
                                <td>{{ $item['harga'] }}</td>
                                <td>{{ $item['tahun'] }}</td>
                                <td>{{ $item['sinopsis'] }}</td>
                                <td class="text-left">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ni ni-settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <form action="{{ route('buku.destroy', $item['id']) }}" id="delete-kodekel" method="POST">
                                                <a class="dropdown-item" href="{{ route('buku.edit', $item['id']) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('delete-kodekel').submit();">Delete</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                paginate: {
                    previous: "<",
                    next: ">"
                }
            },
        });
    });
</script>
@endpush
@push('css')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
