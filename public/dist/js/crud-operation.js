// Dokumen read function
$(document).ready(function() {
    read();
});

// Membuat fungsi read ajax
function read() {
    $.get('products/read', function (data) {

        // Menampilkan data pada table
        $('#read').html(data);
    });
}

// Membuat fungsi create ajax
function create() {
    $.get('products/create', function (data) {
        // Menampilkan data pada modal
        $('#pages').html(data);

        // Mengganti modal title
        $('#modalTitle').text('Add Product');

        // Membuka modal
        $('#modal').modal('show');
    });
}

// Membuat fungsi store ajax 
function store() {
    var product_name = $('#product_name').val();
    $.ajax({
        type: 'GET',
        // url untuk store
        url: 'products/store',
        data: {
            product_name: product_name,
        },
        success: function (data) {
            $('#btn-close-modal').click();

            // Menampilkan swal2 notifikasi product berhasil ditambahkan
            Swal.fire({
                title: 'Success',
                text: 'Product has been added',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            });

            // Jika sukses maka akan read data
            read();
        }
    });
}

// Membuat fungsi untuk menampilkan modal edit
function edit(id) {
    $.get('products/edit/' + id, function (data) {
        // Menampilkan data pada modal
        $('#pages').html(data);

        // Mengganti modal title
        $('#modalTitle').text('Edit Product');

        // Membuka modal
        $('#modal').modal('show');
    });
}

// Membuat fungsi update ajax
function update(id) {
    var product_name = $('#product_name').val();
    $.ajax({
        type: 'GET',
        // url untuk store
        url: 'products/update/' + id,
        data: {
            product_name: product_name,
        },
        success: function (data) {
            $('#btn-close-modal').click();

            // Menampilkan swal2 notifikasi product berhasil ditambahkan
            Swal.fire({
                title: 'Success',
                text: 'Product has been updated',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            });

            // Jika sukses maka akan read data
            read();
        }
    });
}

// Membuat fungsi delete ajax
function destroy(id) {
    // Membuat konfirmasi swal2
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                // url untuk store
                url: 'products/destroy/' + id,
                success: function (data) {
                    // Menampilkan swal2 notifikasi product berhasil ditambahkan
                    Swal.fire({
                        title: 'Success',
                        text: 'Product has been deleted',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // Jika sukses maka akan read data
                    read();
                }
            });
        }
    });
}

