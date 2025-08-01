@extends('admin.layouts.layout')
@section('title', 'Trang quản lý bình luận')
@section('content')
<div class="container">
    <br>
    <table class="table table-bordered" id="commentTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Người bình luận</th>
                <th>Bài viết</th>
                <th>Bình luận</th>
                <th>Trả lời cho bình luận</th>
                <th>Hành Động</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts_comments')
<script>
    $(document).ready(function() {
        // Khởi tạo DataTable
        var table = $('#commentTable').DataTable({
            ajax: '{{ route("admin.comments.data") }}',
            columns: [
                { data: 'id' },
                { data: 'user.name', defaultContent: 'N/A' },
                { data: 'product.tenGoiCuoc', defaultContent: 'N/A' },
                { data: 'content' },
                { data: 'parent', render: function(data, type, row) {
                    return data ? data.content : '';
                }},
                { data: 'id', render: function(id, type, row) {
                    return `<button class="btn btn-danger btn-delete" data-id="${id}">Xóa</button>`;
                }}
            ]
        });

        // Xử lý sự kiện xóa bình luận
        $('#commentTable').on('click', '.btn-delete', function() {
            var commentId = $(this).data('id');
            if (confirm("Bạn có chắc muốn xóa bình luận này không?")) {
                $.ajax({
                    url: '/admin/comments/' + commentId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.message);
                        table.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        alert("Lỗi xóa bình luận!");
                        console.log(error);
                    }
                });
            }
        });
    });
</script>
@endpush
