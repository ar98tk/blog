@extends('layouts.admin')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Post ({{ $user->name }})</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.supervisors.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Users</span>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <td colspan="4" alt="centered image">
                            @if ($user->user_image != '')
                                <center><img src="{{ asset('assets/users/' . $user->user_image) }}" class="img-fluid center" width="250" height="250"></center>
                            @else
                                <center><img src="{{ asset('assets/users/default.png') }}" class="img-fluid" width="250" height="250"></center>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }} </td>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                        <th>Mobile</th>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                    <tr>
                        <th>Receive Emails</th>
                        <td>{{ $user->receive_email == 1 ? 'Yes' : 'No' }}</td>
                        <th>Status</th>
                        <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Created date</th>
                        <td>{{ $user->created_at->format('d-m-Y h:i a') }}</td>
                        <th>Posts Count</th>
                        <td>{{ $user->posts_count }}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Supervisor Permissions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-bordered" width="20%" cellspacing="0">
                    <tbody>
                    <ol >
                            <tr>
                                <td>

                                    {!! Form::select('permissions[]', [] + $permissions->toArray(), old('permissions', $userPermissions), ['class' => 'form-control']) !!}

                                </td>
                            </tr>
                    </ol>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
