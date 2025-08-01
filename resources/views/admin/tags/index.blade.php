@extends('admin.layouts.layout')
@section('title', 'Trang quản lý danh mục chi tiết loại Gói cước')
@section('content')
<div class="container">
    <br>
    <button class="btn btn-primary mb-3" style="margin-left: 10px;" data-toggle="modal"
        data-target="#tagModal">Thêm</button>

    <div class="table-responsive">
        <table class="table table-bordered" id="tagTable" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên chi tiết loại gói cước</th>
                    <th>Mô tả</th>
                    <th>Loại gói cước</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="tagModal">
    <div class="modal-dialog">
        <form id="tagForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="id" name="id"> <!-- Thêm ID nếu là chỉnh sửa -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập nhật Chi tiết Loại gói cước</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="chiTietLoaiGoiCuoc">Tên chi tiết loại Gói cước</label>
                        <input type="text" id="chiTietLoaiGoiCuoc" class="form-control" name="chiTietLoaiGoiCuoc" required>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô tả</label>
                        <textarea id="moTa" class="form-control" name="moTa" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Loại Gói cước</label>
                        <select id="category_id" class="form-control" name="category_id" required>
                            <option value="">-- Chọn Loại Gói cước --</option>
                            @foreach ($categories as $type)
                            <option value="{{ $type->id }}">{{ $type->tenLoaiGoiCuoc }}</option>
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
    $('#tagModal').on('show.bs.modal', function(event) {
        $('#tagForm')[0].reset(); // Reset tất cả input trong form
        $('#id').val(''); // Xóa giá trị ID (tránh lỗi khi chỉnh sửa)
    });
        // Đảm bảo mã sẽ thực thi sau khi DOM hoàn tất
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        let table = $('#tagTable').DataTable({
            ajax: '{{ route("admin.tags.data") }}',
            autoWidth: true,
            columns: [
                { data: 'id', width: "5%" },
                { data: 'chiTietLoaiGoiCuoc', width: "40%" },
                { data: 'moTa', width: "30%" },
                {
                    data: 'category',
                    width: "15%",
                    render: function(data) {
                        console.log(data.tenLoaiGoiCuoc);
                        return data ? data.tenLoaiGoiCuoc : 'Không có loại';
                    }
                },
                {
                    data: 'id',
                    width: "10%",
                    render: function(id) {
                        return `
                            <button onclick="edittag(${id})" class="btn btn-warning" title="Sửa">
                                <i class='fas fa-edit'></i>
                            </button>
                            <button onclick="deletetag(${id})" class="btn btn-danger" title="Xóa">
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

        $('#tagForm').on('submit', function(e) {
            e.preventDefault();

            let id = $('#id').val();
            let formData = new FormData(this); // lấy toàn bộ dữ liệu trong form (bao gồm _token nếu có input hidden)

            let url = id ? `/admin/tags/${id}` : '/admin/tags';
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
                    $('#tagModal').modal('hide');
                    toastr.success('Lưu chi tiết loại gói cước thành công!');
                    $('#tagTable').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON?.errors;
                    if (errors?.chiTietLoaiGoiCuoc) {
                        toastr.error(errors.chiTietLoaiGoiCuoc[0]);
                    } else if (errors?.category_id) {
                        toastr.error(errors.category_id[0]);
                    } else {
                        toastr.error('Đã có lỗi xảy ra.');
                    }
                }
            });
        });




    });
    function edittag(id) {
        $.ajax({
            url: `/admin/tags/${id}/edit`,
            method: 'GET',
            success: function(response) {
                console.log(response);
                $('#tagModal').modal('show');
                $('#id').val(response.id);
                $('#chiTietLoaiGoiCuoc').val(response.chiTietLoaiGoiCuoc);
                $('#moTa').val(response.moTa);                    
                $('#category_id').val(response.category_id);                    
            },
            error: function(xhr) {
                console.log(xhr.responseText); // In lỗi nếu có
                alert('Có lỗi xảy ra khi lấy dữ liệu Chi tiết loại cước');
            }
        });
        
    }
    function deletetag(id) {
        if (confirm("Bạn có chắc muốn xóa Chi tiết loại cước này?")) {
            $.ajax({
                url: `/admin/tags/${id}`,
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