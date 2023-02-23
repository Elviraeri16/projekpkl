<nav class="navbar navbar-expand-lg navbar-light" id="header" id="home" style="background:transparent">
    <div class="container">
        <div id="logo2" class="navbar-brand animate__animated animate__flipInX">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01.png') }}" style="width:80px;" alt="" title="" /></a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="{{ route('artikel') }}"
                    style="color: #fe7b54;font-size: 16px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
                    </a>
                </li>
                <li class="dropdown"><a href="#" style="color: #fe7b54;font-size: 16px; background-color: #fe7c5400; font-weight:600"><span class="fa fa-map-marker mr-2" aria-hidden="true"></span>Kota Lainnya</a>
                    <ul class="isi-dropdown">
                        <li><img class="logo1" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/lokersemar-icon.png"><a href="https://www.lokersemar.id/">Semarang</a></li>
                        <hr>
                        <li><img class="logo1" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/jakartakerja-icon.png"><a href="https://www.jakartakerja.com/">Jakarta</a></li>
                        <hr>
                        <li><img class="logo1" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/lokerbandung-icon.png"><a href="https://www.lokerbandung.id/">Bandung</a></li>
                    </ul>
                </li>
                <li class="nav-item mb-2 mb-md-0 mr-3">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('daftarkandidat') }}"
                        style="color: #fee5ba;width:max-content;font-weight:600">
                        <span class="fas fa-user-tie mr-2"></span> Daftar Sebagai Kandidat
                    </a>
                </li>
                <li class="nav-item">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('pilihpaket') }}"
                        style="color: #fee5ba;width:max-content;font-weight:600">

                        <span class="fas fa-briefcase mr-2"></span> Pasang Lowongan
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>
<style type="text/css">
    li.dropdown {
        display: inline-block;
        margin: auto;
        padding-right: 20px;
        padding-left: 5px;
    }

    .dropdown {
        color: white;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .isi-dropdown {
        display: none;
        position: absolute;
        background-color: #FFFFFF;
        border-radius: 5px;
        min-width: 160px;
        box-shadow: 0px 8px 13px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .isi-dropdown a {
        font-weight: bold;
        color: black;
        padding: 8px;
        margin: auto;
        text-decoration: none;
    }

    .logo1 {
        padding: 8px;
        width: 50px;
        height: auto;
        text-align: left;
    }

    /* .isi-dropdown a:hover {
  background-color: #fe7b54;
} */

    .dropdown:hover .isi-dropdown {
        display: block;
    }

    .dropdown:hover .dropdown {
        background-color: #3e8e41;
    }
</style>