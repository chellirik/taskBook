@extends('layouts.admin')

@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Поставленные задачи</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>email</th>
                            <th>Описание задачи</th>
                            <th>Выполнено</th>
                            <th>Редактировать</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{$item->name}}</th>
                                <th>{{$item->email}}</th>
                                <th>{{$item->message}}</th>
                                <th>
                                @if ($item->done)
                                <i class="fas fa-circle"></i>
                                @endif
                                </th>
                                <th><a href="{{ route('admin-task-edit', $item->id)}}" class="nav-link"><i class="fas fa-pen-alt"></i></a></th>
                            </tr>   
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Имя</th>
                                <th>email</th>
                                <th>Описание задачи</th>
                                <th>Выполнено</th>
                                <th>Редактировать</th>
                            </tr>
                        </tfoot>
                      </table>
                      <div class="col-8 mt-3">
                        {{ $data->appends($_GET)->links()}}
                    </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
@endsection