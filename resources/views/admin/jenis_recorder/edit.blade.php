<form method="post" class="form-horizontal" data-toggle="validator" action="{{action('JenisRecorderController@update', ['id' => $recorder->id])}}">
    {{ csrf_field() }} {{ method_field('put') }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>
        <h3 class="modal-title"></h3>
    </div>

    <div class="modal-body" id="content">
        <input type="hidden" id="id" name="id">
        <div class="form-group">
            <label for="category" class="col-md-3 control-label">Nama Recorder</label>
            <div class="col-md-6">
                <input type="text" id="nama_recorder" name="nama_recorder" value="{{$recorder->nama_recorder}}" class="form-control ab" autofocus required>
                <span class="help-block with-errors ab"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="category" class="col-md-3 control-label">Deskripsi</label>
            <div class="col-md-6">
                <input type="text" id="deskripsi" name="deskripsi" value="{{$recorder->deskripsi}}" class="form-control ab" autofocus required>
                <span class="help-block with-errors ab"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="category" class="col-md-3 control-label">Harga Recorder</label>
            <div class="col-md-6">
                <input type="text" id="harga_recorder" name="harga_recorder" value="{{$recorder->harga_recorder}}" class="form-control ab" autofocus required>
                <span class="help-block with-errors ab"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="category" class="col-md-3 control-label">Batas Hari</label>
            <div class="col-md-6">
                <input type="number" id="batas_hari" name="batas_hari" value="{{$recorder->batas_hari}}" class="form-control ab" autofocus required>
                <span class="help-block with-errors ab"></span>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-save ab">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>

</form>