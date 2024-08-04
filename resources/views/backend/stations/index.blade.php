@extends('backend.layout.master')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between border-bottom">
                <h5 class="card-title">Stations</h5>
                <a href="{{ route('stations.create') }}"><h6 class="mt-3 btn btn-primary">+Add</h6></a>
            </div>
            <table class="table datatable">
              <thead class="">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Loaction</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stations as $id =>$station)
                <tr>
                  <td>{{ $id+1 }}</td>

                  <td>{{ $station->name ?? '' }}</td>
                  <td>{{ $station->location  ?? ''}}</td>
                  <td>{{ $station->status == 1 ? "Active" : "Inactive" }}</td>
                  <td class="d-flex">
                    <a class="btn btn-success me-1" href="{{ route('stations.edit',$station->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form id="delete-form" action="{{ route('stations.destroy',$station->id) }}" method="post">
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

