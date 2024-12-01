@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://media.istockphoto.com/id/1284142814/id/foto/balinese-rijsttafel-with-sate-lilit-sate-babi-gedang-mekuah-tum-ayam-udang-goreng-rempeyek.jpg?s=1024x1024&w=is&k=20&c=SoOh1JpFCoyMvVlA4n22a7PFYUUlB3io2IW82QeZRbU=" class="img-fluid rounded" alt="Indonesian Cuisine">
                </div>
                <div class="col-md-6">
                    <h1 class="display-4 fw-semibold">Selamat Datang di Warung Nusantara</h1>
                    <p class="lead">Hidangan khas Indonesia, kaya rasa dan autentik</p>
                    <a href="#menu" class="btn btn-primary btn-lg">Lihat Menu</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Section -->
    <section id="menu" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Menu Khas Indonesia</h2>
                <p class="text-muted">Nikmati cita rasa Indonesia dalam setiap hidangan</p>
            </div>

            <div class="row g-4">
                <!-- Menu Item 1 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <img src="https://www.masakapahariini.com/wp-content/uploads/2020/02/kumpulan-resep-nasi-goreng.jpg" class="card-img-top transform-scale" alt="Nasi Goreng">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Nasi Goreng</h5>
                            <p class="card-text text-muted mb-3">Nasi goreng tradisional dengan tambahan ayam suwir dan kerupuk.</p>
                            <span class="h5 text-primary mb-0">Rp25.000</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <img src="https://th.bing.com/th/id/OIP.qGa4C5uDGxMNhGg_L3MvfQHaE8?rs=1&pid=ImgDetMain" class="card-img-top transform-scale" alt="Sate Ayam">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Sate Ayam</h5>
                            <p class="card-text text-muted mb-3">Tusukan daging ayam lembut dengan saus kacang khas.</p>
                            <span class="h5 text-primary mb-0">Rp30.000</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <img src="https://th.bing.com/th/id/OIP.zctVgv-JmWOalQj7sdyNVQHaEc?rs=1&pid=ImgDetMain" class="card-img-top transform-scale" alt="Rendang">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Rendang</h5>
                            <p class="card-text text-muted mb-3">Daging sapi yang dimasak perlahan dengan rempah-rempah khas Padang.</p>
                            <span class="h5 text-primary mb-0">Rp45.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc3M3wwfDF8c2VhcmNofDl8fEluZG9uZXNpYW4lMjBmb29kfGVufDB8fHx8MTY4NTcyNjAwNQ&ixlib=rb-1.2.1&q=80&w=800" class="img-fluid rounded" alt="Warung Nusantara">
                </div>
                <div class="col-md-6">
                    <h2 class="display-5 fw-bold mb-4">Tentang Kami</h2>
                    <p class="lead text-muted mb-4">
                        Warung Nusantara menyajikan hidangan khas Indonesia yang autentik. Kami percaya bahwa setiap hidangan memiliki cerita dan keajaiban rasa tersendiri.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-primary me-2"></i>Rempah-rempah asli Indonesia</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i>Bahan segar setiap hari</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i>Pelayanan ramah dan hangat</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
