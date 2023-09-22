<style>
.header-area {
    background-color: rgba(255, 255, 255, 0.5);
    /* box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.03); */
    position: fixed !important;
    left: 0px;
    right: 0px;
    top: 0px;
    z-index: 100;
    height: 80px;
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    -o-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
    border-radius: 35px;
    margin: 1% 1.5%;
}

.header-area .main-nav .logo {
    line-height: 75px;
    float: left;
    width: 20% !important;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.header-area .main-nav .nav {
    float: right;
    margin-top: 30px;
    margin-right: 0px;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
}

.header-area .main-nav .nav {
    float: right;
    margin-top: 20px;
    margin-right: 0px;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
}
</style>

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s" id="navbar-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?= base_url('/') ?>" class="logo">
                        <img class="navlog" src="<?= base_url('assets_client/images/logHead2.svg') ?>" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" id="navMenu">
                        <li class="scroll-to-section"><a href="<?php if($this->uri->segment(1) != "") echo base_url('#profil'); else echo '#profil'; ?>">Profil</a></li>
                        <!-- class="active" -->
                        <li class="scroll-to-section"><a href="<?php if($this->uri->segment(1) != "") echo base_url('#unit'); else echo '#unit'; ?>">Unit</a></li>
                        <li class="scroll-to-section"><a href="<?php if($this->uri->segment(1) != "") echo base_url('single/ppdb_single'); else echo '#ppdb'; ?>" class="<?php if($this->uri->segment(2) == 'ppdb_single') echo "active"; ?>">PPDB</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('berita') ?>">Berita</a></li>
                        <li class="scroll-to-section"><a href="<?php if($this->uri->segment(1) != "") echo base_url('#galeri'); else echo '#galeri'; ?>">Galeri</a></li>
                        <li class="scroll-to-section"><a href="<?php if($this->uri->segment(1) != "") echo base_url('#kontak'); else echo '#kontak'; ?>">Kontak</a></li>
                        <li class="scroll-to-section"><a href="<?= base_url('single/donasi_single'); ?>">Donasi</a></li>

                        <!-- <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Free Quote</a></div></li>  -->
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>