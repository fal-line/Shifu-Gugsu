@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat datang {{ Auth::user()->name }}!
                </div>
            </div>

            <div class="card" style="margin-top: 25px;">
                <div class="card-header">Homepage</div>

                <div class="card-body">
                    <a href="{{ url('/') }}" class="btn btn-primary">Pergi ke homepage</a>
                </div>
            </div>
            
            
                        @can('IsAdmin')
                            
                        @endcan
                        @can('IsWaiter')
                            
                        @endcan
                        @can('IsCashier')
                            
                        @endcan
                        @can('IsCustomer')
                            
                        @endcan
                        @can('IsGuest')
                            
                        @endcan
                        @can('IsOwner')
                            
                        @endcan
                <div class="row" style="margin-top:25px">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Menu.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Menu</h5>
                            <p class="card-text">Daftar menu yang sudah di buat.</p>
                            <a href="{{ url('menu') }}" class="btn btn-primary">List Menu</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Order.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Order</h5>
                            <p class="card-text">Daftar Entri Order yang sudah di buat.</p>
                            <a href="{{ url('order') }}" class="btn btn-primary">Entri Order</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Order Detail.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Order Detail</h5>
                            <p class="card-text">Daftar Entri Order Detail yang sudah di buat.</p>
                            <a href="{{ url('order_detail') }}" class="btn btn-primary">Entri Order Detail</a>
                        </div>
                        </div>
                    </div>
                
                <div class="row" style="margin-top:25px">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri Transaksi.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri Transaksi</h5>
                            <p class="card-text">Daftar data order yang telah selesai.</p>
                            <a href="#" class="btn btn-primary">Entri Transaksi</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                                <div class="card" style="margin-bottom:20px">
                                    <div class="card-body">
                                    <h3 style="margin:25px"> Cool Entri User.png </h3>
                                    </div>
                                </div>
                            <h5 class="card-title">Data Entri User</h5>
                            <p class="card-text">Daftar User yang terdaftar.</p>
                            <a href="{{ url('user') }}" class="btn btn-primary">List User</a>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
