@extends('admin.layouts.layout')
@section('title', 'Trang quản lý danh mục Gói cước')
@section('content')
@push('css_product')
    <STYle>
        .d-flex > * + * {
            margin-left: 10px;
        }

    </STYle>
@endpush
<div class="container">
    <br>
    <div class="d-flex align-items-start gap-2 mb-3">
        <!-- Nút thêm -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#productModal">
            Thêm
        </button>

        <!-- Form import -->
        <form method="POST" action="{{ route('admin.products.import') }}" enctype="multipart/form-data" class="d-flex align-items-center gap-2">
            @csrf
            <label for="file" class="form-label mb-0">Import file Excel</label>
            <input type="file" name="file" class="form-control form-control-sm" required style="width: 200px;">
            <button type="submit" class="btn btn-success btn-sm">Import</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="productTable" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên gói cước</th>
                    <th>Giá tiền</th>
                    <th>Dung lượng</th>
                    <th>Cú pháp</th>
                    <th>Mô tả</th>
                    <th>Hướng dẫn</th>
                    <th>Chi tiết gói cước</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="productModal">
    <div class="modal-dialog">
        <form id="productForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id" name="id"> <!-- Thêm ID nếu là chỉnh sửa -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập nhật Chi tiết Loại gói cước</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tenGoiCuoc">Tên Gói cước</label>
                        <input type="text" id="tenGoiCuoc" class="form-control" name="tenGoiCuoc" required>
                    </div>
                    <div class="form-group">
                        <label for="giaTien">Giá tiền</label>
                        <input type="text" id="giaTien" class="form-control" name="giaTien" required>
                    </div>
                    <div class="form-group">
                        <label for="dungLuong">Dung lượng</label>
                        <input type="text" id="dungLuong" class="form-control" name="dungLuong" required>
                    </div>
                    <div class="form-group">
                        <label for="cuPhap">Cú pháp</label>
                        <textarea id="cuPhap" class="form-control" name="cuPhap" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô tả</label>
                        <textarea id="moTa" class="form-control" name="moTa" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="huongDan">Mô tả</label>
                        <textarea id="huongDan" class="form-control" name="huongDan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag_id">Chi tiết loại Gói cước</label>
                        <select id="tag_id" class="form-control" name="tag_id" required>
                            <option value="">-- Chọn chi tiết loại Gói cước --</option>
                            @foreach ($tags as $type)
                            <option value="{{ $type->id }}">{{ $type->chiTietLoaiGoiCuoc }}</option>
                            @endforeach
                        </select>
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
    $('#productModal').on('show.bs.modal', function(event) {
        $('#productForm')[0].reset(); // Reset tất cả input trong form
        $('#id').val(''); // Xóa giá trị ID (tránh lỗi khi chỉnh sửa)
    });
    // Đảm bảo mã sẽ thực thi sau khi DOM hoàn tất
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        let table = $('#productTable').DataTable({
            ajax: '{{ route("admin.products.data") }}',
            autoWidth: true,
            columns: [{
                    data: 'id',
                    width: "5%"
                },
                {
                    data: 'tenGoiCuoc',
                    width: "15%"
                },
                {
                    data: 'giaTien',
                    width: "10%"
                },
                {
                    data: 'dungLuong',
                    width: "5%"
                },
                {
                    data: 'cuPhap',
                    width: "10%"
                },
                {
                    data: 'moTa',
                    width: "20%"
                },
                {
                    data: 'huongDan',
                    width: "20%"
                },
                {
                    data: 'tag',
                    width: "10%",
                    render: function(data) {
                        console.log(data.tenLoaiGoiCuoc);
                        return data ? data.chiTietLoaiGoiCuoc : 'Không có loại';
                    }
                },
                {
                    data: 'id',
                    width: "5%",
                    render: function(id) {
                        return `
                            <button onclick="editproduct(${id})" class="btn btn-warning" title="Sửa">
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick="deleteproduct(${id})" class="btn btn-danger" title="Xóa">
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
        $('#productForm').on('submit', function(e) {
            e.preventDefault();
            let id = $('#id').val();
            let form = $('#productForm')[0];
            let formData = new FormData(
            this); // lấy toàn bộ dữ liệu trong form (bao gồm _token nếu có input hidden)
            let url = id ? `/admin/products/${id}` : '/admin/products';
            let method = id ? 'POST' : 'POST';
            $.ajax({
                url: url,
                method: method,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                contentType: false, // bắt buộc khi dùng FormData
                processData: false, // bắt buộc khi dùng FormData
                success: function(response) {
                    $('#productModal').modal('hide');
                    toastr.success('Lưu chi tiết loại gói cước thành công!');
                    $('#productTable').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON?.errors;
                    if (errors?.chiTietLoaiGoiCuoc) {
                        toastr.error(errors.chiTietLoaiGoiCuoc[0]);
                    } else if (errors?.category_id) { // ✅ Sửa ở đây
                        toastr.error(errors.category_id[0]);
                    } else {
                        toastr.error('Đã có lỗi xảy ra.');
                    }
                }

            });
        });
    });

    function editproduct(id) {
        $.ajax({
            url: `/admin/products/${id}/edit`,
            method: 'GET',
            success: function(response) {
                console.log("response", response);
                $('#productModal').modal('show');
                $('#id').val(response.id);
                $('#tenGoiCuoc').val(response.tenGoiCuoc);
                $('#giaTien').val(response.giaTien);
                $('#huongDan').val(response.huongDan);
                $('#dungLuong').val(response.dungLuong);
                $('#cuPhap').val(response.cuPhap);
                $('#moTa').val(response.moTa);
                $('#tag_id').val(response.tag_id);
            },
            error: function(xhr) {
                console.log(xhr.responseText); // In lỗi nếu có
                alert('Có lỗi xảy ra khi lấy dữ liệu Chi tiết loại cước');
            }
        });
    }

    function deleteproduct(id) {
        if (confirm("Bạn có chắc muốn xóa Chi tiết loại cước này?")) {
            $.ajax({
                url: `/admin/products/${id}`,
                method: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    table.ajax.reload();
                    alert('Chi tiết loại cước đã được xóa');
                },
                error: function() {
                    alert('Có lỗi khi xóa Chi tiết loại cước');
                }
            });
        }
    }
</script>
@endpush