@section("title")
    Add Student
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Student</h1>
                    <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
                        Back Student
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Student</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Student</h3>
                </div>
                <form role="form" method="post" action="{{url("/student/create")}}">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sid1">sID</label>
                            <input type="text" class="form-control" name="sid" id="sid" value="" placeholder="sID">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" name="name" id="name"  value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="date1">Birthday</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" value="" placeholder="Birthday">
                        </div>
                        <div class="form-group">
                            <label for="cid1">cID</label>
                            <select name="cid" class="form-control">
                                @foreach($classesList as $item)
                                    <option value="{{$item->cid}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

