@extends('layouts.user')

@section('content')
    <h2>Detail Menu</h2>
    
    <div class="card px-4">
      <div class="card-body">
              <div class="form-group">
                <label for="img">Foto Menu</label>
                <br>
                <img src="../../image/{{$menu->img}}" style="width:400px">
              </div>
              <div class="form-group">
                <label for="name">Nama</label>
                <h3>{{ $menu->name }}</h3>
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <h3>@currency($menu->price)</h3>
              </div>
              @can('IsAdmin')
              <div class="form-group">
                <label for="status">Status ketersediaan Menu</label>
                <h3>{{ $menu->status }}</h3>
              </div>
              @endcan
                <a class="btn btn-primary btn-sm" href="/menu">Back</a>
                <a class="btn btn-warning btn-sm" href="/menu/detail/edit/{{$menu->id}}">edit</a>
          </form>
      </div>
  </div>
@endsection