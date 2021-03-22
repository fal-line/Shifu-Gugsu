@extends('layouts.user')

@section('content')
<h2>List Detail Order</h2>
        <div class="card px-4">
            <div class="card-body">
                <p class="card-text">List Detail Order</p>
                <h4><a class="badge badge-success mb-2" href="{{ url('order_detail/create') }}">Tambah Detail Order</a></h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nomor Order</th>-
                        <th scope="col">Menu</th>-
                        <th scope="col">Kuantitas</th>-
                        <th scope="col">Meja</th>-
                        <th scope="col">Catatan Tambahan</th>
                        <th scope="col">Tanggal pemesanan</th>
                        <th scope="col">Total</th>-
                        <th scope="col">Status</th>-
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                  @foreach ($orderDetails as $orderDetail)
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$orderDetail->id}}</td>
                        <td>{{$orderDetail->order_id}}</td>
                        <td>{{$orderDetail->menu_id}}</td>
                        <td>{{$orderDetail->quantity}}</td>
                        <td>{{$order->table}}</td>
                        <td>{{$orderDetail->misc}}</td>
                        <td>{{$order->orderDate}}</td>
                        <td>@currency($orderDetails->amount)</td>
                        <td>{{$orderDetail->status}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/order/detail/{{$order->id}}">detail</a>
                        </td>
                    </tr>
                    @endforeach
                  @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
@endsection