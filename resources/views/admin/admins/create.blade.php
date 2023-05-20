@extends('layouts.admin')
@section('title')
إضافة مستخدم
@endsection

@section('contentheader')
إضافة مستخدم@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.accounts.index') }}"> إضافة مستخدم  </a>
@endsection

@section('contentheaderactive')
إضافة مستخدم
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title card_title_center">إضافة مستخدم</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <form action="{{ route('admin.admins_accounts.store')}}" enctype="multipart/form-data" method="post">
                <div class="row">
                    @csrf

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>اللإسم</label>
                            <input name="name" id="name" class="form-control"
                                value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>الصورة</label>
                            
                            <input type="file" name="image" id="image" class="form-control" value="">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>اسم المستخدم </label>
                            <input name="username" id="username" class="form-control"
                            value="{{old('username')}}">
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>البريد الإلكتروني </label>
                            <input name="email" id="email" class="form-control"
                            value="{{old('email')}}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>كلمة السر </label>
                            <input name="password" id="password" type="password" class="form-control"
                            value="{{old('password')}}">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>كلمة السر تأكيد  </label>
                            <input name="password_confirm" type="password" id="password_confirm" class="form-control"
                            value="{{old('password_confirm')}}">
                            @error('password_confirm')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="form-control btn btn-primary" value="إضافة">
                </div>
            </form>



        </div>




    </div>
    </div>






@endsection


@section('script')
    <script src="{{ asset('assets/admin/js/accounts.js') }}"></script>
@endsection
