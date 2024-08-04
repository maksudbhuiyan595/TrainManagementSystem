@extends('backend.layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex justify-content-between border-bottom card-header">
                    <h5 class="card-title">Add Ticket</h5>
                    <a href="{{ route('tickets.index') }}">
                        <h6 class="mt-3 btn btn-primary">All Ticket</h6>
                    </a>
                </div>
                <div class="card-body mt-3">
                    <form class="form-horizontal" action="{{ route('tickets.store') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label"> User Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                               <select name="user_id" class="form-control user" id="">
                                @forelse ($users as $user)
                                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected': '' }}>{{ $user->name }} <span>(</span> {{$user->email}} <span>)</span></option>
                                @empty
                                    <option class="text-danger text-center" value="">No User</option>
                                @endforelse
                               </select>
                                <b><span class="text-danger">{{ $errors->first('user_id') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label"> Train Service <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                               <select name="train_service_id" class="form-control train_service" id="">
                                @forelse ($train_services as $train_service)
                                    <option value="{{ $train_service->id }}" {{ old('train_service_id') == $train_service->id ? 'selected': '' }}>{{ $train_service->name }}</option>
                                @empty
                                    <option class="text-danger text-center" value="">No Train Service</option>
                                @endforelse
                               </select>
                                <b><span class="text-danger">{{ $errors->first('train_service_id') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label"> Stations <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                               <select name="station_id" class="form-control station" id="">
                                @forelse ($stations as $station)
                                    <option value="{{ $station->id }}" {{ old('station_id') == $station->id ? 'selected': '' }}>{{ $station->name }} </option>
                                @empty
                                    <option class="text-danger text-center" value="">No Station</option>
                                @endforelse
                               </select>
                                <b><span class="text-danger">{{ $errors->first('station_id') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="departure_time" class="col-md-3 form-label">Departure Time<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input min="1" class="form-control" value="{{ old('departure_time') }}" name="departure_time" id="departure_time"
                                     type="date" />
                                    <b><span class="text-danger">{{ $errors->first('departure_time') }}</span></b>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price" class="col-md-3 form-label">Price<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input min="1" class="form-control" value="{{ old('price') }}" name="price" id="price"
                                    placeholder="Price" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('price') }}</span></b>
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
