@extends('layout.app')

@section('title', ' Anggota')

@section('content')
<section class="section">
    <div class="section-header">
        <h4>Anggota</h4>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Anggota</h4>

                <div class="card-header-form">
                    <a href="{{route('anggota.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>
                        Tambah Data</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                            <th style="width:10%">#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th style="width:15%">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($anggota as $agt)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$agt->kode}}</td>
                            <td>{{$agt->nama}}</td>
                            <td>{{$agt->jenis_kelamin}}</td>
                            <td>{{$agt->tanggal_lahir}}</td>
                            <td>{{$agt->telepon}}</td>
                            <td>{{$agt->alamat}}</td>
                            <td><img src="{{asset('/stroge/anggota/'.$agt->Foto)}}" class="rounded" style="width: 50px"></td>
                            <td>
                                <form action="/anggota/{{$agt->id}}" method="GET" id="delete-form{{$agt->id}}">
                                    @method('delete')
                                    <a href="/anggota/{{$agt->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger fa fa-trash" onclick="confirmDelete(delete-form{{$agt->id}})"></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

        
@push('script')
<script>
    function confirmDelete(itemId) {
        event.preventDefault();
        swal({
                title: 'Apakah Anda yakin?',
                text: 'Setelah dihapus, Anda tidak dapat memulihkannya!',
                icon: 'warning',
                buttons: true,
                dengerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById(itemId).submit();
                }
            });
    }

</script>
@endpush


@push('script')
    <script>
        $(document).ready(function(){
            $('#table').DataTable();
        })
    </script>
@endpush

