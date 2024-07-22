@extends('admin.layouts.layouts')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Produk</h5>
                    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary mt-2">+ Tambah Baru</a>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>
                                        <p class="harga">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                    </td>
                                    <td><img src="{{ asset('images/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                                            width="50"></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.produk', ['id' => $produk->id]) }}"
                                                class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <form action="{{ route('delete.produk', ['id' => $produk->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
@endsection
