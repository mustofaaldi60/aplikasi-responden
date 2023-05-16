@extends('home.layouts.app')

@section('main')
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

@include('home.partials.hero')

<main id="main">
    <section id="acara" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Acara</h2>
                <h3>Rangkaian Kegiatan RRI Samarinda</h3>
            </div>
        </div>

        <div class="row content col-span-full">
            <div class="container container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Jenis Acara</th>
                            <th scope="col">Penyiar</th>
                            <th scope="col">Siaran</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($acaras as $acara)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{!! $acara->nama !!}</td>
                            <td>{!! $acara->slug !!}</td>
                            <td>{!! $acara->jenis !!}</td>
                            <td>{!! $acara->penyiar !!}</td>
                            <td>{!! $acara->siaran->nama !!}</td>
                            <td>{!! \Carbon\Carbon::parse($acara->hari)->format('D') !!}</td>
                            <td>{!! \Carbon\Carbon::parse($acara->jam)->format('H:i') !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $acaras->links() }}
            </div>
        </div>
    </section>

    <section id="siaran" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Siaran</h2>
                <h3>Saluran Siaran RRI Samarinda</h3>
            </div>
        </div>

        <div class="row content col-span-full">
            <div class="container container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Frekuensi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($siarans as $siaran)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $siaran->nama }}</td>
                            <td>{{ $siaran->frekuensi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $siarans->links() }}
            </div>
        </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Tentang</h2>
                <h3><span>Tentang RRI</span></h3>
                <p>Lembaga Penyiaran Publik Republik Indonesia adalah sebuah radio
                    siaran yang dapat menyuarakan kepentingan negara Indonesia baik untuk
                    masyarakat kita tapi juga untuk masyarakat Internasional, sehingga pada
                    awal kelahirannya RRI memposisikan dirinya sebagai “Radio Perjuangan”.
                    Dengan menempatkan dirinya di radio perjuangan.</p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <ul>
                        <li>VISI & MISI RRI</li>
                        <li>VISI RRI Menjadi radio republik milik bangsa dengan acuan informasi yang
                            terpercaya dan hiburan yang sehat,Pemberdaya Masyarakat,Perekat
                            budaya bangsa,sejahtera dan unggul nasional bertaraf internasional.Visi
                            tersebut menjadi visi bersama segenap angkasawan RRI yang menentukan
                            standar-standar prestasi dan mencerminkan cita-cita yang tinggi serta
                            mengilhami antusiasme dan merangsang komitmen.</li>
                        <li>MISI RRI Memberikan pelayanan informasi yang terpercaya bagi masyarakat guna
                            memenuhi hak masyarakat untuk memperoleh informasi melalui proses
                            kerja standar jurnalisme profesional. Juga Menjadi program siaran pendidikan sebagai pemberdaya masyarakat
                            dan mendorong proses demokratis yang tertumpu pada hak masyarakat.</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        TUJUAN RRI untuk memperkukuh
                        integrasi nasional, terbinanya watak dan jati diri bangsa, memajukan
                        kesejahteraan umum, dalam rangka membangun masyarakat yang mandiri,
                        demokratis, adil dan sejahtera serta menumbuhkan industri penyiaran
                        Indonesia.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Lokasi</h2>
                <h3>Informasi Lokasi</h3>
                <p>Lembaga Penyiaran Publik Radio Republik Indonesia yang ada di Samarinda ialah pusat Penyiaran yang ada di Kalimantan Timur dan di relay oleh satker RRI yang ada di Kalimantan Timur yang Terletak di Jalan M.Yamin No 8 Samarinda Ulu Provinsi Kalimantan Timur.</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6827358230644!2d117.14481791409744!3d-0.47235373541144116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df678cab567aabd%3A0x3d7c5624c4482931!2sLPP%20RRI%20SAMARINDA!5e0!3m2!1sid!2sid!4v1680090634717!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Jalan M.Yamin. No 8. Kecamatan Samarinda Ulu</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>rrisamarinda@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p> (0451) 736566</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

@include('home.partials.watermark')

@endsection
