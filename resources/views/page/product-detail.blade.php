@extends('page.layouts.layout')
@section('title', $product->tenGoiCuoc)
@push('post-css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Thêm các style mới */
    .package-info {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        padding: 25px;
        margin-bottom: 30px;
    }

    .package-info h3 {
        color: #e30613;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .package-info ul {
        padding-left: 20px;
    }

    .package-info ul li {
        margin-bottom: 10px;
        position: relative;
        list-style-type: none;
        padding-left: 25px;
    }

    .package-info ul li:before {
        content: "✓";
        color: #00a859;
        position: absolute;
        left: 0;
    }

    .register-guide {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 25px;
    }

    .register-guide h3 {
        color: #e30613;
        font-size: 20px;
        margin-bottom: 15px;
    }

    .product-title {
        color: #e30613;
        font-weight: 700;
    }

    .is-divider.small {
        height: 3px;
        background: #e30613;
        width: 100px;
        margin: 15px 0 25px;
    }

    .button.primary {
        background: #e30613;
        border-color: #e30613;
    }

    .button.primary:hover {
        background: #c00511;
        border-color: #c00511;
    }

    .product-section {
        margin-bottom: 40px;
    }

    .product-section h5 {
        color: #e30613;
        font-weight: 700;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th {
        background: #e30613;
        color: white;
        padding: 10px;
        text-align: center;
    }

    table td {
        padding: 15px;
        border: 1px solid #ddd;
        vertical-align: top;
    }

    table tr:nth-child(even) {
        background: #f9f9f9;
    }

    .related-products-wrapper {
        margin-top: 50px;
    }

    .product-section-title {
        font-size: 24px;
        font-weight: 700;
        color: #e30613;
        border-bottom: 2px solid #e30613;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="">{{ $product->tag->chiTietLoaiGoiCuoc }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->tenGoiCuoc }}</li>
        </ol>
    </nav>

    <!-- Product Title -->
    <h1 class="product-title mb-3">{{ $product->tenGoiCuoc }}</h1>
    <div class="is-divider small"></div>

    <div class="row mt-4">
        <!-- Product Info -->
        <div class="col-md-4" style="
    -webkit-box-shadow: 0px 0px 5px 0px #aaa;
    -moz-box-shadow: 0px 0px 5px 0px #aaa;
    box-shadow: 0px 0px 5px 0px #aaa;
    padding: 10px;
    border-radius: 8px;
">
            <div class="package-info">
                <h3>{{ $product->tenGoiCuoc }}</h3>
                <ul>
                    <li><strong>Dung lượng:</strong> {{ $product->dungLuong }}</li>
                    <li><strong>Ưu đãi:</strong> {{ $product->moTa }}</li>
                    <li><strong>Giá tiền:</strong> {{ $product->giaTien }}</li>
                    <li class="mt-3">
                        <a href="javascript:void(0);" class="button primary is-bevel is-small lowercase"
                            style="border-radius:99px;" onclick="handleSMSClick('{{ $product->cuPhap }}')">
                            <span>Đăng ký gói</span>
                            <i class="icon-envelop" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Registration Guide -->
        <div class="col-md-7" style="
    -webkit-box-shadow: 0px 0px 5px 0px #aaa;
    -moz-box-shadow: 0px 0px 5px 0px #aaa;
    box-shadow: 0px 0px 5px 0px #aaa;
    padding: 10px;
    border-radius: 8px;margin-left: 10px;
">
            <div class="register-guide">
                <h3>Hướng dẫn đăng ký gói {{ $product->tenGoiCuoc }}</h3>
                <p>Soạn tin theo cú pháp: <strong class="text-success">{{ $product->cuPhap }}</strong> gửi <strong
                        class="text-success">290</strong></p>
                <p>Hoặc nhấn <a href="javascript:void(0);" class="button primary is-bevel is-small lowercase"
                        style="border-radius:99px;" onclick="handleSMSClick('{{ $product->cuPhap }}')">
                        <span>Đăng ký gói</span>
                        <i class="icon-envelop" aria-hidden="true"></i>
                    </a> đã được tích hợp sẵn cú pháp</p>

                <h5 class="mt-4">Hướng dẫn hủy gói cước {{ $product->tenGoiCuoc }}</h5>
                <p>Hủy gia hạn (Khuyến mại còn lại được bảo lưu hết chu kỳ) soạn: HUY gửi 191, đợi tin nhắn tổng đài gửi
                    về và soạn Y gửi 191 để xác nhận.</p>
            </div>

        </div>
    </div>

    <!-- Product Description -->
    <div class="product-section mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="panel entry-content">
                    @if(auth()->check())
                    <div class="comment-rating-box mb" style="border: 1px solid cornflowerblue; border-radius: 5px;">
                        <div class="col-inner p" style="padding:10px">
                            <h2 class="uppercase">Bình luận</h2>
                            <div id="comment-section" class="mb"></div>

                            <form id="comment-form" class="d-flex align-items-start gap-2" style="margin-top: 10px;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <textarea name="content" class="form-control"
                                    style="min-height: 80px; resize: vertical; flex-grow: 1;"
                                    placeholder="Viết bình luận của bạn..." required></textarea>

                                <button type="submit" class="btn btn-primary">
                                    Bình luận
                                </button>
                            </form>

                            <h2 class="uppercase" style="display: none">Đánh giá:
                                <span id="avg-rating"
                                    class="rating-number">{{ number_format($product->averageRating(), 1) }}</span> / 5
                            </h2>

                            <form id="rating-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="star-rating-data">
                                    @for($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}">
                                    <label for="star{{ $i }}" class="star">&#9733;</label>
                                    @endfor
                                </div>
                            </form>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            let productId = $('input[name="product_id"]').val();
                            // Load comments
                            function loadComments() {
                                $.get(`/comments/${productId}`, function(data) {
                                    $('#comment-section').html('');
                                    if (data.length === 0) {
                                        $('#comment-section').html(
                                            '<p class="text-center">Chưa có bình luận nào. Hãy là người đầu tiên!</p>'
                                        );
                                        return;
                                    }
                                    data.forEach(comment => {
                                        $('#comment-section').append(renderComment(comment));
                                    });
                                }).fail(function() {
                                    $('#comment-section').html(
                                        '<p class="text-center error">Lỗi khi tải bình luận</p>');
                                });
                            }

                            function renderComment(comment) {
                                let repliesHtml = '';
                                if (comment.replies && comment.replies.length > 0) {
                                    comment.replies.forEach(reply => {
                                        repliesHtml += renderComment(reply);
                                    });
                                }
                                let userAvatar = comment.user.avatar ?
                                    `<img src="${comment.user.avatar}" class="avatar" alt="${comment.user.name}">` :
                                    `<div class="avatar-placeholder">${comment.user.name.charAt(0)}</div>`;
                                return `
                                <div class="comment-box  align-top gap-medium mb" data-comment-id="${comment.id}">
                                    <div class="comment-avatar">${userAvatar}</div>
                                    <div class="flex-grow">
                                        <div class="comment-header  align-center justify-between mb-small">
                                            <strong>${comment.user.name}</strong>
                                            <small class="text-muted">${formatDate(comment.created_at)}</small>
                                        </div>
                                        <div class="comment-content mb-small">${comment.content}</div>
                                        <button class="button small reply-btn" style="background-color: #446084;" data-id="${comment.id}">Trả lời</button>
                                        
                                        <form class="reply-form mt-small" id="reply-form-${comment.id}" style="display: none;">
                                            <textarea class="reply-content mb-small" placeholder="Viết trả lời..." required></textarea>
                                            <div class=" gap-small">
                                                <button type="button" class="button small send-reply" style="background-color: #0073fb;" data-id="${comment.id}">Gửi</button>
                                                <button type="button" class="button small secondary cancel-reply" data-id="${comment.id}">Hủy</button>
                                            </div>
                                        </form>
                                        
                                        <div class="replies mt-medium pl-large" style="border-left: 2px solid #eee;">
                                            ${repliesHtml}
                                        </div>
                                    </div>
                                </div>
                            `;
                            }

                            function formatDate(dateString) {
                                const date = new Date(dateString);
                                return date.toLocaleDateString() + ' ' + date.toLocaleTimeString([], {
                                    hour: '2-digit',
                                    minute: '2-digit'
                                });
                            }
                            // Submit comment
                            $('#comment-form').submit(function(e) {
                                e.preventDefault();
                                let form = $(this);
                                let button = form.find('button[type="submit"]');
                                let originalText = button.html();
                                button.prop('disabled', true).html('<span>Đang gửi...</span>');
                                $.post('/comments', form.serialize(), function(response) {
                                    loadComments();
                                    form.find('textarea').val('');
                                }).always(function() {
                                    button.prop('disabled', false).html(originalText);
                                });
                            });
                            // Show/hide reply form
                            $(document).on('click', '.reply-btn', function() {
                                let id = $(this).data('id');
                                $(`.reply-form`).hide();
                                $(`#reply-form-${id}`).show();
                                $(`#reply-form-${id} .reply-content`).focus();
                            });
                            $(document).on('click', '.cancel-reply', function() {
                                let id = $(this).data('id');
                                $(`#reply-form-${id}`).hide().find('.reply-content').val('');
                            });
                            // Submit reply
                            $(document).on('click', '.send-reply', function() {
                                let parentId = $(this).data('id');
                                let content = $(`#reply-form-${parentId} .reply-content`).val().trim();
                                let button = $(this);
                                let originalText = button.html();
                                if (!content) {
                                    alert('Nội dung trả lời không được để trống!');
                                    return;
                                }
                                button.prop('disabled', true).html('Đang gửi...');
                                $.post('/comments', {
                                    _token: $('input[name="_token"]').val(),
                                    product_id: productId, // ✅ đúng
                                    content: content,
                                    parent_id: parentId
                                }, function(response) {
                                    if (response.success) {
                                        loadComments();
                                    } else {
                                        alert(response.message ||
                                            'Có lỗi xảy ra khi gửi bình luận!');
                                    }
                                }).fail(function() {
                                    alert('Lỗi kết nối, vui lòng thử lại!');
                                }).always(function() {
                                    button.prop('disabled', false).html(originalText);
                                });
                            });
                            // Handle star rating
                            $('#rating-form input[type="radio"]').change(function() {
                                let rating = $(this).val();
                                $.post('/ratings', {
                                    _token: $('input[name="_token"]').val(),
                                    product_id: productId, // ✅ đúng
                                    rating: rating
                                }, function(response) {
                                    alert('Bạn đã đánh giá thành công!');
                                    // 🔽 Thêm dòng này để lưu vào localStorage
                                    localStorage.setItem(`rating-${productId}`, rating);
                                    location.reload();
                                });
                            });
                            // Highlight saved rating
                            let savedRating = localStorage.getItem(`rating-${productId}`);
                            if (savedRating) {
                                $(`#star${savedRating}`).prop('checked', true);
                            }
                            // Initial load
                            loadComments();
                        });
                    </script>

                    <style>
                        .comment-rating-box {
                            background: #f9f9f9 !important;
                        }

                        .comment-box {
                            padding: 15px !important;
                            background: white !important;
                            border-radius: 5px !important;
                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important;
                        }

                        .comment-avatar {
                            width: 40px !important;
                            height: 40px !important;
                            border-radius: 50% !important;
                            overflow: hidden !important;
                            background: #eee !important;
                            display: flex !important;
                            align-items: center !important;
                            justify-content: center !important;
                            font-weight: bold !important;
                        }

                        .avatar-placeholder {
                            width: 100% !important;
                            height: 100% !important;
                            display: flex !important;
                            align-items: center !important;
                            justify-content: center !important;
                            background: #ddd !important;
                            color: #777 !important;
                        }

                        .star-rating-data {
                            direction: rtl !important;
                            unicode-bidi: bidi-override !important;
                        }

                        .star-rating-data input {
                            display: none !important;
                        }

                        .star-rating-data label {
                            color: #ccc !important;
                            font-size: 24px !important;
                            cursor: pointer !important;
                            transition: color 0.2s !important;
                        }

                        .star-rating-data input:checked~label,
                        .star-rating-data label:hover,
                        .star-rating-data label:hover~label {
                            color: #ffc107 !important;
                        }

                        .star-rating-data input:checked+label {
                            color: #ffc107 !important;
                        }

                        .rating-number {
                            color: #ffc107 !important;
                            font-weight: bold !important;
                        }

                        .text-muted {
                            color: #999 !important;
                        }
                    </style>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="product-section mt-5">
        <div class="row">
        </div>
    </div>
</div>

<!-- Related Products -->
<div class="container related-products-wrapper mt-5">
    <h3 class="product-section-title">Sản phẩm tương tự</h3>
    <div class="row">
        @foreach($related as $related)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $related->tenGoiCuoc }}</h5>
                    <p class="card-text text-danger">{{ $related->giaTien }}</p>
                    <ul class="text-start">
                        <li>{{ Str::limit($related->moTa, 100) }}</li>
                    </ul>
                    <a class="button primary is-outline is-xsmall lowercase"
                        href="{{ route('product.detail', $related->id) }}"
                        style="border-radius:99px; margin-bottom:10px">
                        <span>Chi tiết</span>
                        <i class="icon-angle-right" aria-hidden="true"></i>
                    </a>
                    <a href="javascript:void(0);" class="button primary is-bevel is-small lowercase"
                        style="border-radius:99px;" onclick="handleSMSClick('{{ $related->cuPhap }}')">
                        <span>Đăng ký gói</span>
                        <i class="icon-envelop" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

<!-- Modal for Desktop SMS -->
<div class="modal fade" id="cuPhapModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hướng dẫn đăng ký</h5>
                <button type="button" class="btn-close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body">
                <p id="cuPhapContent"></p>
                <p>Vui lòng mở ứng dụng tin nhắn trên điện thoại và soạn theo hướng dẫn trên.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts_productDetail')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script>
    let smsModal = null;

    function handleSMSClick(cuPhap) {
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        if (isMobile) {
            window.location.href = `sms:290?body=${encodeURIComponent(cuPhap)}`;
        } else {
            document.getElementById('cuPhapContent').textContent = `Soạn tin: ${cuPhap} gửi 290`;
            if (!smsModal) {
                smsModal = new bootstrap.Modal(document.getElementById('cuPhapModal'));
            }
            smsModal.show();
        }
    }

    function closeModal() {
        if (smsModal) {
            smsModal.hide();
        }
    }
</script>
@endpush