<div class="modal fade" id="modal-form" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidder="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/penerbit/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" name="kode" id="kode">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>

                    <button type="Submit" class="btn btn-success"><i class="fa fa-save"></i>
                        Simpan</button>
                </form>
            </div>

            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
