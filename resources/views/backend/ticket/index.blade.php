@extends('backend.layout.master')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between border-bottom">
                <h5 class="card-title">Ticket</h5>
                <a href="{{ route('tickets.create') }}"><h6 class="mt-3 btn btn-primary">+Add</h6></a>
            </div>
            <table class="table datatable">
              <thead class="">
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>Train Service Name</th>
                  <th>Station</th>
                  <th>Departure Time</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tickets as $id =>$ticket)
                <tr>
                  <td>{{ $id+1 }}</td>

                  <td>{{ $ticket->user->name ?? '' }}</td>
                  <td>{{ $ticket->train_service->name  ?? ''}}</td>
                  <td>{{ $ticket->station->name  ?? ''}}</td>
                  <td>{{ $ticket->departure_time  ?? ''}}</td>
                  <td>{{ $ticket->price  ?? ''}}</td>
                  <td>{{ $ticket->status == 1 ? "Active" : "Inactive" }}</td>
                  <td class="d-flex">
                    <a class="btn btn-success me-1" href="{{ route('tickets.edit',$ticket->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form id="delete-form" action="{{ route('tickets.destroy',$ticket->id) }}" method="post">
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

