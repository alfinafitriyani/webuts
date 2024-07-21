@extends('layouts')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 style="text-shadow: 2px 2px 6px white" class="mb-3 text-secondary">
                        100% Berkualitas
                    </h4>
                    <h1 class="mb-3 display-3 text-primary">TOKO SEMBAKO BUDIYONO</h1>
                    <h2 style="text-shadow: 2px 2px 4px white" class="text-secondary">
                        Solusi Kebutuhan Harian Anda
                    </h2>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img style="height: 21em; object-fit: cover" src="img/beras.jpg"
                                    class="img-fluid w-100 bg-secondary rounded" alt="First slide" />
                                <a href="#" class="btn px-4 py-2 text-white rounded">BERAS</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img style="height: 21em; object-fit: cover" src="img/susu.jpg"
                                    class="img-fluid w-100 rounded" alt="Second slide" />
                                <a href="#" class="btn px-4 py-2 text-white rounded">SUSU</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div style="height: 12em;" class="fruite-img">
                                        <img style="object-fit: cover;"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZOljFRDH7bRpPcA7ThXAJBsmIfbu6j3VUVY4NQ3OoTw&s"
                                            class="img-fluid w-100 rounded-top" alt="" />
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px">
                                    </div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Kebutuhan Pokok</h4>
                                        <p>

                                        </p>
                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                                Katalog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div style="height: 12em;" class="fruite-img">
                                        <img style="object-fit: cover;"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPkzoC26hKx6AxDNbRvPAh64TkpL_CpnrcjGkI9oXlWw&s"
                                            class="img-fluid w-100 rounded-top" alt="" />
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px">
                                    </div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Produk Kebersihan</h4>
                                        <p>

                                        </p>
                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                                Katalog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div style="height: 12em;" class="fruite-img">
                                        <img style="object-fit: cover;"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-jHgX5qzkLoVCDTFcgL-0tF2bnkbz0Ddjz9039KA3Cg&s"
                                            class="img-fluid w-100 rounded-top" alt="" />
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px">
                                    </div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Produk Kesehatan</h4>
                                        <p>

                                        </p>
                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                                Katalog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div style="height: 12em;" class="fruite-img">
                                        <img style="object-fit: cover;"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7rB5wYPy5Key1TEivgAAlEMbBq8toGud8GYBo0Gfglw&ss"
                                            class="img-fluid w-100 rounded-top" alt="" />
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px">
                                    </div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Bumbu Dapur</h4>
                                        <p>

                                        </p>
                                        <div class="d-flex justify-content-center flex-lg-wrap">
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                                Katalog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->

    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Produk Lain-lain</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach ($data as $product)
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div style="height: 12em;" class="vesitable-img">
                            <img style="object-fit: covers;" src="{{ $product['url'] }}"
                                class="img-fluid w-100 rounded-top" alt="" />
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute"
                            style="top: 10px; right: 10px">
                            .
                        </div>
                        <div class="p-4 rounded-bottom">
                            <h4>{{ $product['nama'] }}</h4>
                            <p>

                            </p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">{{ $product['harga'] }}</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->

    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Melayani Pembelian </h1>
                        <p class="fw-normal display-3 text-dark mb-4">Grosiran & Ecer</p>
                        <p class="mb-4 text-dark">
                            Kami melayani pembelian grosiran dengan harga yang lebih terjangkau. Banyak promo dan
                            diskon yang bisa kalian dapatkan.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/p-beras.png" class="img-fluid w-100 rounded" alt="" />
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute"
                            style="width: 140px; height: 140px; top: 0; left: 0">
                            <h1>Rp.1xx.xxx</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->
@endsection
