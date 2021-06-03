@extends('admin.layouts.master')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between">
                        <div>
                            <h3 class="box-title">لیست دسته بندی ها :</h3>
                        </div>
                        <div>
                            <a href="/adminpanel/categories/create" class="btn btn-success">ساخت یه دسته بندی جدید</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>دسته بندی والد</th>
                                        <th>عنوان</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>

                                        <td>{{ $category->id }}</td>
                                        <td>
                                            {{ $category->parent ? $category->parent->title : '-' }}
                                        </td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <a href="/adminpanel/categories/{{ $category->id }}/edit" class="btn btn-warning btn-sm">ویرایش</a>
                                        </td>
                                        <td>
                                            <form action="/adminpanel/categories/{{ $category->id }}" method="post" id="{{ $category->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn btn-danger btn-sm" onclick="document.getElementById('{{ $category->id }}').submit();">حذف</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>دسته بندی والد</th>
                                    <th>عنوان</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection

@section('scripts')
    <!-- FastClick -->
    <script src="/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Superieur Admin App -->
    <script src="/admin/js/template.js"></script>

    <!-- Superieur Admin for demo purposes -->
    <script src="/admin/js/demo.js"></script>

    <!-- This is data table -->
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Superieur Admin for Data Table -->
    <script src="/admin/js/pages/data-table.js"></script>
@endsection
