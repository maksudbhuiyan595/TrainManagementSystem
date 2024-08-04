@extends('backend.layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex justify-content-between border-bottom card-header">
                    <h5 class="card-title">Edit Train Service</h5>
                    <a href="{{ route('train-services.index') }}">
                        <h6 class="mt-3 btn btn-primary">All Train Sevice</h6>
                    </a>
                </div>
                <div class="card-body mt-3">
                    <form class="form-horizontal" action="{{ route('train-services.update',$train_service->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Name<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ $train_service->name }}" name="name" id="name"
                                    placeholder="Name" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('name') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="route" class="col-md-3 form-label">Route<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ $train_service->route }}" name="route" id="route"
                                    placeholder="Route" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('route') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label"> Status</label>
                            <div class="col-md-9 ">
                                <select name="status" id="" class="form-control">
                                    <option value="1" {{ $train_service->status == 1 ? 'selected': '' }}>Active</option>
                                    <option value="0" {{ $train_service->status == 0 ? 'selected': '' }}>Inactive</option>
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
