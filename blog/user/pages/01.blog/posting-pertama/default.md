---
title: 'Cara Mempercepat Loading Website Blog Lengkap'
---

Trik cara mempercepat loading website blog harus diterapkan pada semua web. Karena semua pasti setuju jika semua pengunjung menyukai web yang cepat saat loading konten-nya. Memang benar jika loading website berhubungan dengan kecepatan internet anda, yang perlu di ketahui bahwa tidak selalu benar jika semakin cepat koneksi anda maka akan semakin cepat loading web.

Mengapa? Karena jika web anda membutuhkan komputasi yang sangat rumit, maka kecepatan koneksi tidak begitu membantu (masalah ada pada server, sehingga membutuhkan waktu agar konten siap di kirim ke klien), apalagi kita ingin agar semua jenis koneksi baik lambat atau cepat akan terlayani dengan baik, maka usaha kita adalah untuk mengoptimalkan kinerja server dalam melakukan komputasi sampai distribusi konten dan berusaha agar konten memiliki ukuran yang sangat kecil.

Jika anda mempunyai web yang memiliki banyak skrip seperti css, javascript dan font yang semuanya memiliki ukuran yang besar, dipastikan akan semakin lama kinerja server dalam komptasi dan distribusi konten. Dalam tutorial ini kita akan membahas secara dasar dan umum, baik untuk wordpress dan blogspot, untuk detail tiap langkah akan disampaikan pada tutorial tersendiri.

Untuk tutorial cara membuat website atau blog silahkan kunjungi ” Cara Membuat Website Terbaru dan Lengkap “.

Manfaat Loading Web atau Blog yang Cepat

Banyak sekali manfaat yang akan kita dapatkan, tidak hanya kepuasan pengunjung yang kita dapatkan, bahkan manfaat ini juga dirasakan bagi para pemilik web yang menggunakan web-nya sebagai ladang mencari uang. Berikut detail manfaat memiliki web dengan kecepatan loading yang tinggi:

Meningkatkan ranking SEO (Google ingin yang terbaik)
Menigkatkan UX (User Experience), memerikan kesan yang baik bagi pengunjung. Hal ini sangat penting jika pengunjung anda adalah calon pembeli produk.
Meringankan beban bandwidth, semakin optimal maka akan mengurangi jumlah distribusi konten.
Meringankan bagi pengunjung dengan koneksi lambat.
Yang terakhir, anda juga membenci web yang lambat kan? 🙂
Detail Speed website mempengaruhi UX (User Experience), akan saya kutip dari beberapa website, perhatikan detail sbb:

Dari Aberdeen Group, Penundaan 1 detik pada saat membuka halaman, akan menyebabkan:

11% lebih sedikit pengunjung akan kabur
16% penurunan kepuasan pengunjung
Kehilangan sekitar 7% konversi
Amazon mengalami peningkatan pendapatan mulai dari 1% untuk setiap peningkatan kecepatan selama 100 milidetik.

Walmart juga demikian, mengalami peningkatan 2% untuk setiap peningkatan 1 detik.

Sebuah studi dari Akamai menemukan bahwa:

47% pengunjung mengharapkan web dengan kecepatan 2 detik.
40% akan meninggalkan web dengan kecepatan 3 detik keatas.
52% dari pembeli online mengatakan kecepatan web adalah yang membuat mereka tetap setia.
Sudah cukup kan?, oke mari kita langsung membahas langkah tiap langkah cara mempercepat halaman website loading website atau blog.

Agar konten yang disajikan juga SEO, ikuti tutorial ” Cara Membuat Konten Post SEO dan Menarik “.

Langkah-langkah Mempercepat Loading Blog dan Web

Dalam teknik ini akan kita usahakan kecepatan loading kita seoptimal mungkin, perhatikan bahwa kita tidak harus menerapkan semua langkah yang akan dijelaskan, lakukan dengan bijak dan tetap perhatikan arahan tiap langkah.

Langkah akan terbagi dalam Dua kategori yaitu:

Server
Elemen Konten
Sebelum memulai, silahkan anda backup dulu website atau blog 🙂 .

SERVER

Dalam hal server, anda bisa memulai melakukan optimasi dengan memilih tempat yang bagus dalam hal support dan mudah dalam melakukan optimasi server. Jangan sampai anda terkendala karena peraturan penyedia hosting yang ribet harus ini itu dan dibatasi ini itu. Mari kita mulai melakukan optimasi, dan usahakan ubah web anda ke maintenance mode agar tidak mengganggu para pengunjung.

CACHE BROWSER

Dengan memanfaatkan cache browser, anda dapat memangkas loading untuk file yang sering dimuat seperti CSS, JS dan gambar. Cara kerjanya adalah pada kunjungan pertama browser klien akan meload konten dari server dan akan menyimpan dalam cache browser, dengan menyimpan konten di dalam cache browser maka untuk kunjungan berikutnya maka browser tidak akan meminta konten ke server, melainkan akan meload dalam cache browser.

Caranya adalah sebagai berikut:

htaccess

Dengan menambahkan pengaturan expires header pada file htaccess, anda dapat mengatur jenis file dan lama waktu cache bertahan. Dalam tutorial ini saya menggunakan contoh pengaturan yang biasa dipakai dan lolos Google PageSpeed.

Kode di bawah memberitahu browser file apa saja yang akan dicache dan berapa lama untuk “ditahan” dalam cache (lokal). Tambahkan ke bagian paling atas pada file .htaccess anda. Atur berapa lama cache bertahan sesuai dengan tingkat update web pada bagian “access 1 year”, hati-hati jangan diatur terlalu lama jika web anda sering melakukan update.