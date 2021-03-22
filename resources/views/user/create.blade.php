@extends('layouts.user')

@section('content')
    <h2>Tambah User</h2>
    
    <form method="post" action="/user">
    @csrf
    <div class="card px-4">
        <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama user" value="{{ old('name') }}">
                        @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email user" value="{{ old('email') }}">
                        @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" type="text" id="password" name="password" placeholder="Masukan password user">
                </div>

                <button type="submit" class="btn btn-primary">Tambahkan user</button>
            </form>
        </div>
    </div>
@endsection