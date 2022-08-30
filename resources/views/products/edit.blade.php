<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <div class="row form-group">
                <div class="col-12">
                    <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $product->product_name }}">
                </div>
            </div>
            <div class="row">
                <div class="col pb-3">
                <button type="button" class="btn btn-sm btn-primary float-right" onclick="update({{ $product->id }})"><i class="fa fa-save mr-2"></i>Update</button>
                </div>
            </div>
        </div>
    </div>
</div>