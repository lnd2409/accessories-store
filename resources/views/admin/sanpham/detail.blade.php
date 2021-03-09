@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Sản phẩm
@endsection

{{-- set title page --}}
@section('title-page')
    Chi tiết sản phẩm
@endsection

{{-- set title direct --}}
@section('title-direct')
    Chi tiết sản phẩm
@endsection

{{-- set content --}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        @if (count($hinhAnh) > 0)
                            <div class="col-12 col-sm-6">
                                {{-- <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> --}}
                                <div class="col-12">
                                    <img src="{{ asset('') }}{{ $hinhAnh[0]->ha_duongdan }}" style="height: 575px; width: 575px;" class="product-image" alt="Product Image">
                                </div>
                                <div class="col-12 product-image-thumbs">
                                    @foreach ($hinhAnh as $item)
                                        <div class="product-image-thumb active"><img
                                                src="{{ asset('') }}{{ $item->ha_duongdan }}"
                                                alt="{{ $sanPham->sp_tensanpham }}"></div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">{{ $sanPham->sp_tensanpham }}</h3>
                                <div class="col-12">
                                    <img src="https://via.placeholder.com/350" class="product-image" alt="Product Image">
                                </div>
                                <div class="col-12">
                                    <a href="#" type="button" data-toggle="modal" data-target="#addImage">Thêm hình ảnh</a>
                                </div>
                            </div>
                        @endif

                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">{{ $sanPham->sp_tensanpham }}</h3>
                            <p>
                                {!! $sanPham->sp_mota !!}
                            </p>

                            <hr>
                            <h4>Thương hiệu</h4>
                            <div class="btn-group btn-group-toggle">
                                - {{ $sanPham->thuongHieu->th_ten }}
                            </div>

                            <h4 class="mt-3">Size <small>Số lượng</small></h4>
                            <div class="btn-group btn-group-toggle">
                                - {{ $sanPham->sp_soluong }}
                            </div>

                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    1.000.000 VNĐ
                                </h2>
                            </div>

                            <div class="mt-4">
                                <div class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Nhập hàng
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="addImage">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('san-pham.insert-image', ['idProduct' => $sanPham->sp_id]) }}" method="post"
                enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hình ảnh sản phẩm</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="image">Chọn hình ảnh</label>
                            <input id="image" class="form-control-file" multiple type="file" name="hinhAnh[]">
                        </div>
                        <div id="myImg"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    @push('san-pham.detail')
        <script>
            $(function() {
                $(":file").change(function() {
                    if (this.files && this.files[0]) {
                        for (var i = 0; i < this.files.length; i++) {
                            var reader = new FileReader();
                            reader.onload = imageIsLoaded;
                            reader.readAsDataURL(this.files[i]);
                        }
                    }
                });
            });

            function imageIsLoaded(e) {
                $('#myImg').append('<img style="width:120px; height:120px;" src=' + e.target.result + '>');
            };

        </script>
    @endpush
@endsection
