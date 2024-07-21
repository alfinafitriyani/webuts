@extends('layouts')

@section('content')
    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody id="tableCart">
                    </tbody>
                </table>
            </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Total <span class="fw-normal">Belanja</span></h1>
                        </div>
                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p id="totalSemuaHarga" class="mb-0 pe-4"></p>
                        </div>
                        <button onclick="pesan()"
                            class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="button">Proceed Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->

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

        function loadCart() {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                return;
            } else {
                var arrayCart = JSON.parse(localCart);
            }

            document.querySelector("#tableCart").innerHTML = "";
            var totalSemuaHarga = 0;
            arrayCart.forEach((element, index) => {
                var totalHarga = element.hargaNumber * element.jumlah;
                totalSemuaHarga += totalHarga;

                document.querySelector("#tableCart").innerHTML += `<tr>
  <th scope="row">
    <div class="d-flex align-items-center">
      <img
        src="${element.url}"
        class="img-fluid me-5 rounded-circle"
        style="width: 80px; height: 80px;object-fit:cover;"
        alt=""
      />
    </div>
  </th>
  <td>
    <p class="mb-0 mt-4">${element.nama}</p>
  </td>
  <td>
    <p class="mb-0 mt-4" data-harga="${element.hargaNumber}">${element.hargaString}</p>
  </td>
  <td>
    <div class="input-group quantity mt-4" style="width: 100px">
      <div class="input-group-btn">
        <button onclick="minJumlah('${element.nama}')" class="btn btn-sm btn-minus rounded-circle bg-light border">
          <i class="fa fa-minus"></i>
        </button>
      </div>
      <input
        type="text"
        class="form-control form-control-sm text-center border-0"
        value="${element.jumlah}"
      />
      <div class="input-group-btn">
        <button onclick="addJumlah('${element.nama}')" class="btn btn-sm btn-plus rounded-circle bg-light border">
          <i class="fa fa-plus"></i>
        </button>
      </div>
    </div>
  </td>
  <td>
    <p class="mb-0 mt-4">Rp.${totalHarga.toLocaleString('id-ID')}</p>
  </td>
  <td>
    <button onclick="hapusBarang('${element.nama}')" class="btn btn-md rounded-circle bg-light border mt-4">
      <i class="fa fa-times text-danger"></i>
    </button>
  </td>
</tr>
`;
            });

            document.querySelector("#totalSemuaHarga").innerHTML = "Rp." + totalSemuaHarga.toLocaleString('id-ID');

        }

        function minJumlah(namaBarang) {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                loadCart();
                return;
            } else {
                var arrayCart = JSON.parse(localCart);
            }

            var updatedData = arrayCart.map(item => {
                if (item.nama == namaBarang) {
                    if (item.jumlah == 1) {

                    } else {
                        item.jumlah -= 1;
                    }
                }
                return item;
            });

            localStorage.setItem("cart", JSON.stringify(updatedData));
            loadCart();
        }

        function addJumlah(namaBarang) {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                return;
            } else {
                var arrayCart = JSON.parse(localCart);
            }

            var updatedData = arrayCart.map(item => {
                if (item.nama == namaBarang) {
                    item.jumlah += 1;
                }
                return item;
            });

            localStorage.setItem("cart", JSON.stringify(updatedData));
            loadCart();
        }

        function hapusBarang(namaBarang) {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                return;
            } else {
                var arrayCart = JSON.parse(localCart);
            }

            var updatedData = arrayCart.filter(item => item.nama !== namaBarang);

            localStorage.setItem("cart", JSON.stringify(updatedData));
            loadCart();
        }

        function pesan() {
            var localCart = localStorage.getItem("cart");
            if (localCart == null) {
                return;
            } else {
                var arrayCart = JSON.parse(localCart);
            }

            var pesan = "Daftar Pesanan :\n-----------------\n";
            var total = 0;

            arrayCart.forEach(item => {
                var totalHargaItem = item.jumlah * item.hargaNumber;
                pesan +=
                    `${item.nama} | ${item.jumlah} | ${item.hargaNumber.toLocaleString('id-ID')} | ${totalHargaItem.toLocaleString('id-ID')}\n`;
                total += totalHargaItem;
            });

            pesan += "-----------------\n";
            pesan += `Total = Rp. ${total.toLocaleString('id-ID')}`;

            // Mengencode pesan
            var encodedPesan = encodeURIComponent(pesan);

            // Membuat URL
            var nomorTelepon = ""; // Ganti dengan nomor telepon tujuan
            var url = `https://api.whatsapp.com/send?phone=${nomorTelepon}&text=${encodedPesan}`;
            console.log(url);

            window.location.href = url;
        }

        loadCart();
    </script>
@endsection

https://api.whatsapp.com/send?phone=&text=Daftar%20Pesanan%20%3A%0A-----------------%0ABeras%20%7C%201%20%7C%2010.000%20%7C%2010.000%0A-----------------%0ATotal%20%3D%2010.000
