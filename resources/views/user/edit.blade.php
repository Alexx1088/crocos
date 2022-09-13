@extends('user.layouts.main')

@section('content')
{{--@dd($user)--}}
    <div class="content-wrapper" style="margin-left: 0; padding: 50px 30px">
        <!-- Content Header (Page header) -->
       <form action="{{ route('home_page') }}">
           <input type="submit" class="btn btn-primary" value="вернутся на стартовую страницу">
       </form>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование данных пользователя</h1>
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

                        <form action="{{ route( 'user.update', $user->id) }}" method="post" style="width: 30%">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" name="surname"
                                       value="{{ $user->surname }}">
                                @error('surname')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{ $user->name }}">
                                @error('name')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Отчество</label>
                                <input type="text" class="form-control" name="patronymic"
                                       value="{{ $user->patronymic }}">
                                @error('patronymic')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Иин</label>
                                <input type="text" class="form-control" name="itn"
                                       value="{{ $user->itn }}">
                                @error('itn')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>дата рождения</label>
                                <input type="date" class="form-control" name="date_of_birth"
                                       value="{{ $user->date_of_birth}}">
                                @error('date_of_birth')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Url картинки</label>
                                <input type="url" class="form-control" name="images"
                                       value="{{ $user->images }}">
                                @error('images')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>email</label>
                                <input type="text" class="form-control" name="email"
                                       value="{{ $user->email}}">
                                @error('email')
                                <div class="text-danger"> {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>пароль</label>
                                <input type="password" class="form-control" name="password"
                                       value="{{ $user->password}}">
                                @error('password')
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