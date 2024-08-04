@extends('backend.layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex justify-content-between border-bottom card-header">
                    <h5 class="card-title">Add Station</h5>
                    <a href="{{ route('stations.index') }}">
                        <h6 class="mt-3 btn btn-primary">All Stations</h6>
                    </a>
                </div>
                <div class="card-body mt-3">
                    <form class="form-horizontal" action="{{ route('stations.store') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Name<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ old('name') }}" name="name" id="name"
                                    placeholder="Name" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('name') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="location" class="col-md-3 form-label">Location<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ old('location') }}" name="location" id="location"
                                    placeholder="location" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('location') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label"> Status</label>
                            <div class="col-md-9 ">
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                         <button class="btn btn-primary float-end" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>


</script>

@endpush
