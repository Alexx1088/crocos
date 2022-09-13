@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
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

                        <form action="{{ route( 'admin.user.update', $user->id) }}" method="post" class="w-25">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" class="form-control" name="surname"
                                       value="{{ $user->surname }}">
                                @error('surname')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="name"
                                       value="{{ $user->name }}">
                                @error('name')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="patronymic"
                                       value="{{ $user->patronymic }}">
                                @error('patronymic')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="status"
                                       value="{{ $user->status }}">
                                @error('status')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="itn"
                                       value="{{ $user->itn }}">
                                @error('itn')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control" name="date_of_birth"
                                       value="{{ $user->date_of_birth}}">
                                @error('date_of_birth')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="url" class="form-control" name="images"
                                       value="{{ $user->images }}">
                                @error('images')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email"
                                       value="{{ $user->email}}">
                                @error('email')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
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