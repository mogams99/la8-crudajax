@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card text-left">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Product List</h4>
                        </div>
                        <div class="col-6 mb-3">
                            <button type="button" class="btn btn-sm btn-success float-right" onclick="create()"><i class="fa fa-plus mr-2"></i>Add Product</button>
                        </div>
                    </div>
                    <div id="read"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn-close-modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div id="pages" class="p-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script CRUD Product -->
<script type="text/javascript" src="{{ asset('dist/js/crud-operation.js') }}"></script>
@endsection