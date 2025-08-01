@extends('admin.layouts.layout')
@section('title', 'Trang quản lý danh mục loại Gói cước')
@section('content')
<div class="container">
    <br>
    <button class="btn btn-primary mb-3" style="margin-left: 10px;" data-toggle="modal"
        data-target="#categoryModal">Thêm</button>

    <div class="table-responsive">
        <table class="table table-bordered" id="categoryTable" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên loại gói cước</th>
                    <th>Mô tả</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="categoryModal">
    <div class="modal-dialog">
        <form id="categoryForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id" name="id"> <!-- Thêm ID nếu là chỉnh sửa -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập nhật Loại gói cước</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tenLoaiGoiCuoc">Tên loại Gói cước</label>
                        <input type="text" id="tenLoaiGoiCuoc" class="form-control" name="tenLoaiGoiCuoc" required>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô tả</label>
                        <textarea id="moTa" class="form-control" name="moTa" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Lưu</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')

<script>
    $('#categoryModal').on('show.bs.modal', function(event) {
        $('#categoryForm')[0].reset(); // Reset tất cả input trong form
        $('#id').val(''); // Xóa giá trị ID (tránh lỗi khi chỉnh sửa)
    });
        // Đảm bảo mã sẽ thực thi sau khi DOM hoàn tất
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        let table = $('#categoryTable').DataTable({
            ajax: '{{ route("admin.categories.data") }}',
            autoWidth: true, // Cho phép DataTables tự động tính toán độ rộng cột
            columns: [{
                    data: 'id',
                    width: "5%"
                },
                {
                    data: 'tenLoaiGoiCuoc',
                    width: "50%"
                },
                {
                    data: 'moTa',
                    width: "30%"
                },
                {
                    data: 'id',
                    width: "10%",
                    render: function(id) {
                        return `
                        <button onclick="editCategory(${id})" class="btn btn-warning" title="Sửa">
                            <i class='fas fa-edit'></i>
                        </button>
                        <button onclick="deleteCategory(${id})" class="btn btn-danger" title="Xóa">
                            <i class='fas fa-trash'></i>
                        </button>
                    `;
                    }
                }
            ],
            language: {
                emptyTable: "Chưa có dữ liệu hiển thị",
                loadingRecords: "Đang tải dữ liệu...",
                zeroRecords: "Không tìm thấy kết quả phù hợp",
                info: "Hiển thị _START_ đến _END_ của _TOTAL_ mục",
                infoEmpty: "Không có dữ liệu",
                infoFiltered: "(lọc từ _MAX_ mục)",
                search: "Tìm kiếm:",
                paginate: {
                    first: "Đầu",
                    last: "Cuối",
                    next: "Sau",
                    previous: "Trước"
                }
            },
            error: function(xhr, error, code) {
                console.log('Error loading data:', error);
            }
        });
        $('#categoryForm').on('submit', function(e) {
            e.preventDefault();

            let id = $('#id').val();
            let tenLoaiGoiCuoc = $('#tenLoaiGoiCuoc').val();
            let moTa = $('#moTa').val();

            if (!tenLoaiGoiCuoc) {
                toastr.error('Tên loại gói cước không được để trống');
                return;
            }

            let url = id ? `/admin/categories/${id}` : '/admin/categories';
            let method = 'POST';

            $.ajax({
                url: url,
                method: method,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // đảm bảo token hợp lệ
                },
                contentType: 'application/json',
                dataType: 'json',
                data: JSON.stringify({
                    tenLoaiGoiCuoc: tenLoaiGoiCuoc,
                    moTa: moTa
                }),
                success: function(response) {
                    $('#categoryModal').modal('hide');
                    toastr.success('Lưu loại gói cước thành công!');
                    $('#categoryTable').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    if (errors?.tenLoaiGoiCuoc) {
                        toastr.error(errors.tenLoaiGoiCuoc[0]);
                    } else {
                        toastr.error('Đã có lỗi xảy ra.');
                    }
                }
            });
        });



    });
    function editCategory(id) {
        $.ajax({
            url: `/admin/categories/${id}/edit`,
            method: 'GET',
            success: function(response) {
                console.log(response);
                $('#categoryModal').modal('show');
                $('#id').val(response.id);
                $('#tenLoaiGoiCuoc').val(response.tenLoaiGoiCuoc);
                $('#moTa').val(response.moTa);                    
            },
            error: function(xhr) {
                console.log(xhr.responseText); // In lỗi nếu có
                alert('Có lỗi xảy ra khi lấy dữ liệu bài viết');
            }
        });
        
    }
    function deleteCategory(id) {
        if (confirm("Bạn có chắc muốn xóa loại gói cước này?")) {
            $.ajax({
                url: `/admin/categories/${id}`,
                method: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    table.ajax.reload();
                    alert('Loại gói cước đã được xóa');
                },
                error: function() {
                    alert('Có lỗi khi xóa loại gói cước ');
                }
            });
        }
    }
</script>
@endpush