@extends('admin.layouts.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Dashboard v1</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

<div class="col-12">

    <form action="{{ route('admin.user.store') }}" method="post" class="w-25">
        @csrf
        <div class="form-group">
        <input type="text" class="form-control" name="surname" placeholder="Фамилия">
            @error('surname')
<div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Имя">
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="patronymic" placeholder="Отчество">
            @error('patronymic')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="itn" placeholder="ИИН">
            @error('itn')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="date" class="form-control" name="date_of_birth" placeholder="Дата рождения">
            @error('date_of_birth')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="url" class="form-control" name="images" placeholder="URL фото">
            @error('images')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="email">
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="пароль">
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
            </div>
             </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection