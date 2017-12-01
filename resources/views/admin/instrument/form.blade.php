<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('post') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body" id="content">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Photo</label>
                        <div class="col-md-6">
                            <input type="file" id="gambar_studio" name="gambar_studio" class="form-control content">
                            <p class="gambar_studio content2"></p>
                            <img class="rounded-square photos content2"  width="50" height="50" src="" alt="">
                            <span class="help-block with-errors content"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Nama Studio</label>
                        <div class="col-md-6">
                            <input type="text" id="nama_studio" name="nama_studio" class="form-control content" autofocus required>
                            <p class="nama_studio content2"></p>
                            <span class="help-block with-errors content"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Harga</label>
                        <div class="col-md-6">
                            <input type="text" id="harga_studio" name="harga_studio" class="form-control content" autofocus required>
                            <p class="harga_studio content2"></p>
                            <span class="help-block with-errors content"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Deskripsi</label>
                        <div class="col-md-6">
                            <input type="text" id="ulasan_studio" name="ulasan_studio" class="form-control content" autofocus required>
                            <p class="ulasan_studio content2"></p>
                            <span class="help-block with-errors content"></span>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save content">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>