@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-center">Пользователи</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

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

                                </tr>
                                </thead>
                                <tbody>
                                @if($data = null)
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
                                        <td>{{ $user->work_experience }}</td>
                                        <td>{{ $user->key_skills }}</td>
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
                                @else
                                    @foreach($users_searches as $user_search)
                                        <tr>
                                            <td>{{ $user_search->id }}</td>
                                            <td>{{ $user_search->surname }}</td>
                                            <td>{{ $user_search->name }}</td>
                                            <td>{{ $user_search->patronymic }}</td>
                                            <td>{{ $user_search->data_of_birth }}</td>
                                            <td>{{ $user_search->gender }}</td>
                                            <td>{{ $user_search->knowledge_of_languages }}</td>
                                            <td>{{ $user_search->phone}}</td>
                                            <td>{{ $user_search->email }}</td>
                                            <td>{{ $user_search->work_experience }}</td>
                                            <td>{{ $user_search->key_skills }}</td>
                                            <td>{{ $user_search->about_me }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="form-group ml-5 mt-5" >
                        <form action="{{ route('admin.user.index') }}" method="post">
                            @csrf
                            @method('get')

                            <div class="form-group ">
                                <input type="hidden" class="form-control" name="name"
                                >
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Сбросить фильтр">
                            </div>
                        </form>
                    </div>

                    <h4 class=" mt-3" style="text-align: center "> Фильтр-поиск для пользователей:</h4>
                    <div class="row d-flex flex-row "
                         style="width:1300px; margin-left: 300px;">

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите фамилию пользователя:</label>
                                    <input type="text" class="form-control" name="surname"
                                           placeholder="фамилия пользователя " value="{{request()->input('surname')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                   <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите имя пользователя:</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="имя пользователя " value="{{request()->input('name')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите отчество пользователя:</label>
                                    <input type="text" class="form-control" name="patronymic"
                                           placeholder="отчество пользователя " value="{{request()->input('patronymic')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите дату рождения пользователя:</label>
                                    <input type="text" class="form-control" name="data_of_birth"
                                           placeholder="дата рождения пользователя " value="{{request()->input('data_of_birth')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-3" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите пол пользователя:</label>
                                    <input type="text" class="form-control" name="gender"
                                           placeholder="пол пользователя " value="{{request()->input('gender')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите знание пользователем языков:</label>
                                    <input type="text" class="form-control" name="knowledge_of_languages"
                                           placeholder="знание языков " value="{{request()->input('knowledge_of_languages')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-3" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Введите номер телефона:</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="номер телефона" value="{{request()->input('phone')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group mb-3 ">
                                    <label  class="mb-3" style="margin-left: 75px; margin-top: 10px">Введите email:</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="email" value="{{request()->input('email')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Опыт работы пользователя:</label>
                                    <input type="text" class="form-control" name="work_experience"
                                           placeholder="опыт работы" value="{{request()->input('work_experience')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">Ключевые навыки пользователя:</label>
                                    <input type="text" class="form-control" name="key_skills"
                                           placeholder="ключевые навыки" value="{{request()->input('key_skills')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                        <div style="border: 1px solid darkred; margin: 5px; width: 250px; height: 200px;">
                            <form action="#{{route('admin.user.index')}}" method="post"
                                  class="w-65" enctype="multipart/form-data">
                                @csrf
                                @method('get')
                                <div class="form-group ">
                                    <label style="margin-left: 75px; margin-top: 10px">О себе:</label>
                                    <input type="text" class="form-control" name="about_me"
                                           placeholder="о себе" value="{{request()->input('about_me')}}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary ml-5 mt-5" value="Применить фильтр">
                                </div>
                            </form>
                        </div>

                    </div> {{--row d-flex--}}


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