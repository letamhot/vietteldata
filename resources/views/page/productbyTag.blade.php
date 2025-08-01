@extends('page.layouts.layout')
@section('title', 'Gói cước 4G/5G Viettel dịch vụ đăng ký gói cước Viettel')
@push('post-css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@endpush
@section('content')
<main>
    <!-- slider Area Start-->
    <div class="slider-area">
    </div>
    <!-- slider Area End-->
    <!--? About 1 Start-->
<section class="about-low-area section-padding2" style="padding: 0;">
    <div class="container">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="    background-color: #fff;">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="    color: #fa0202;font-weight: 800;">{{ $tag }}</li>
        </ol>
    </nav>

        <div class="row large-columns-3 medium-columns-3 small-columns-2 row-small">
            @forelse ($products as $product)
            <div class="product-list product-small col has-hover product" style="margin: 5px;text-align: center;">
                <div class="col-inner">
                    <div class="product-small box package-info ">
                        <a href="#">
                            <h3 style="text-align: center;padding: 10px;"">
                                <span>{{ $product->tenGoiCuoc }}</span>
                            </h3>
                        </a>
                        <ul>
                            <li>{{ $product->dungLuong }}</li>
                            <li class="uu-dai">{{ $product->moTa }}</li>
                            <li>{{ $product->giaTien }}</li>
                            <li>
                                <a class="button primary is-outline is-xsmall lowercase"
                                    href="{{ route('product.detail', $product->id) }}"
                                    style="border-radius:99px">
                                        <span>Chi tiết</span>
                                        <i class="icon-angle-right" aria-hidden="true"></i>
                                </a>

                                <a href="javascript:void(0);" class="button primary is-bevel is-small lowercase"
                                    style="border-radius:99px;" onclick="handleSMSClick('{{ $product->cuPhap }}')">
                                    <span>Đăng ký gói</span>
                                    <i class="icon-envelop" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Chưa có sản phẩm thuộc tag này.</p>
            @endforelse
        </div>
    </div>
</section>

    <!-- About  End-->
</main>
<div id="cuPhapModal" style="display:none; position: fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); z-index:9999;">
    <div style="background: white; width: 300px; margin: 100px auto; padding: 20px; border-radius: 8px; position: relative;">
        <p id="cuPhapContent" style="font-size: 18px; font-weight: bold;"></p>
        <button onclick="closeModal()" style="margin-top: 10px;">Đóng</button>
    </div>
</div>
@endsection
@push('scripts_home')
<script>
    function handleSMSClick(cuPhap) {
        const isMobile = /iPhone|iPad|iPod|Android|Windows Phone/i.test(navigator.userAgent);

        if (isMobile) {
            window.location.href = `sms:290?body=${encodeURIComponent(cuPhap)}`;
        } else {
            const modal = document.getElementById('cuPhapModal');
            const content = document.getElementById('cuPhapContent');

            if (modal && content) {
                content.innerText = `Soạn tin: ${cuPhap} gửi 290`;
                modal.style.display = 'block';
            } else {
                alert("Không tìm thấy phần tử modal để hiển thị.");
            }
        }
    }

    function closeModal() {
        const modal = document.getElementById('cuPhapModal');
        if (modal) modal.style.display = 'none';
    }
</script>

@endpush