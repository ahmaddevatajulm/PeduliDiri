@extends('layouts.master')
<title>Peduli Diri &mdash; Input Data</title>
@section('title')
    <h1>Input Data Perjalanan</h1>
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data telah tersimpan!</strong>
</div>
@endif
    <div class="card-body">
        <form method="POST" action="/simpandataperjalanan">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <input type="date" max="{{ date('Y-m-d') }}" class="form-control" name="tanggal" required>
                    <div class="invalid-feedback">
                        Tanggal harus diisi
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label for="jam">Jam</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <input type="time" class="form-control" name="jam" required>
                    <div class="invalid-feedback">
                        Jam harus diisi
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" pattern="[A-Za-z\s]{1,30}" name="lokasi" min="0" max="30" required>
                    <div class="invalid-feedback">
                        Lokasi harus diisi
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label for="suhu">Suhu</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-temperature-low"></i>
                        </div>
                    </div>
                    <input type="number" class="form-control" name="suhu" min="34" max="37" required>
                    <div class="invalid-feedback">
                        Suhu harus diisi
                      </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-block col-4" style="background-color: #c5c5c5">
                    Masukkan Data
                </button>
            </div>
        </form>
    </div>

@endsection
