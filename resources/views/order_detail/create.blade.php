@extends('layouts.user')

@section('content')
    <h2>Tambah Detail Order</h2>
    
    <form method="post" action="/menu" enctype="multipart/form-data">
    @csrf
    <div class="card px-4">
        <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <label for="name">Nomor Order</label>
                          <select id="order_id" name='order_id' class="form-control @error('order_id') is-invalid @enderror">
                            <option value="" selected>Pilih order</option>
                            @foreach ($orders as $order)
                            <option value="{{$order->id}}" {{ old('order_id') == $order->id ? 'selected' : '' }}>{{$order->id}}</option>
                            @endforeach
                          </select>
                          @error('order_id')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="table">Meja</label>
                        <select id="table" name='table' class="form-control @error('table') is-invalid @enderror">
                          <option value="" selected>Masukan posisi meja</option>
                          <option value="A1" {{ old('table') == 'A1' ? 'selected' : '' }}>A1</option>
                          <option value="A2" {{ old('table') == 'A2' ? 'selected' : '' }}>A2</option>
                          <option value="A3" {{ old('table') == 'A3' ? 'selected' : '' }}>A3</option>
                          <option value="B1" {{ old('table') == 'B1' ? 'selected' : '' }}>B1</option>
                          <option value="B2" {{ old('table') == 'B2' ? 'selected' : '' }}>B2</option>
                          <option value="B3" {{ old('table') == 'B3' ? 'selected' : '' }}>B3</option>
                        </select>
                        @error('table')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                        @enderror
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Menu</label>
                            <select id="menu_id" name='menu_id' class="form-control @error('menu_id') is-invalid @enderror">
                              <option value="" selected>Pilih Menu</option>
                              @foreach ($menus as $menu)
                              <option value="{{$menu->id}}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>{{$menu->name}} - @currency($menu->price)</option>
                              @endforeach
                            </select>
                            @error('menu_id')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="quantity">Kuantitas</label>
                    <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" placeholder="Masukan banyak menu" value="{{ old('quantity') }}">
                          @error('quantity')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                          @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="amount">Total</label>
                    <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" placeholder="Total harga keluar setelah input" value="{{ old('name') }}" readonly>
                          @error('amount')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                          @enderror
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="misc">Catatan Tambahan</label>
                <textarea class="form-control" id="misc" rows="3"></textarea>
              </div>
                
              <div class="row">
              
              <div class="col-md-9">
                <div class="form-group">
                  <label for="status">Status order</label>
                  <select id="status" name='status' class="form-control">
                    <option value="Dibuat">Di buat</option>
                    <option value="Sedang dimasak">Sedang di masak</option>
                    <option value="Siap diantarkan">Siap di antarkan</option>
                    <option value="Diterima">Di terima</option>
                    <option value="Selesai">Selesai</option>
                  </select>
                </div>
              </div>

                <div class="col-md-3">
                      <div class="form-group">
                        <label for="date">Tanggal pemesanan</label>
                        <br>
                        <input class="form-control" type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                </div>
              
              </div>

              
                <button type="submit" class="btn btn-primary">Tambahkan Menu</button>
            </form>
        </div>
    </div>
@endsection