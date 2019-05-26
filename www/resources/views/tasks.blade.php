@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Форма создания задачи... -->
        <div class="card mb-5">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Новая задача</h4>
            </div>
            <div class="card-body">
                <!-- Отображение ошибок проверки ввода -->
            @include('common.errors')

            <!-- Форма новой задачи -->
                <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Имя задачи -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Задача</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>

                    <!-- Кнопка добавления задачи -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-outline-secondary">
                                <i class="fa fa-plus"></i> Добавить задачу
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <!-- Текущие задачи -->
            @if (count($tasks) > 0)
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Текущие задача</h4>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="">
                        <tr>
                            <th>Задачи</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Имя задачи -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <!-- Кнопка Удалить -->
                                <td>
                                    <form action="{{ url('task/'.$task->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    @endif
@endsection