@extends('layouts.user')

@section('content')
<h2>List User</h2>
        <div class="card px-4">
            <div class="card-body">
                <p class="card-text">List Menu</p>
                <h4><a class="badge badge-success mb-2" href="{{ url('menu/create') }}">Tambah Menu</a></h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga Menu</th>
                        <th scope="col">Ketersediaan Menu</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($menus as $menu)
                    <tr>
                    <th scope="row">{{$menu->id}}</th>
                        <td>{{$menu->name}}</td>
                        <td>@currency($menu->price)</td>
                        <td>{{$menu->status}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/menu/detail/{{$menu->id}}">detail</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
            </div>
        </div>
@endsection