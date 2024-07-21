@extends('kerangka.master')

@section('title', 'Dashboard')
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('guru.index') }}" class="card-link" style="text-decoration: none; color: inherit;">
                <div class="card" style="transition: transform 0.2s, box-shadow 0.2s; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">
                    <div class="card-body" style="display: flex; justify-content: space-between; align-items: center; padding: 16px;">
                        <div>
                            <h5 class="card-title" style="margin-bottom: 10px;">Data Guru</h5>
                            <a href="{{ route('guru.index') }}" class="view-data" style="text-decoration: underline; font-size: 14px; color: inherit;">View Data</a>
                        </div>
                        <div class="stats-icon purple" style="font-size: 24px;">
                            <i class="iconly-boldShow"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('santri.index') }}" class="card-link" style="text-decoration: none; color: inherit;">
                <div class="card" style="transition: transform 0.2s, box-shadow 0.2s; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">
                    <div class="card-body" style="display: flex; justify-content: space-between; align-items: center; padding: 16px;">
                        <div>
                            <h5 class="card-title" style="margin-bottom: 10px;">Data Santri</h5>
                            <a href="{{ route('santri.index') }}" class="view-data" style="text-decoration: underline; font-size: 14px; color: inherit;">View Data</a>
                        </div>
                        <div class="stats-icon green" style="font-size: 24px;">
                            <i class="iconly-boldAdd-User"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('kegiatans.index') }}" class="card-link" style="text-decoration: none; color: inherit;">
                <div class="card" style="transition: transform 0.2s, box-shadow 0.2s; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #fff;">
                    <div class="card-body" style="display: flex; justify-content: space-between; align-items: center; padding: 16px;">
                        <div>
                            <h5 class="card-title" style="margin-bottom: 10px;">Data Kegiatan</h5>
                            <a href="{{ route('kegiatans.index') }}" class="view-data" style="text-decoration: underline; font-size: 14px; color: inherit;">View Data</a>
                        </div>
                        <div class="stats-icon blue" style="font-size: 24px;">
                            <i class="iconly-boldProfile"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    
    

  
</div>
@endsection
