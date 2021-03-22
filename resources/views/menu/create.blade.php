@extends('layouts.user')

@section('content')
    <h2>Tambah Menu</h2>
    
    <form method="post" action="/menu" enctype="multipart/form-data">
    @csrf
    <div class="card px-4">
        <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama Menu</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama untuk menu" value="{{ old('name') }}">
                        @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="price">Harga</label>
                  <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Masukan harga menu" value="{{ old('name') }}">
                        @error('price')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                        @enderror
                </div>
                <div class="form-group">
                <label for="status">Status ketersediaan menu</label>
                <select id="status" name='status' class="form-control">
                  <option value="Coming Soon">Coming Soon</option>
                  <option value="Out of Stock">Out of Stock</option>
                  <option value="Available">Available</option>
                </select>
              </div>

                
              <div class="form-group">
                <label for="status">Foto menu</label>
                <div class="custom-file">
                    <input class="form-control-file @error('img') is-invalid @enderror" type="file" name="img" id="img">
                    @error('img')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                    @enderror
                    <small id="fileHelp" class="form-text text-muted">Ukuran gambar di haruskan 600x400 pixel.</small>
                  </div>
              </div>
                <button type="submit" class="btn btn-primary">Tambahkan Menu</button>
            </form>
        </div>
    </div>
@endsection