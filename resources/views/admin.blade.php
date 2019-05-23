@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>
 
                <div class="card-body">
 
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Pendaftar</th>
                          <th scope="col">Nama Masjid Yang Didaftarkan</th>
                          <th scope="col">ID Masjid</th>
                          <th scope="col">Luas Masjid</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Kab/Kota</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Contact</th>
                          <th scope="col">Foto</th>      
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                        <?php $i++ ;?>
                        <tr>
                          <th scope="row">{{ $i }}</th>
                          <td>{{ $user->Biodata->nama }}</td>
                          <td>{{ $user->Biodata->nis }}</td>
                          <td>{{ $user->Biodata->nem }}</td>
                          <td>{{ $user->Biodata->no_ijazah }}</td>
                          <td>{{ $user->Biodata->nama_ortu }}</td>
                          <td>{{ $user->Biodata->pekerjaan_ortu }}</td>
                          <td>{{ $user->Biodata->alamat }}</td>
                          <td>{{ $user->Biodata->telp }}</td>
                          <td>
                           <a href="{{asset('images')}}/{{$user->Biodata->url_foto}}" target="_blank">Lihat Foto {{ $user->Biodata->nama }}</a>
                           
                          </td>
                        </tr>
                        @endforeach
 
                      </tbody>
                    </table>
 
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection