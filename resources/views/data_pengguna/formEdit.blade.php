@extends('template_back.content')
@section('title', 'Form Edit Pengguna')
@section('content')
<!-- container opened -->
<div class="container">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Form Edit Pengguna </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Pengguna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('data_pengguna')}}">Data Pengguna</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Pengguna</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- /breadcrumb -->
<div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Form Edit Pengguna
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('_component.message') 
                    <div class="pd-10 pd-sm-20 bg-gray-100">
                        <form action="{{ route('data_pengguna.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Nama <span class="tx-danger"></span></label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="name" value="{{isset($data->name)?$data->name:old('name')}}" required>
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Email <span class="tx-danger"></span></label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="email" value="{{isset($data->email)?$data->email:old('email')}}" required>
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Password <span class="tx-danger"></span></label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" placeholder="" type="text" name="password" value="{{isset($data->password)?$data->password:old('password')}}" required>
                                        </div>
                                    </div>
                                    <div class="row row-xs align-items-center mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Hak Akses</label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                        <select name='namerole' id="f1" class="form-control select2" onchange="reload_table()">
                                <option value="{{ $data->namerole }}">{{ $data->namerole }}</option>
                                <option value="">=== Select New Access ===</option>
                                <option value="administrator">administrator</option>
                                <option value="operator">operator</option>

                            </select>    
                                    </div>
                                 </div>
                                 
                                    <div class="row row-xs align-items-top mg-b-20">
                                        <div class="col-md-3">
                                            <label class="form-label mg-b-0">Foto </label>
                                        </div>
                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                            <input class="form-control" name="img" type="file">
                                            <small><p class="text-muted">* File Extention .png/.jpg/.jpeg  | size image Max 2MB : (1125px x 792px) &nbsp;</p></small>
                                            <img class="img-responsive" width="20%" height="auto" src="@if($data->img) {{asset('')}}images/user/{{$data->img}} @else {{asset('')}}images/no-image.png @endif">
                                        </div> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i id="msg_formEdit"></i>&nbsp;&nbsp;<i class='fa fa-save'></i> Save </button>
                        <a href="{{route('data_pengguna')}}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Back </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
                                                  
@endsection
