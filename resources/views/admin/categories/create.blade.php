@extends('admin.layouts.master')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box ">
                    <div class="box-header with-border">
                        <h4 class="box-title">ایجاد دسته جدید</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body  col-md-6">
                        <form action="/adminpanel/categories/store" method="post">
                            @csrf
                            <!-- text input -->
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" class="form-control" name="title" placeholder="عنوان دسته را وارد کنید ...">
                            </div>

                            <!-- select -->
                            <div class="form-group">
                                <label>انتخاب دسته والد</label>
                                <select class="form-control" name="category_id">
                                    <option value="">ندارد</option>

                                @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success-outline btn-sm w-25">ثبت</button>
                            </div>
                        </form>
                        @include('admin.layouts.errors')
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
{{--    <script src="/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>--}}

    <!-- Superieur Admin App -->
{{--    <script src="/admin/js/template.js"></script>--}}

    <!-- Superieur Admin for demo purposes -->
{{--    <script src="/admin/js/demo.js"></script>--}}

{{--    <!-- This is data table -->--}}
{{--    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>--}}

{{--    <!-- Superieur Admin for Data Table -->--}}
{{--    <script src="/admin/js/pages/data-table.js"></script>--}}
@endsection
