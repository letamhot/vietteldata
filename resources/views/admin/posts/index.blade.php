@extends('admin.layouts.layout')
@section('title', 'Trang quản lý danh mục tin tức')
@section('content')
<div class="container">
    <br>
    <button class="btn btn-primary mb-3" style="margin-left: 10px;" data-toggle="modal" data-target="#postModal">Thêm
        Bài Viết</button>

    <div class="table-responsive">

        <table class="table table-bordered" id="postTable" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                    <th>Hình Ảnh</th>
                    <th>Loại bài viết</th>
                    <th>Người Đăng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="postModal">
    <div class="modal-dialog">
        <form id="postForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="postId" name="postId"> <!-- Thêm ID nếu là chỉnh sửa -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập Nhật Bài Viết</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" id="title" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Nội Dung</label>
                        <textarea id="content" class="form-control" name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="typePost_id">Loại Bài Viết</label>
                        <select id="typePost_id" class="form-control" name="typePost_id" required>
                            <option value="">-- Chọn Loại Bài Viết --</option>
                            @foreach ($typePosts as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" id="image" class="form-control" name="image">
                        <img id="image_post" src="http://tabern.vietprojectgroup.com/images/user.png" alt=""
                            width="80px" height="80px">
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
<div class="modal fade" id="postDetailModal">
    <div class="modal-dialog modal-lg">
        <form id="postDetailForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="detailId" name="id">
            <input type="hidden" id="post_id" name="post_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập Nhật Chi Tiết Bài Viết</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- Mô tả -->
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="description" class="form-control" name="description"></textarea>
                    </div>

                    <!-- Upload file media -->
                    <div class="form-group">
                        <label>File Nội Dung</label>
                        <input type="file" id="media_url" class="form-control" name="media_url">
                        <div id="media-preview" class="mt-2"></div>
                    </div>
                    <!-- Upload nhạc -->
                    <div class="form-group">
                        <label>File Nhạc</label>
                        <input type="file" id="music_url" class="form-control" name="music_url">
                        <div id="music-preview" class="mt-2"></div>
                    </div>
                    <!-- Nhập Hotspots -->
                    <div class="form-group">
                        <label>Hotspots</label>
                        <div id="hotspot-container"></div>
                        <button type="button" class="btn btn-primary mt-2" onclick="addHotspot()">+ Thêm
                            Hotspot</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#postModal').on('show.bs.modal', function(event) {
        $('#postForm')[0].reset(); // Reset tất cả input trong form
        $('#postId').val(''); // Xóa giá trị ID (tránh lỗi khi chỉnh sửa)
        $('#image_post').attr('src',
        'http://tabern.vietprojectgroup.com/images/user.png'); // Reset ảnh về mặc định
    });
    $('#postModal').on('hidden.bs.modal', function() {
        $(this).find("form")[0].reset(); // Reset form
        $('#postId').val(""); // Xóa ID bài viết (nếu có)
        $('#image_post').attr('src',
        'http://tabern.vietprojectgroup.com/images/user.png'); // Reset ảnh về mặc định
    });
    $('#postDetailModal').on('hidden.bs.modal', function() {
        // Reset form
        $('#postDetailForm')[0].reset();
        // Xóa ID ẩn
        $('#detailId').val('');
        $('#post_id').val('');
        // Xóa nội dung media preview
        $('#media-preview').html('');
        $('#music-preview').html('');
        // Xóa danh sách hotspots
        $('#hotspot-container').html('');
    });
    // Đảm bảo mã sẽ thực thi sau khi DOM hoàn tất
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        let table = $('#postTable').DataTable({
            ajax: '{{ route("admin.posts.data") }}',
            autoWidth: true, // Cho phép DataTables tự động tính toán độ rộng cột
            columns: [{
                    data: 'id',
                    width: "5%"
                },
                {
                    data: 'title',
                    width: "20%",
                    render: function(data, type, row) {
                        return `<a type="button" onclick="openPostDetail(${row.id})" style="color:blue">${data}</a>`;
                    }
                },
                {
                    data: 'content',
                    width: "30%"
                },
                {
                    data: 'image',
                    width: "10%",
                    render: function(data) {
                        return data ? `<img src="/storage/${data}" width="50">` : '';
                    }
                },
                {
                    data: 'type_post',
                    width: "15%",
                    render: function(data) {
                        return data ? data.name : 'Không có loại';
                    }
                },
                {
                    data: 'user.name',
                    width: "10%"
                },
                {
                    data: 'id',
                    width: "10%",
                    render: function(id) {
                        return `
                        <button onclick="editPost(${id})" class="btn btn-warning" title="Sửa">
                            <i class='fas fa-edit'></i>
                        </button>
                        <button onclick="deletePost(${id})" class="btn btn-danger" title="Xóa">
                            <i class='fas fa-trash'></i>
                        </button>
                    `;
                    }
                }
            ],
            error: function(xhr, error, code) {
                console.log('Error loading data:', error);
            }
        });
        $('#postForm').on('submit', function(e) {
            e.preventDefault();
            let title = $('#title').val();
            let content = $('#content').val();
            let typePost = $('#typePost_id').val();
            let formData = new FormData(this);
            if (!title || !content) {
                alert('Tiêu đề và nội dung không được để trống');
                return;
            }
            let id = $('#postId').val();
            let url = id ? `/admin/posts/${id}` : '/admin/posts';
            let method = 'POST';
            $.ajax({
                url: url,
                method: method,
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#postModal').modal('hide');
                    table.ajax.reload();
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    if (errors.title) {
                        alert(errors.title[0]);
                    }
                    if (errors.content) {
                        alert(errors.content[0]);
                    }
                }
            });
        });
        $('#postDetailForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let detailId = $('#detailId').val();
            detailId = detailId ? parseInt(detailId) : null;
            let mediaFile = document.querySelector('input[name="media_url"]').files[0];
            if (mediaFile && ['mp4', 'mov', 'avi', 'm4v', 'mp3', 'wav'].includes(mediaFile.name.split(
                    '.').pop().toLowerCase())) {
                formData.append('media_url', mediaFile);
            }
            let hotspots = [];
            $('.hotspot-item').each(function() {
                let index = $(this).data('index');
                let label = $(`input[name="hotspots_label_${index}"]`).val().trim();
                let positionX = parseFloat($(`input[name="hotspots_position_x_${index}"]`)
                .val()) || 0;
                let positionY = parseFloat($(`input[name="hotspots_position_y_${index}"]`)
                .val()) || 0;
                let positionZ = parseFloat($(`input[name="hotspots_position_z_${index}"]`)
                .val()) || 0;
                let targetSceneInput = $(`input[name="target_scene_id_${index}"]`)[0];
                let musicHotspotInput = $(`input[name="hotspots_music_${index}"]`)[0];
                let targetSceneFile = targetSceneInput ? targetSceneInput.files[0] : null;
                let musicHotspotFile = musicHotspotInput ? musicHotspotInput.files[0] : null;
                let targetScene = targetSceneFile ?
                    targetSceneFile.name :
                    $(this).attr("data-old-target-scene") || '';
                let musicHotspot = musicHotspotFile ?
                    musicHotspotFile.name :
                    $(this).attr("data-old-music-hotspot") || '';
                hotspots.push({
                    index: index,
                    label: label, // Đảm bảo hỗ trợ tiếng Việt
                    position: {
                        x: positionX,
                        y: positionY,
                        z: positionZ
                    },
                    target_scene_id: targetScene,
                    music_hotspot: musicHotspot
                });
                if (targetSceneFile) {
                    formData.append(`target_scene_file_${index}`, targetSceneFile);
                }
                if (musicHotspotFile) {
                    formData.append(`music_hotspot_file_${index}`, musicHotspotFile);
                }
            });
            let hotspotsJson = JSON.stringify(hotspots, null, 2); // Đảm bảo encoding chuẩn
            console.log("🔥 Hotspots JSON gửi:", hotspotsJson);
            formData.append('hotspots', hotspotsJson);
            let url = detailId ? `/admin/post-details/${detailId}` : '/admin/post-details';
            let method = detailId ? 'POST' : 'POST';
            $.ajax({
                url: url,
                method: method,
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: 'Dữ liệu đã được lưu thành công.',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#postDetailModal').modal('hide');
                        }
                    });
                },
                error: function(xhr) {
                    console.error("Lỗi:", xhr.responseJSON.errors);
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Có lỗi xảy ra khi lưu dữ liệu.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
    // Hàm mở modal chi tiết bài viết
    function openPostDetail(postId) {
        console.log("Gọi API với postId:", postId);
        $('#postDetailModal').modal('show');
        $.ajax({
            url: `/admin/posts/${postId}/details`,
            type: 'GET',
            success: function(response) {
                console.log("Response từ API:", response);
                let postDetail = response.postDetail;
                $('#post_id').val(postId);
                if (!postDetail) {
                    console.log("Không có postDetail, reset form!");
                    $('#detailId').val('');
                    $('#description').val('');
                    $('#media_type').val('webgl');
                    $('#hotspots').val('');
                    $('#media-preview').html('');
                    return; // Dừng lại nếu không có dữ liệu
                }
                console.log("Dữ liệu postDetail:", postDetail);
                $('#detailId').val(postDetail.id);
                $('#description').val(postDetail.description);
                $('#media_type').val(postDetail.media_type);
                $('#hotspot-container').html(''); // Xóa hotspots cũ
                if (postDetail.hotspots) {
                    let hotspots = JSON.parse(postDetail.hotspots); // Chuyển JSON thành mảng
                    hotspots.forEach((hotspot, index) => {
                        addHotspot("#hotspot-container"); // Thêm hotspot mới
                        // Gán dữ liệu cho các input
                        $(`.hotspot-item[data-index="${index}"] input[name="hotspots_label_${index}"]`)
                            .val(hotspot.label);
                        $(`.hotspot-item[data-index="${index}"] input[name="hotspots_position_x_${index}"]`)
                            .val(hotspot.position.x);
                        $(`.hotspot-item[data-index="${index}"] input[name="hotspots_position_y_${index}"]`)
                            .val(hotspot.position.y);
                        $(`.hotspot-item[data-index="${index}"] input[name="hotspots_position_z_${index}"]`)
                            .val(hotspot.position.z);
                        if (hotspot.target_scene_id) {
                            let ext = hotspot.target_scene_id.split('.').pop().toLowerCase();
                            let targetSceneHtml = '';
                            if (['jpeg', 'jpg', 'png', 'gif'].includes(ext)) {
                                targetSceneHtml =
                                    `<img src="/storage/${hotspot.target_scene_id}" width="100%">`;
                            } else if (['mp4', 'mov', 'avi'].includes(ext)) {
                                targetSceneHtml =
                                    `<video width="100%" controls><source src="/storage/${hotspot.target_scene_id}" type="video/mp4"></video>`;
                            }
                            $(`.hotspot-item[data-index="${index}"] #target_scene_id-preview`).html(
                                targetSceneHtml);
                        }
                        if (hotspot.music_hotspot) {
                            let ext = hotspot.music_hotspot.split('.').pop().toLowerCase();
                            let musicHotspotHtml = '';
                            if (['mp3', 'wav'].includes(ext)) {
                                musicHotspotHtml =
                                    `<audio controls><source src="/storage/${hotspot.music_hotspot}" type="audio/mp3"></audio>`;
                            }
                            $(`.hotspot-item[data-index="${index}"] #hotspots_music-preview`).html(
                                musicHotspotHtml);
                        }
                    });
                }
                // Hiển thị media nếu có
                let mediaHtml = '';
                if (postDetail.media_url) {
                    let ext = postDetail.media_url.split('.').pop().toLowerCase();
                    if (['jpeg', 'jpg', 'png', 'gif'].includes(ext)) {
                        mediaHtml = `<img src="/storage/${postDetail.media_url}" width="100%">`;
                    } else if (['mp4', 'mov', 'avi', 'm4v'].includes(ext)) {
                        mediaHtml =
                            `<video width="100%" controls><source src="/storage/${postDetail.media_url}" type="video/mp4"></video>`;
                    } else if (['mp3', 'wav'].includes(ext)) {
                        mediaHtml =
                            `<audio controls><source src="/storage/${postDetail.media_url}" type="audio/mp3"></audio>`;
                    }
                }
                $('#media-preview').html(mediaHtml);
                // Hiển thị media nếu có
                let musicHtml = '';
                if (postDetail.music_url) {
                    let ext = postDetail.music_url.split('.').pop().toLowerCase();
                    if (['jpeg', 'jpg', 'png', 'gif'].includes(ext)) {
                        musicHtml = `<img src="/storage/${postDetail.music_url}" width="100%">`;
                    } else if (['mp4', 'mov', 'avi', 'm4v'].includes(ext)) {
                        musicHtml =
                            `<video width="100%" controls><source src="/storage/${postDetail.music_url}" type="video/mp4"></video>`;
                    } else if (['mp3', 'wav'].includes(ext)) {
                        musicHtml =
                            `<audio controls><source src="/storage/${postDetail.music_url}" type="audio/mp3"></audio>`;
                    }
                }
                $('#music-preview').html(musicHtml);
            },
            error: function(xhr) {
                console.error('Lỗi API:', xhr);
                alert('Không tìm thấy dữ liệu bài viết chi tiết!');
            }
        });
    }

    function deletePostDetail(detailId) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            $.ajax({
                url: `/admin/post-details/${detailId}`,
                method: 'DELETE',
                success: function(response) {
                    alert('Xóa thành công!');
                    table.ajax.reload();
                },
                error: function() {
                    alert('Xóa thất bại!');
                }
            });
        }
    }

    function editPost(id) {
        $.ajax({
            url: `/admin/posts/${id}/edit`,
            method: 'GET',
            success: function(response) {
                $('#postModal').modal('show');
                console.log(response.typePost_id); // Kiểm tra dữ liệu nhận về
                $('#postId').val(response.id);
                $('#title').val(response.title);
                $('#content').val(response.content);
                $('#typePost_id').val(response.typePost_id);
                // Hiển thị ảnh nếu có
                if (response.image) {
                    $('#image_post').attr('src', `/storage/${response.image}`);
                } else {
                    $('#image_post').attr('src', 'http://tabern.vietprojectgroup.com/images/user.png');
                }
                $('#postModal').modal('show');
            },
            error: function(xhr) {
                console.log(xhr.responseText); // In lỗi nếu có
                alert('Có lỗi xảy ra khi lấy dữ liệu bài viết');
            }
        });
    }

    function addHotspot(parent = "#hotspot-container") {
        let index = $('.hotspot-item').length; // Đếm số lượng hotspot để tạo index duy nhất
        let hotspotHtml =
            `<div class="hotspot-item border p-2 mt-2" data-index="${index}">
                <label>Label</label>
                <input type="text" class="form-control" name="hotspots_label_${index}">

                <label>Vị trí (X, Y, Z)</label>
                <input type="number" class="form-control" name="hotspots_position_x_${index}" placeholder="X">
                <input type="number" class="form-control" name="hotspots_position_y_${index}" placeholder="Y">
                <input type="number" class="form-control" name="hotspots_position_z_${index}" placeholder="Z">

                <label>Target Scene</label>
                <input type="file" class="form-control" name="target_scene_id_${index}" data-index="${index}">
                <div id="target_scene_id-preview" class="mt-2"></div>


                <label>Musics Hotspot</label>
                <input type="file" class="form-control" name="hotspots_music_${index}" data-index="${index}">
                <div id="hotspots_music-preview" class="mt-2"></div>

                <button type="button" class="btn btn-danger mt-2" onclick="removeHotspot(this)">Xóa</button>
            </div>`;
        $(parent).append(hotspotHtml);
    }

    function removeHotspot(button) {
        $(button).closest('.hotspot-item').remove();
    }
    // Hàm xóa bài viết
    function deletePost(id) {
        if (confirm("Bạn có chắc muốn xóa bài viết này?")) {
            $.ajax({
                url: `/admin/posts/${id}`,
                method: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    table.ajax.reload();
                    alert('Bài viết đã được xóa');
                },
                error: function() {
                    alert('Có lỗi khi xóa bài viết');
                }
            });
        }
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#image_post').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function() {
        readURL(this);
    });
</script>
@endpush