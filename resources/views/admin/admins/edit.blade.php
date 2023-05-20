@extends('layouts.admin')
@section('title')
    تعديل حساب مالي
@endsection

@section('contentheader')
تعديل حساب مالي
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.accounts.index') }}"> حسبات المديرين  </a>
@endsection

@section('contentheaderactive')
    تعديل
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title card_title_center"> تعديل الحساب </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <form action="{{ route('admin.admins_accounts.update', $user->id) }}" enctype="multipart/form-data" method="post">
                <div class="row">
                    @csrf

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>اللإسم</label>
                            <input name="name" id="name" class="form-control"
                                value="{{$user->name}}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>الصورة</label>
                            
                            <input type="file" name="image" id="image" class="form-control" value="{{$user->name}}">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label>username </label>
                            <input name="username" id="username" class="form-control"
                            value="{{ $user->username }}">
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>email </label>
                            <input name="email" id="email" class="form-control"
                            value="{{ $user->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                   


                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button id="do_add_item_cardd" type="submit" class="btn btn-primary btn-sm"> تعديل</button>
                            <a href="{{ route('admin.accounts.index') }}" class="btn btn-sm btn-danger">الغاء</a>
                        </div>
                    </div>

                </div>
            </form>



        </div>




    </div>
    </div>






@endsection


@section('script')
    <script src="{{ asset('assets/admin/js/accounts.js') }}"></script>
@endsection
