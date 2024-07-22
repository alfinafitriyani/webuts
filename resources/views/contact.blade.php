@extends('layouts')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px; mb-5">
                            <h1 class="text-primary">Hubungi Kami Untuk</h1>
                            <h3 class="text-black">Pembelian Grosir</h3>
                            {{-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                                form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and
                                you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        </div> --}}
                        </div>
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-6">
                                    <div class="h-100 rounded">
                                        <iframe class="rounded w-100" style="height: 400px;"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1498126691445!2d110.73748947356272!3d-6.751577166015961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd8b9f41520f%3A0x7174e627f3268974!2sToko%20BUDIYONO!5e0!3m2!1sid!2sid!4v1721559225926!5m2!1sid!2sid"
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form id="contactForm" action="" class="">
                                        <input type="text" id="name" class="w-100 form-control border-0 py-3 mb-4"
                                            placeholder="Nama">
                                        <input type="email" id="email" class="w-100 form-control border-0 py-3 mb-4"
                                            placeholder="Email">
                                        <textarea id="message" class="w-100 form-control border-0 mb-4" rows="5" placeholder="Pesan"></textarea>
                                        <button type="button"
                                            class="w-100 btn form-control border-secondary py-3 bg-warning text-light text-center"
                                            onclick="sendToWhatsApp()">
                                            Kirim
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="d-flex p-4 rounded mb-4 bg-white">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Alamat</h4>
                                        <p class="mb-2">Kuanyar, RT 01/ RW 01<br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex p-4 rounded mb-4 bg-white">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Email</h4>
                                        <p class="mb-2">tokobudiyono@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4">
                                    </i>
                                    <div>
                                        <h4>Telepone</h4>
                                        <p class="mb-2"><a href="https://wa.me/62895363649388"
                                                class="text-decoration-none text-dark">+62 895-3636-49388</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    @endsection
    <script>
        function sendToWhatsApp() {
            // Ambil nilai dari input formulir
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var message = document.getElementById('message').value.trim();

            // Validasi untuk memastikan bahwa semua field telah diisi
            if (!name || !email || !message) {
                alert('Harap lengkapi semua field.');
                return;
            }

            // Buat pesan untuk dikirim ke WhatsApp
            var whatsappMessage = 'Nama: ' + name + '%0A' +
                'Email: ' + email + '%0A' +
                'Pesan: ' + message;

            // URL WhatsApp
            var whatsappUrl = 'https://wa.me/62895363649388?text=' + encodeURIComponent(whatsappMessage);

            // Arahkan ke URL WhatsApp
            window.location.href = whatsappUrl;
        }
    </script>
