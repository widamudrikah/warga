@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                    <a href="/warga/create" class="btn btn-primary">Add Data</a>
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>NIK</th>
                            <th>NO.KK</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach($warga as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->nik}}</td>
                            <td>{{$row->no_kk}}</td>
                            <td>{{$row->jenis_kelamin}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>
                                <a href="/warga/{{$row->id}}/edit" class="btn btn-warning">Edit</a>
                                <form action="/warga/{{$row->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger mt-3" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection