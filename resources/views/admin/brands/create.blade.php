@extends('admin.layouts.master')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box ">
                    <div class="box-header with-border">
                        <h4 class="box-title">ایجاد برند جدید</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body  col-md-6">
                        <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- text input -->
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" class="form-control" name="name" placeholder="نام برند را وارد کنید ...">
                            </div>

                            <!-- Brands Image -->
                            <div class="form-group">
                                <p>انتخاب عکس</p>
                                <label for="brand-image" class="form-label">تصویر برند</label>
                                <input class="form-control form-control-sm" id="brand-image" type="file" name="image">
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
    <script src="/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Superieur Admin App -->
    <script src="/admin/js/template.js"></script>
@endsection
