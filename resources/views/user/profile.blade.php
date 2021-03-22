@extends('layouts.user')

@section('content')

<h2>Edit User</h2>
    
    <form method="post" action="/user/edit/{{ $user->id }}">
      @method('patch')
    @csrf
    <div class="card px-4">
      <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama user" value="{{ $user->name }}">
                      @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                      @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email user" value="{{ $user->email }}">
                      @error('email')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                      @enderror
              </div>
              @can('isAdmin')
              <div class="form-group">
                <label for="user_role">Level Akses User</label>
                <select id="user_role" name='user_role' class="form-control @error('user_role') is-invalid @enderror">
                  <option value="user" {{ $user->user_role == 'user' ? 'selected' : '' }}>User</option>
                  <option value="student" {{ $user->user_role == 'student' ? 'selected' : '' }}>Siswa</option>
                  <option value="employe" {{ $user->user_role == 'employe' ? 'selected' : '' }}>Petugas</option>
                  <option value="admin" {{ $user->user_role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
                @error('user_role')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                @enderror
              </div>
              @endcan
              <button type="submit" class="btn btn-primary">Ubah user</button>
          </form>
      </div>
  </div>
@endsection