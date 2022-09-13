@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div><!-- /.col -->
                 {{--   <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Dashboard v1</a></li>
                        </ol>
                    </div><!-- /.col -->--}}
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
               {{-- <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>--}}
                <div class="row">
                <div>
                    <div class="card col-12">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 400px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество</th>
                                    <th>Дата рождения</th>
                                    <th>Пол</th>
                                    <th>Знание языков</th>
                                    <th>Номер телефона</th>
                                    <th>Email</th>
                                    <th>опыт работы</th>
                                    <th>ключевые навыки</th>
                                    <th>О себе</th>
                                   {{-- <th></th>
                                    <th colspan="2" class="text-center table-warning">Действие</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->patronymic }}</td>
                                        <td>{{ $user->data_of_birth }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->knowledge_of_languages }}</td>
                                        <td>{{ $user->phone}}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->key_skills }}</td>
                                        <td>{{ $user->work_experience }}</td>
                                        <td>{{ $user->about_me }}</td>
                                        <td><a href="{{ route('admin.user.show', $user->id) }}"><i
                                                        class="far fa-eye"></i></a></td>
                                        <td><a href="{{ route('admin.user.edit', $user->id) }}"
                                               class="text-success"><i class="fas fa-pencil-alt"></i></a></td>

                                        <td>
                                            <form action="{{route('admin.user.delete', $user->id)}}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                  {{--  <div class="col-4"></div>
                    <div class="col-sm-12">
                        <h3 class="mt-3">Удаленные пользователи</h3>
                    </div>

                    <div class="row"
                    <div>
                        <div class="card col-12 mt-3">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Отчество</th>
                                        <th>Статус</th>
                                        <th>ИИН</th>
                                        <th>Дата рождения</th>
                                        <th>URL Фото</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deleted_users as $deleted_user)
                                        <tr>
                                            <td>{{ $deleted_user->id }}</td>
                                            <td>{{ $deleted_user->surname }}</td>
                                            <td>{{ $deleted_user->name }}</td>
                                            <td>{{ $deleted_user->patronymic }}</td>
                                            <td>{{ $deleted_user->status }}</td>
                                            <td>{{ $deleted_user->itn }}</td>
                                            <td>{{ $deleted_user->data_of_birth }}</td>
                                            <td>{{ $deleted_user->images }}</td>
                                            <td>{{ $deleted_user->email }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>--}}
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

@endsection