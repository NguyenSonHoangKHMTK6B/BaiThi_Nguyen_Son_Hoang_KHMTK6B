@extends('layout.master')
@section('Content')
    @if(session('Note'))
    <div class="alert alert-success">
        {{session('Note')}}
    </div>
    @endif
    <form action="insertDoctor" method="post" enctype="multipart/form-data">
        <div>
            <div class="mb-3">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CID</label>
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="cname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Specialized</label>
                <input
                    type="text"
                    class="form-control"
                    name="specialized"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input
                    type="text"
                    class="form-control"
                    name="address"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input
                    type="text"
                    class="form-control"
                    name="phone"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
              

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            
        
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info" name="btInsert">Insert</button>
        </div>
    </form>
@endsection
