<div class="modal fade" id="itemEdit-modal" tabindex="-1" role="dialog" aria-labelledby="itemEdit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemEdit-modal-title">編輯商品</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="itemEdit-form" class="" method="POST" action="">
                <div class="modal-body">
                    @csrf
                    <div class="card text-white bg-dark mb-0">
                        <div class="card-header">
                            <h2 id='itemEdit-modal-label' class="m-0">編輯商品</h2>
                        </div>
                        <div class="card-body">
                            <!-- Equivalent to... -->
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="modal-edit-id" id="modal-edit-id" value="">
                            <div class="form-group">
                                <label class="col-form-label" for="modal-edit-title">名稱</label>
                                <input type="text" name="modal-edit-title" class="form-control" id="modal-edit-title" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-edit-pic">照片</label>
                                <input type="text" name="modal-edit-pic" class="form-control" id="modal-edit-pic" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-edit-price">價錢</label>
                                <input type="text" name="modal-edit-price" class="form-control" id="modal-edit-price" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-edit-totle">數量</label>
                                <input type="text" name="modal-edit-totle" class="form-control" id="modal-edit-totle" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="儲存" ></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="itemAdd-modal" tabindex="-1" role="dialog" aria-labelledby="itemAdd-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemAdd-modal-title">新增商品</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="itemAdd-form" class="" method="POST" action="/admin/items">
                <div class="modal-body">
                    @csrf
                    <div class="card text-white bg-dark mb-0">
                        <div class="card-header">
                            <h2 id='itemAdd-modal-label' class="m-0">新增商品</h2>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label class="col-form-label" for="modal-input-title">名稱</label>
                                <input type="text" name="modal-input-title" class="form-control" id="modal-input-title" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-input-pic">照片</label>
                                <input type="text" name="modal-input-pic" class="form-control" id="modal-input-pic" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-input-price">價錢</label>
                                <input type="text" name="modal-input-price" class="form-control" id="modal-input-price" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="modal-input-totle">數量</label>
                                <input type="text" name="modal-input-totle" class="form-control" id="modal-input-totle" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="儲存" ></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </form>
        </div>
    </div>
</div>