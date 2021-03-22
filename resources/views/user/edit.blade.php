@extends('layouts.user')

@section('content')
    <h2>Edit User</h2>
    
    <form method="post" action="/user/detail/edit/{{ $user->id }}">
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
              @can('IsAdmin')
              <div class="form-group">
                <label for="user_role">Level Akses User</label>
                <select id="level_id" name='level_id' class="form-control @error('level_id') is-invalid @enderror">
                  <option value="1" {{ $user->level_id == '1' ? 'selected' : '' }}>admin</option>
                  <option value="2" {{ $user->level_id == '2' ? 'selected' : '' }}>waiter</option>
                  <option value="3" {{ $user->level_id == '3' ? 'selected' : '' }}>cashier</option>
                  <option value="4" {{ $user->level_id == '4' ? 'selected' : '' }}>customer</option>
                  <option value="5" {{ $user->level_id == '5' ? 'selected' : '' }}>owner</option>
                  <option value="6" {{ $user->level_id == '6' ? 'selected' : '' }}>not-verified</option>
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
          <form action="/user/detail/edit/delete/{{$user->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm" href="">delete</button>
              </form>
      </div>
  </div>
@endsection