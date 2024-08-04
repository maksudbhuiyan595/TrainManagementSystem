@extends('backend.layout.master')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between border-bottom">
                <h5 class="card-title">wallet</h5>
                <a href="{{ route('wallets.create') }}"><h6 class="mt-3 btn btn-primary">+Add</h6></a>
            </div>
            <table class="table datatable">
              <thead class="">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($wallets as $id =>$wallet)
                <tr>
                  <td>{{ $id+1 }}</td>

                  <td>{{ $wallet->user->name ?? '' }}</td>
                  <td>{{ $wallet->balance  ?? ''}}</td>
                  <td>{{ $wallet->status == 1 ? "Active" : "Inactive" }}</td>
                  <td class="d-flex">
                    <a class="btn btn-success me-1" href="{{ route('wallets.edit',$wallet->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form id="delete-form" action="{{ route('wallets.destroy',$wallet->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-danger me-1"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

