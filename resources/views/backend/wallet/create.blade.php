@extends('backend.layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex justify-content-between border-bottom card-header">
                    <h5 class="card-title">Add Wallet</h5>
                    <a href="{{ route('wallets.index') }}">
                        <h6 class="mt-3 btn btn-primary">All wallet</h6>
                    </a>
                </div>
                <div class="card-body mt-3">
                    <form class="form-horizontal" action="{{ route('wallets.store') }}" method="post">
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
                            <label for="balance" class="col-md-3 form-label">Balance<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input min="1" class="form-control" value="{{ old('balance') }}" name="balance" id="balance"
                                    placeholder="balance" type="text" />
                                    <b><span class="text-danger">{{ $errors->first('balance') }}</span></b>
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
