@extends('layouts.app')

@section('title', 'Ekonomi Kreatif - HIMTI Teknik Informatika')

@section('content')
<div class="department-page">
    <!-- Background pattern elements -->
    <div class="background-pattern">
        <div class="pattern-right">
            <img src="{{ asset('images/depart/sub-ekraf.png.png') }}" alt="Background pattern">
        </div>
    </div>

    <main class="container main-content">
        <!-- Department Header Section -->
        <section class="department-header">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="department-title">EKONOMI KREATIF</h1>
                    <div class="department-year">HIMTI 2025</div>
                    <div class="department-tagline">kata kata si divisi</div>
                </div>
                <div class="col-md-5">
                    <!-- This space is for the circuit/gear pattern that's in the background -->
                </div>
            </div>
        </section>

        <!-- Department Head Section -->
        <section class="department-head-section">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="head-image-container">
                        <img src="{{ asset('images/depart/ekraf.png') }}" alt="Naurah" class="head-image">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="head-title">Ketua Departemen</h2>
                    <h3 class="head-name">Naurah</h3>
                </div>
            </div>
        </section>

        <!-- Sub Department Section -->
        <section class="sub-department-section">
            <h2 class="section-title">Sub Departemen</h2>
            <div class="section-divider"></div>
            
            <div class="sub-department-image">
                <img src="{{ asset('images/depart/sub-ekraf.png') }}" alt="Sub Departemen Team" class="img-fluid">
            </div>
        </section>

        <!-- Program Kerja Section -->
        <section class="program-kerja-section">
            <div class="wave-bg">
                <h2 class="program-title text-center">PROGRAM KERJA</h2>
                
                <div class="program-cards">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="program-card">
                                <h3 class="program-card-title">LOREM IPSUM</h3>
                                <p class="program-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="program-card">
                                <h3 class="program-card-title">LOREM IPSUM</h3>
                                <p class="program-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="program-card">
                                <h3 class="program-card-title">LOREM IPSUM</h3>
                                <p class="program-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="program-card">
                                <h3 class="program-card-title">LOREM IPSUM</h3>
                                <p class="program-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
