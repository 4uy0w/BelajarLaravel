@extends('siswa.layout')
@section('content')
<div class="container mt-5">
    <div class="row jusBfy-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br> <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('siswa.store') }}" id="myForm"> 
                    @csrf 
                    <div class="form-group">
                        <label for="Nis">Nis</label>
                        <input type="text" name="Nis" class="form-control" id="Nis" aria-describedby="Nis" >
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="Kelas" name="Kelas" class="form-control" id="Kelas" aria-describedby="password" >
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
d.Edit.blade.php@extends('siswa.layout')
@section('content')
    <div class="container mt-5">
        <div class="row jusBfy-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Siswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br> <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('siswa.update', $Siswa->nis) }}" id="myForm"> @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nis">Nis</label>
                            <input type="text" name="Nis" class="form-control" id="Nis" value="{{ $Siswa- >nis}}" aria-describedby="Nis" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Siswa- >nama}}" aria-describedby="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <input type="Kelas" name="Kelas" class="form-control" id="Kelas" value="{{ $Siswa- >kelas}}" aria-describedby="Kelas" >
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Siswa->jurusan }}" aria-describedby="Jurusan" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection