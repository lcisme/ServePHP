@section("title")
    Edit Class
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Class</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Class</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Class</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cid1">cID</label>
                            <input type="text" class="form-control" id="cid1" placeholder="cID">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="room1">Room</label>
                            <input type="text" class="form-control" id="room1" placeholder="Room">
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

