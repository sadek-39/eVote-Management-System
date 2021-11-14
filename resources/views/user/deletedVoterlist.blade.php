@extends('layout.master')
@section('content')
<!-- dashboard -->
<main id="dashboard">
    <div class="container-fluid">
        <h3 class="fs-3 fw-normal mb-4">Deleted Voter List</h3>
        <div class="eVote-table p-4 is-drop-shadow bg-white rounded">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0">
                    Total Voter : <strong class="text-cyan">{{count($voter)}}</strong>
                </h5>
                <div class="export-data d-flex align-items-center gap-2">
                    <p class="mb-0">Download as :</p>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-info btn-sm text-light">CSV</button>
                        <button type="button" class="btn btn-danger btn-sm">Pdf</button>
                    </div>
                </div>
            </div>
            <div class="voter-list table-responsive">
                <table class="table table-sm align-middle">
                    <thead class="text-uppercase">
                        <tr>
                            <th>#SL</th>
                            <th>Voter ID</th>
                            <th>Image</th>
                            <th>Voter Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voter as $voter)
                        <tr>
                            <td>{{$voter->sl_no}}</td>
                            <td>{{$voter->voter_id}}</td>
                            <td>
                                <img src="{{$voter->img}}" alt="voter-img" class="img-fluid" />
                            </td>
                            <td>{{$voter->voter_name}}</td>
                            <td>{{$voter->address}}</td>
                            <td>{{$voter->phone}}</td>
                            <td>{{$voter->email}}</td>
                            <td>
                                <a href="{{route('dashboard.restore',$voter->voter_id)}}" type="button" class="btn btn-primary btn-sm">
                                    <i class="bi bi-recycle"></i>
                                </a>
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="pagination-nav mt-2 text-end">
                <ul class="pagination pagination-sm d-inline-flex">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>
<!-- dashboard -->

    
@endsection