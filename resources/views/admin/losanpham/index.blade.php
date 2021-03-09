@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Lô sản phẩm
@endsection

{{-- set title page --}}
@section('title-page')
    Lô sản phẩm
@endsection

{{-- set title direct --}}
@section('title-direct')
    Lô sản phẩm
@endsection

{{-- set content --}}
@section('content')
<div class="row">
    <div class="col-md-6 mb-2">
        <a href="{{ route('lo-san-pham.view-add') }}" class="btn btn-default">Nhập sản phẩm</a>
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
                {{-- @foreach ($sanPham as $item) --}}
                <tr>

                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
@endsection
