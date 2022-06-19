@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pemilih</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="rounded-top bg-success py-3 px-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white"><img class="mr-2" src="/img/pilih.png" alt="tambah" width="20">Edit Data</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/user/{{ $user->username }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama_pengguna">Nama Pemilih</label>
                        <input type="text" class="form-control @error('nama_pengguna') is-invalid @enderror" id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna', $user->nama_pengguna) }}" placeholder="Masukkan nama pemilih">

                        @error('nama_pengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Masukkan alamat email">

                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="select2-single-placeholder form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">-- Pilih --</option>

                            @if (old('jenis_kelamin', $user->jenis_kelamin) == "L")
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                            @else
                            <option value="L">Laki-laki</option>
                            <option value="P" selected>Perempuan</option>
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tpa">Asal TPQ</label>
                        <input type="text" class="form-control @error('tpa') is-invalid @enderror" id="tpa" name="tpa" value="{{ old('tpa', $user->tpa) }}" placeholder="Masukkan nama tpq">

                        @error('tpa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="select2-single-placeholder form-control" name="kecamatan" id="kecamatan">
                            <option value="">-- Pilih --</option>

                            @if (old('Kecamatan', $user->Kecamatan) == "Tegalrejo")
                            <option value="Danurejan">Danurejan</option>
                            <option value="Gedong Tengen">Gedong Tengen</option>
                            <option value="Gondokusuman">Gondokusuman</option>
                            <option value="Gondomanan">Gondomanan</option>
                            <option value="Jetis">Jetis</option>
                            <option value="Kotagede">Kotagede</option>
                            <option value="Kraton">Kraton</option>
                            <option value="Mantrijeron">Mantrijeron</option>
                            <option value="Mergangsan">Mergangsan</option>
                            <option value="Ngampilan">Ngampilan</option>
                            <option value="Pakualaman">Pakualaman</option>
                            <option value="Tegalrejo" selected>Tegalrejo</option>
                            <option value="Umbulharjo">Umbulharjo</option>
                            <option value="Wirobrajan">Wirobrajan</option>
                            @else
                            <option value="Danurejan">Danurejan</option>
                            <option value="Gedong Tengen">Gedong Tengen</option>
                            <option value="Gondokusuman">Gondokusuman</option>
                            <option value="Gondomanan">Gondomanan</option>
                            <option value="Jetis">Jetis</option>
                            <option value="Kotagede">Kotagede</option>
                            <option value="Kraton">Kraton</option>
                            <option value="Mantrijeron">Mantrijeron</option>
                            <option value="Mergangsan">Mergangsan</option>
                            <option value="Ngampilan">Ngampilan</option>
                            <option value="Pakualaman" selected>Pakualaman</option>
                            <option value="Tegalrejo">Tegalrejo</option>
                            <option value="Umbulharjo">Umbulharjo</option>
                            <option value="Wirobrajan">Wirobrajan</option>
                            @endif

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pengurus">Kepengurusan</label>
                        <select class="select2-single-placeholder form-control" name="pengurus" id="pengurus">
                            <option value="">-- Pilih --</option>

                            @if (old('pengurus', $user->pengurus) == "Bukan Pengurus")
                            <option value="Bukan Pengurus" selected>Bukan Pengurus</option>
                            <option value="Pengurus Badko TPA Kota">Pengurus Badko TPA Kota</option>
                            <option value="Pengurus Badko TPA Rayon">Pengurus Badko TPA Rayon</option>
                            @else
                            <option value="Bukan Pengurus">Bukan Pengurus</option>
                            <option value="Pengurus Badko TPA Kota" selected>Pengurus Badko TPA Kota</option>
                            <option value="Pengurus Badko TPA Rayon">Pengurus Badko TPA Rayon</option>
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="select2-single-placeholder form-control" name="level" id="level">
                            <option value="">-- Pilih --</option>

                            @if (old('level', $user->level) == "Administrator")
                            <option value="Administrator" selected>Administrator</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Pemilih">Pemilih</option>
                            @elseif ((old('level', $user->level) == "Petugas"))
                            <option value="Administrator">Administrator</option>
                            <option value="Petugas" selected>Petugas</option>
                            <option value="Pemilih">Pemilih</option>
                            @else
                            <option value="Administrator">Administrator</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Pemilih" selected>Pemilih</option>
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username) }}" placeholder="Masukkan username">

                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/dashboard/user" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection