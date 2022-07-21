@section("title")
    Edit Student
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Student</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Student</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sid1">sID</label>
                            <input type="text" class="form-control" id="sid1" placeholder="sID">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="date1">Birthday</label>
                            <input type="date" class="form-control" id="date1" placeholder="Birthday">
                        </div>
                        <div class="form-group">
                            <label for="cid1">cID</label>
                            <input type="text" class="form-control" id="cid1" placeholder="cID">
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

