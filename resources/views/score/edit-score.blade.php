@section("title")
    Edit Score
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Score</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Score</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Score</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="csid1">csID</label>
                            <input type="text" class="form-control" id="csid1" placeholder="csID">
                        </div>
                        <div class="form-group">
                            <label for="mark1">Mark</label>
                            <input type="number" class="form-control" id="mark1" placeholder="Mark">
                        </div>
                        <div class="form-group">
                            <label for="result1">Result</label>
                            <input type="text" class="form-control" id="result1" placeholder="Result">
                        </div>
                        <div class="form-group">
                            <label for="sid1">sID</label>
                            <input type="text" class="form-control" id="sid1" placeholder="sID">
                        </div>
                        <div class="form-group">
                            <label for="sbid1">sbID</label>
                            <input type="text" class="form-control" id="sbid1" placeholder="sbID">
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

