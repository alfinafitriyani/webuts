@extends('layouts')

@section('content')
    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5 mt-3">
        <div class="container py-5 ">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-3 text-start">
                        <h1>Katalog Toko</h1>
                    </div>
                    <div class="col-lg-9 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item me-2">
                                <a class="d-flex  py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px">Semua</span>
                                </a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="d-flex py-2  bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px">Keb. Pokok</span>
                                </a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="d-flex  py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px">Kebersihan</span>
                                </a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="d-flex  py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px">Kesehatan</span>
                                </a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="d-flex  py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 130px">Bumbu</span>
                                </a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="d-flex  py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                    <span class="text-dark" style="width: 130px">Lain-lain</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($data['makananPokok'] as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div style="height: 12em" class="fruite-img">
                                                    <img style="object-fit: cover;" src="{{ $product['url'] }}"
                                                        class="img-fluid w-100 rounded-top" alt="" />
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px">
                                                    Pokok
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product['nama'] }}</h4>
                                                    <p>

                                                    </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">
                                                            {{ $product['harga'] }}
                                                        </p>
                                                        <button
                                                            onclick="addCart('{{ $product['nama'] }}' , '{{ $product['harga'] }}' , '{{ $product['url'] }}')"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($data['produkKebersihan'] as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div style="height: 12em" class="fruite-img">
                                                    <img style="object-fit: cover;" src="{{ $product['url'] }}"
                                                        class="img-fluid w-100 rounded-top" alt="" />
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px">
                                                    Kebersihan
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product['nama'] }}</h4>
                                                    <p>

                                                    </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">
                                                            {{ $product['harga'] }}
                                                        </p>
                                                        <button
                                                            onclick="addCart('{{ $product['nama'] }}' , '{{ $product['harga'] }}' , '{{ $product['url'] }}')"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($data['produkKesehatan'] as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div style="height: 12em" class="fruite-img">
                                                    <img style="object-fit: cover;" src="{{ $product['url'] }}"
                                                        class="img-fluid w-100 rounded-top" alt="" />
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px">
                                                    Kesehatan
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product['nama'] }}</h4>
                                                    <p>

                                                    </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">
                                                            {{ $product['harga'] }}
                                                        </p>
                                                        <button
                                                            onclick="addCart('{{ $product['nama'] }}' , '{{ $product['harga'] }}' , '{{ $product['url'] }}')"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($data['bumbuDapur'] as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div style="height: 12em" class="fruite-img">
                                                    <img style="object-fit: cover;" src="{{ $product['url'] }}"
                                                        class="img-fluid w-100 rounded-top" alt="" />
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px">
                                                    Bumbu
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product['nama'] }}</h4>
                                                    <p>

                                                    </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">
                                                            {{ $product['harga'] }}
                                                        </p>
                                                        <button
                                                            onclick="addCart('{{ $product['nama'] }}' , '{{ $product['harga'] }}' , '{{ $product['url'] }}')"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-6" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($data['lainLain'] as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div style="height: 12em" class="fruite-img">
                                                    <img style="object-fit: cover;" src="{{ $product['url'] }}"
                                                        class="img-fluid w-100 rounded-top" alt="" />
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                    style="top: 10px; left: 10px">
                                                    Lain
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $product['nama'] }}</h4>
                                                    <p>

                                                    </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">
                                                            {{ $product['harga'] }}
                                                        </p>
                                                        <button
                                                            onclick="addCart('{{ $product['nama'] }}' , '{{ $product['harga'] }}' , '{{ $product['url'] }}')"
                                                            class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                                class="fa fa-shopping-bag me-2 text-primary"></i>
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

    <script>
        function addCart(namaBarang, hargaBarang, urlBarang) {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                var arrayCart = [];
            } else {
                var arrayCart = JSON.parse(localCart);
            }


            var newProduct = {
                nama: namaBarang,
                hargaString: hargaBarang,
                hargaNumber: parseInt(hargaBarang.replace(/\D/g, '')),
                url: urlBarang,
                jumlah: 1,
            };

            arrayCart.push(newProduct);
            var uniqueData = arrayCart.filter((value, index, self) => self.findIndex(v => v.nama === value.nama && v
                .hargaString === value.hargaString) === index);
            localStorage.setItem("cart", JSON.stringify(uniqueData));
        }
    </script>
@endsection
