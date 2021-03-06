@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Sản phẩm
@endsection

{{-- set title page --}}
@section('title-page')
    Thêm sản phẩm
@endsection

{{-- set title direct --}}
@section('title-direct')
    Thêm sản phẩm
@endsection

{{-- set content --}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('san-pham.insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tenSanPham">Tên sản phẩm</label>
                                <input id="tenSanPham" class="form-control" type="text" name="tenSanPham"
                                    placeholder="Nhập tên sản phẩm . . .">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loaiSanPham">Loại sản phẩm</label>
                                <select id="loaiSanPham" class="form-control" name="loaiSanPham">
                                    @foreach ($loaiSanPham as $item)
                                        <option value="{{ $item->lsp_id }}">{{ $item->lsp_tenloai }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="thuongHieu">Loại sản phẩm</label>
                                <select id="thuongHieu" class="form-control" name="thuongHieu">
                                    @foreach ($thuongHieu as $item)
                                        <option value="{{ $item->th_id }}">{{ $item->th_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Chọn hình ảnh</label>
                                <input id="image" class="form-control-file" multiple type="file" name="hinhAnh[]">
                            </div>
                            <div id="myImg" class="mb-2"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="moTa"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mb-5">
                        <button class="btn btn-primary" type="submit">Thêm</button>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    @push('san-pham.index')
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
