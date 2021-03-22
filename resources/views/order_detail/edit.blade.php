@extends('layouts.user')

@section('content')
    <h2>Edit Menu</h2>
    
    <form method="post" action="/menu/detail/edit/{{ $menu->id }}">
      @method('patch')
    @csrf
    <div class="card px-4">
      <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama untuk menu" value="{{ $menu->name }}">
                      @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                      @enderror
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Masukan harga menu" value="{{ $menu->price }}">
                      @error('price')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                      @enderror
              </div>
              @can('IsAdmin')
              <div class="form-group">
                <label for="status">Level Akses User</label>
                <select id="status" name='status' class="form-control @error('status') is-invalid @enderror">
                  <option value="Coming Soon" {{ $menu->status == 'Coming Soon' ? 'selected' : '' }}>Coming Soon</option>
                  <option value="Out of Stock" {{ $menu->status == 'Out of Stock' ? 'selected' : '' }}>Out of Stock</option>
                  <option value="Available" {{ $menu->status == 'Available' ? 'selected' : '' }}>Available</option>
                </select>       
                @error('status')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
              </div>
              @endcan
              <button type="submit" class="btn btn-primary">Ubah menu</button>
          </form>
          <form action="/menu/detail/edit/delete/{{$menu->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm" href="">delete</button>
              </form>
      </div>
  </div>
@endsection