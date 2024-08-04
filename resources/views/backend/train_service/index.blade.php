@extends('backend.layout.master')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between border-bottom">
                <h5 class="card-title">Train Sevices</h5>
                <a href="{{ route('train-services.create') }}"><h6 class="mt-3 btn btn-primary">+Add</h6></a>
            </div>
            <table class="table datatable">
              <thead class="">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Route</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($train_services as $id =>$train_service)
                <tr>
                  <td>{{ $id+1 }}</td>

                  <td>{{ $train_service->name ?? '' }}</td>
                  <td>{{ $train_service->route  ?? ''}}</td>
                  <td>{{ $train_service->status == 1 ? "Active" : "Inactive" }}</td>
                  <td class="d-flex">
                    <a class="btn btn-success me-1" href="{{ route('train-services.edit',$train_service->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form id="delete-form" action="{{ route('train-services.destroy',$train_service->id) }}" method="post">
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

