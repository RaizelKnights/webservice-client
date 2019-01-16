@extends('layouts.app-backend')
@section('content')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Form Edit Buku</h3>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $clients['id']) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Judul</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Judul Buku" name="judul" value="{{ $clients['judul'] }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Penerbit</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Penerbit Buku" name="penerbit" value="{{ $clients['penerbit'] }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Penulis</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Penulis Buku" name="penulis" value="{{ $clients['penulis'] }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">ISBN</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Isbn Buku" name="isbn" value="{{ $clients['isbn'] }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Harga</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Harga Buku" name="harga" value="{{ $clients['harga'] }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tahun</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tahun Rilis Buku" name="tahun" value="{{ $clients['tahun'] }}">
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Sinopsis</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label>Sinopsis</label>
                                <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about the books ..." name="sinopsis">{{ $clients['penerbit'] }}</textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <button class="btn btn-success">Tambah Buku</button>
                            <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
