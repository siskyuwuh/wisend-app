<x-app-layout>
    <x-slot name="header">
        {{-- <a href="{{ route('booking.index') }}">
            Mundur</a> --}}
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Buat Booking Baru') }}
        </h2>
    </x-slot>


    <section class="bg-white px-10 pb-10 pt-5 dark:bg-gray-900">



        {{-- <p id="test"></p> --}}
    </section>
    <script>
        // function validasiAngka() {
        //     const inputAngka = parseFloat(document.getElementById("angka").value);

        //     if (isNaN(inputAngka)) {
        //         document.getElementById("hasilValidasi").textContent = "Masukkan bukan angka yang valid.";
        //     } else if (inputAngka < 0.0 || inputAngka > 10.0) {
        //         document.getElementById("hasilValidasi").textContent = "Masukkan angka antara 0.0 dan 10.0.";
        //     } else {
        //         document.getElementById("hasilValidasi").textContent = "Input valid.";
        //     }
        // }


        // Ambil elemen-elemen HTML yang diperlukan
        const input_weight = document.getElementById('item-weight');
        const input_P = document.getElementById('P');
        const input_L = document.getElementById('L');
        const input_T = document.getElementById('T');
        const totalDimension = document.getElementById('total-item-dimension');
        parseFloat(input_weight.value);

        // Penghitumgam Dimensi
        function hasilDimensi(p, l, t) {

            p = parseFloat(input_P.value) || 0;
            l = parseFloat(input_L.value) || 0;
            t = parseFloat(input_T.value) || 0;

            const hasil = p * l * t / 6000;

            return hasil.toFixed(2);

        }

        function pembulatanHasilBerat(a) {

            if (a < 1) {
                return 1;
            } else {
                const nilaiDesimal = a - Math.floor(a); // Ambil bagian desimal
                if (nilaiDesimal >= 0.51) {
                    return Math.ceil(a); // Bulatkan ke bilangan selanjutnya
                } else {
                    return Math.floor(a); // Bulatkan ke bilangan sebelumnya atau 0
                }
            }

            // return a;
        }


        function perbandinganBerat(beratKotor, beratDimensi) {
            if (beratKotor > beratDimensi) {
                return beratKotor;
            } else {
                return beratDimensi;
            }
        }


        function totalBiayaBerat(a) {
            return a * 1000;
        }



        // Event Listener change untuk Input Dimensi
        input_weight.addEventListener('input', updateTotalDimension);
        input_P.addEventListener('input', updateTotalDimension);
        input_L.addEventListener('input', updateTotalDimension);
        input_T.addEventListener('input', updateTotalDimension);

        // Fungsi untuk menghitung perkalian dan menampilkan hasilnya
        function updateTotalDimension() {


            // Tampilkan hasilnya pada elemen "hasil"
            // totalDimension.value = hasilDimensi();
            totalDimension.value = perbandinganBerat(input_weight.value, hasilDimensi());

            const index = destination.value;
            let test = document.getElementById('test');

            // test.value = "Alamat : " + kelurahanJakarta[index].nama + " Harga : " + kelurahanJakarta[index].price;
            // const index = destination.value;
            // test.value = parseFloat(totalBiayaJarak(pembulatanHasilJarak(kelurahanJakarta[index].distance)));
            let totalBiaya = parseFloat(totalBiayaJarak(pembulatanHasilJarak(kelurahanJakarta[index].distance))) +
                totalBiayaBerat(pembulatanHasilBerat(perbandinganBerat(
                    parseFloat(input_weight.value), hasilDimensi())));

            // test.value = totalBiaya.toLocaleString('id-ID') +
            //     " = " + totalBiayaBerat(pembulatanHasilBerat(perbandinganBerat(
            //         parseFloat(input_weight.value), hasilDimensi()))).toLocaleString('id-ID') + " + " + parseFloat(
            //         totalBiayaJarak(
            //             pembulatanHasilJarak(kelurahanJakarta[index].distance)))
            //     .toLocaleString('id-ID');

            test2.value = totalBiaya;

            test3.value = pembulatanHasilBerat(perbandinganBerat(
                parseFloat(input_weight.value), hasilDimensi()));
        }

        // Panggil fungsi awal kali saat halaman dimuat (opsional)
        // updateTotalDimension();



        // let totalBiayaBerat = 




        const kelurahanJakarta = [{
                nama: "KEBON MANGGIS, MATRAMAN, JAKARTA TIMUR",
                distance: 5.3,
            },
            {
                nama: "KENARI, SENEN, JAKARTA PUSAT",
                distance: 7.7,
            },
            {
                nama: "GAMBIR, GAMBIR, JAKARTA PUSAT",
                distance: 12.8
            },
            // Tambahkan data kelurahan lainnya di sini
        ];

        let destination = document.getElementById('destination');


        let i = 0;
        kelurahanJakarta.forEach(kel => {
            let option = document.createElement('option');
            option.textContent = kel.nama;
            option.value = i;
            destination.appendChild(option);
            i = i + 1;
        });

        function pembulatanHasilJarak(a) {

            // kelurahanJakarta[index].price

            if (a < 1) {
                return 1;
            } else {
                const nilaiDesimal = a - Math.floor(a); // Ambil bagian desimal
                if (nilaiDesimal >= 0.31) {
                    return Math.ceil(a); // Bulatkan ke bilangan selanjutnya
                } else {
                    return Math.floor(a); // Bulatkan ke bilangan sebelumnya atau 0
                }
            }

            // return a;
        }

        function totalBiayaJarak(a, b = 2500) {
            a = parseFloat(a);
            return a * b;
        }



        destination.addEventListener('change', function() {
            const index = destination.value;
            let test = document.getElementById('test');

            // test.value = "Alamat : " + kelurahanJakarta[index].nama + " Harga : " + kelurahanJakarta[index].price;
            // const index = destination.value;
            // test.value = parseFloat(totalBiayaJarak(pembulatanHasilJarak(kelurahanJakarta[index].distance)));
            let totalBiaya = parseFloat(totalBiayaJarak(pembulatanHasilJarak(kelurahanJakarta[index].distance))) +
                totalBiayaBerat(pembulatanHasilBerat(perbandinganBerat(
                    parseFloat(input_weight.value), hasilDimensi())));

            // test.value = totalBiaya.toLocaleString('id-ID') +
            //     " = " + totalBiayaBerat(pembulatanHasilBerat(perbandinganBerat(
            //         parseFloat(input_weight.value), hasilDimensi()))).toLocaleString('id-ID') + " + " + parseFloat(
            //         totalBiayaJarak(
            //             pembulatanHasilJarak(kelurahanJakarta[index].distance)))
            //     .toLocaleString('id-ID');

            test2.value = totalBiaya;
        })

        updateTotalDimension();
    </script>
</x-app-layout>
