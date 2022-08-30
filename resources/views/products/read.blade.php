<div class="table-responsive">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->product_name }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary" onclick="edit({{ $product->id }})"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="destroy({{ $product->id }})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>