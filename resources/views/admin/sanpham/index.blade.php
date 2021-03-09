@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Sản phẩm
@endsection

{{-- set title page --}}
@section('title-page')
    Sản phẩm
@endsection

{{-- set title direct --}}
@section('title-direct')
    Sản phẩm
@endsection

{{-- set content --}}
@section('content')
<div class="row">
    <div class="col-md-6 mb-2">
        <a href="{{ route('san-pham.view-add') }}" class="btn btn-default">Thêm sản phẩm</a>
    </div>
    <div class="col-md-12">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Thương hiệu</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($sanPham as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->sp_tensanpham }}</td>
                    <td>{{ $item->loaiSanPham->lsp_tenloai }}</td>
                    <td>{{ $item->thuongHieu->th_ten }}</td>
                    <td>
                        <a href="{{ route('san-pham.detail', ['idProduct'=>$item->sp_id]) }}" title="Chi tiết">
                            <img src="{{ asset('font-end/admin/logo') }}/detail.svg" alt="Detail" height="25" width="25">
                        </a>
                        <a href="#" title="Sửa">
                            <img src="{{ asset('font-end/admin/logo') }}/edit.svg" alt="Edit" height="25" width="25">
                        </a>
                        <a href="#" title="Xóa">
                            <img src="{{ asset('font-end/admin/logo') }}/delete.svg" alt="Delete" height="25" width="25">
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
@endsection
