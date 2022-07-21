@section("title")
    Add Class
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Class</h1>
                    <a href="{{url("/class/list")}}" class="btn btn-outline-info float-right">
                        Back Class
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Class</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Class</h3>
                </div>
                <form role="form" method="post" action="{{url("/class/create")}}">
                    @csrf
                    @method("post")

                    <div class="card-body">
                        <div class="form-group">
                            <label for="cid1">cID</label>
                            <input type="text" class="form-control" name="cid" id="cid" value="" placeholder="cID">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="room1">Room</label>
                            <input type="text" class="form-control" name="room" id="room" value="" placeholder="Room">
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

