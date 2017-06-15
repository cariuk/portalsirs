<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
    <!-- Navbar Header Starts -->
    <div class="navbar-header">
        <!-- Collapse Button Starts -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collapse Button Ends -->
        <!-- Logo Starts -->
        <a href="index.html" class="navbar-brand">
            <img src="<?=base_url()?>assets/images/ananda-logos.png" width="160px;"/>
        </a>
        <!-- Logo Ends -->
    </div>
    <!-- Navbar Header Ends -->
    <!-- Navbar Collapse Starts -->
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li><a href="<?=base_url()?>tentangkami">Tentang Kami</a></li>
            <li class="dropdown" ><a href="<?=base_url()?>fasilitaslayanan">Fasilitas & Layanan</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=base_url()?>fasilitaslayanan/virtualtour" target="_blank">Virtual Tour</a></li>
                    <li><a href="<?=base_url()?>fasilitaslayanan/instalasirawatjalan">Instalasi Rawat Jalan</a></li>
                    <li><a href="<?=base_url()?>fasilitaslayanan/instalasirawatinap">Instalasi Rawat Inap</a></li>
                    <li><a href="<?=base_url()?>fasilitaslayanan/instalasirawatinap">Laboratorium</a></li>
                    <li><a href="<?=base_url()?>fasilitaslayanan/instalasirawatinap">Farmasi</a></li>
                </ul>
            </li>
            <li><a href="<?=base_url()?>dokterkami">Dokter Kami</a></li>
            <li>
                <a href="<?=base_url()?>tipsberita">
                    Tips & Berita
                </a>
            </li>
            <li><a href="<?=base_url()?>kontakkami">Kontak Kami</a></li>
        </ul>
    </div>
    <!-- Navbar Collapse Ends -->
</div>
