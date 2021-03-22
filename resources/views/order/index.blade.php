@extends('layouts.user')

@section('content')
<h2>List Order</h2>
        <div class="card px-4">
            <div class="card-body">
                <p class="card-text">List Order</p>
                <h4><a class="badge badge-success mb-2" href="{{ url('order/create') }}">Tambah Order</a></h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Meja</th>
                        <th scope="col">Tanggal pemesanan</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->table}}</td>
                        <td>{{$order->orderDate}}</td>
                        <td>@currency($order->total)</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/order/detail/{{$order->id}}">detail</a>
                        </td>
                    </tr>
                    @endforeach
                <!-- <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Meja</th>
                        <th scope="col">Catatan Tambahan</th>
                        <th scope="col">Tanggal pemesanan</th>
                        <th scope="col">Harga Menu</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->menu_id}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->table}}</td>
                        <td>{{$order->misc}}</td>
                        <td>{{$order->orderDate}}</td>
                        <td>@currency($order->amount)</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/order/detail/{{$order->id}}">detail</a>
                        </td>
                    </tr>
                    @endforeach -->
                    
                    </tbody>
                  </table>
            </div>
        </div>
@endsection