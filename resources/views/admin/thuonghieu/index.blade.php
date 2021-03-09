@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Thương hiệu
@endsection

{{-- set title page --}}
@section('title-page')
    Thương hiệu
@endsection

{{-- set title direct --}}
@section('title-direct')
    Thương hiệu
@endsection

{{-- set content --}}
@section('content')
    <div class="row">
        <div class="col-md-6 mb-2">
            <a href="#" type="button" data-toggle="modal" data-target="#addTrademark" class="btn btn-default">Thêm thương
                hiệu</a>
        </div>
        <div class="col-md-12">
            <table class="table table-light" style="text-align: center;">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Tên thương hiệu</th>
                        <th>Logo</th>
                        <th>Số danh mục con</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($thuongHieu as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->th_ten }}</td>
                            <td>{{ $item->th_logo }}</td>
                            <td>
                                {{ $item->danhMucThuongHieus->count() }}
                                <a href="#" data-id="{{ $item->th_id }}"
                                    class="addChild"
                                    title="Thêm danh mục con"
                                    class="ml-3"
                                    data-toggle="modal" data-target="#childTrademark"
                                    >
                                    <i class="fas fa-plus-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" data-id="{{ $item->th_id }}" class="detail" title="Chi tiết"
                                    data-toggle="modal" data-target="#detailTrademark">
                                    <img src="{{ asset('font-end/admin/logo') }}/detail.svg" alt="Detail" height="25"
                                        width="25">
                                </a>
                                <a href="#" data-id="{{ $item->th_id }}" class="edit" data-toggle="modal"
                                    data-target="#editTrademark" title="Sửa">
                                    <img src="{{ asset('font-end/admin/logo') }}/edit.svg" alt="Edit" height="25"
                                        width="25">
                                </a>
                                <a href="#" data-id="{{ $item->th_id }}" title="Xóa">
                                    <img src="{{ asset('font-end/admin/logo') }}/delete.svg" alt="Delete" height="25"
                                        width="25">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="addTrademark">
        <div class="modal-dialog modal-lg">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm thương hiệu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="tenThuongHieu">Tên thương hiệu</label>
                            <input id="tenThuongHieu" class="form-control" type="text" name="tenThuongHieu">
                        </div>
                        <div class="form-group">
                            <label for="image">Logo</label>
                            <input id="image" class="form-control-file" type="file" name="hinhAnh">
                        </div>
                        <div id="myImg"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Detail -->
    <div class="modal fade" id="detailTrademark">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="tenThuongHieuTopDetail"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Ngày tạo: <span id="ngayTaoDetail"></span></p>
                    <img src="" alt="Logo" id="logoDetail">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Edit -->
    <div class="modal fade" id="editTrademark">
        <div class="modal-dialog modal-lg">
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Chỉnh sửa thương hiệu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tenThuongHieuEdit">Tên thương hiệu</label>
                            <input id="tenThuongHieuEdit" class="form-control" type="text" name="tenThuongHieu">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input id="logo" class="form-control" type="file" name="logo">
                        </div>
                        <div class="form-group">
                            <label for="">Logo hiện tại</label>
                            <br>
                            <img src="" alt="Logo" id="logoEdit">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Child -->
    <div class="modal fade" id="childTrademark">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('danh-muc-thuong-hieu.add') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm danh mục cho thương hiệu <span id="thuongHieuChild"></span></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="thuongHieu" id="idThuongHieu">
                        <div class="form-group">
                            <label for="tenDanhMuc">Tên danh mục</label>
                            <input id="tenDanhMuc" class="form-control" type="text" name="tenDanhMuc">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    @push('thuong-hieu')
        <script>
            $(document).ready(function() {
                $('.detail, .edit, .addChild').click(function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    var BASE_URL = window.location.host;
                    console.log(BASE_URL);
                    if ($(this).hasClass("detail")) {
                        $.ajax({
                            type: "GET",
                            url: '/quan-tri/thuong-hieu/chi-tiet/' + id,
                            // data: "data",
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                $('#tenThuongHieuTopDetail').html(response.th_ten);
                                $('#ngayTaoDetail').html(response.created_at);
                                // $('#logoDetail').append('<img class="imageShow" style="width:70px; height:70px;" src='+ url + response.hinhAnh[i].hahd_duongdan + '>');

                                var url_image = BASE_URL + '/thuong-hieu/' + response.th_logo;
                                $("#logoDetail").attr("src", url_image);
                            }
                        });
                    }
                    if ($(this).hasClass("edit")) {
                        $.ajax({
                            type: "GET",
                            url: '/quan-tri/thuong-hieu/chi-tiet/' + id,
                            // data: "data",
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                $('#tenThuongHieuEdit').val(response.th_ten);
                                $('#ngayTaoEdit').val(response.created_at);
                                var url_image = BASE_URL + '/thuong-hieu/' + response.th_logo;
                                $("#logoDetail").attr("src", url_image);
                            }
                        });
                    }
                    if ($(this).hasClass("addChild")) {
                        $.ajax({
                            type: "GET",
                            url: '/quan-tri/thuong-hieu/chi-tiet/' + id,
                            // data: "data",
                            dataType: "json",
                            success: function(response) {
                                console.log(response);
                                $('#thuongHieuChild').html(response.th_ten);
                                $('#idThuongHieu').val(response.th_id);
                            }
                        });
                    }
                });
            });

        </script>
    @endpush
@endsection
