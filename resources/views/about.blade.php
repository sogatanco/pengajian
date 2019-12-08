@extends('layouts.main')
      
@section('title','Geo-Pengajian | About')

@section('content')
<!-- add about here -->
   <dl >
    <h5 class="mt-4">Apa itu Sistem Informasi Geografis Pengajian Lhoksukon ?</h5>
    <dd>sebuah sistem yang dirancang berbasis web dengan tujuan untuk membantu pengguna dalam mencari lokasi pengajian terdekat di are Aceh Utara beserta jadwal dan detail informasi lainnya.</dd>
    <h5 class="mt-3">Siapa yang mengembangkan aplikasi ini ? </h5>
    <dd>Aplikasi ini dikembangkan oleh salah seorang Mahasiswa Teknik Informatika Politeknik Negeri Lhokseumawe pada tahun 2019. Pengembang Aplikasi ini bernama lengkap Risky Maulana dari Lhoksukon Aceh Utara.</dd>
    <h5 class="mt-3">Kenapa dikembangkan ? </h5>
    <dd>Sebagai Tugas Akhir yang menjadi  salah satu syarat kelulusan di Politeknik Negeri Lhokseumawe dan berharap pengaplikasiannya bisa dirakan oleh seluruh lapisan masyarakat khususnya untuk masyarakat Aceh Utara</dd>
  </dl> 
@endsection

@section('widget')
    @include("widget/past")
    @include("widget/adsense")
@endsection