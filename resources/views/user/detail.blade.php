@extends('layouts.user')

@section('content')
    <h2>Detail User</h2>
    
    <div class="card px-4">
      <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <h3>{{ $user->name }}</h3>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <h3>{{ $user->email }}</h3>
              </div>
              @can('IsAdmin')
              <div class="form-group">
                <label for="level_id">Level Akses User</label>
                <h3>{{ $user->level_id }}</h3>
              </div>
              @endcan
                <a class="btn btn-primary btn-sm" href="/user">Back</a>
                <a class="btn btn-warning btn-sm" href="/user/detail/edit/{{$user->id}}">edit</a>
          </form>
      </div>
  </div>
@endsection