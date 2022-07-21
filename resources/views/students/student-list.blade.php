@section("title")
    Students List
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students List</h1>
                    <a href="{{url("/student/create")}}" class="btn btn-outline-info float-right">
                        Create Student
                    </a>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Students List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
{{--                            <h3 class="card-title">Students List</h3>--}}
                            <form method="get" action="{{url("/student/list")}}">
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <select name="classID" class="form-control float-right">
                                        <option value="">Select Class...</option>
                                        @foreach($classesList as $item)
                                            <option @if(app("request")->input("classID")==$item->cid)  selected @endif value="{{$item->cid}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="date" value="{{app("request")->input("date1")}}" name="date1" class="form-control float-right">
                                    <input type="date" value="{{app("request")->input("date2")}}"  name="date2" class="form-control float-right">
                                    <input type="text" value="{{app("request")->input("name")}}" name="name" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>sID</th>
                                    <th>Name</th>
                                    <th>Birthday</th>
                                    <th>Class Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{$item->sid}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->birthday}}</td>
                                        <td>{{$item->classes->name}}</td>
                                        <td><a href="http://127.0.0.1:8000/student/edit" style="color: #0b2e13">Edit</a></td>
                                        <td><a href="http://127.0.0.1:8000/student/delete" style="color: #0b2e13">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $students->appends(app("request")->input())->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

