@extends('layout.app')

@section('title', 'Penerbit')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Penerbit</h1>
    </div>


    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Penerbit</h4>

                <div class="card-header-form">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-form">Tambah
                        Data</button>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </thead>

                    <tbody>
                        <tr>
                        </tr>
                    <tbody>
                        @foreach ($penerbit as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->nama}}</td>
                            <td>
                                <form action="/penerbit/{{$item->id}}" method="GET" id="delete-form{{$item->id}}">
                                    @method('delete')
                                    <a href="/penerbit/{{$item->id}}/edit" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger fa fa-trash" onclick="confirmDelete(delete-form{{$item->id}})"></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                </table>
            </div>

        </div>

</section>
@include('Penerbit.form')
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

