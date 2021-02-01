@extends('layouts.admin')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Supervisors</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.supervisors.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Add new supervisor</span>
                </a>
            </div>
        </div>
        @include('backend.supervisors.filter.filter')

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email & Mobile</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th class="text-center" style="width: 30px;">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(isset($users))
                    @forelse($users as $user)
                        <tr>
                            <td>
                                @if ($user->user_image != '')
                                    <img src="{{ asset('assets/users/' . $user->user_image) }}" width="60">
                                @else
                                    <img src="{{ asset('assets/users/default.png') }}" width="60">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.supervisors.show', $user->id) }}">{{ $user->name }}</a>
                                <p class="text-gray-400"><b>{{ $user->username }}</b></p>
                            </td>
                            <td>
                                {{ $user->email }}
                                <p class="text-gray-400"><b>{{ $user->mobile }}</b></p>
                            </td>
                            <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $user->created_at->format('d-m-Y h:i a') }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.supervisors.edit', $user->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this supervisor?') ) { document.getElementById('supervisor-delete-{{ $user->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <form action="{{ route('admin.supervisors.destroy', $user->id) }}" method="post" id="supervisor-delete-{{ $user->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No supervisors found</td>
                        </tr>
                    @endforelse
                    @endif
                    </tbody>
                </table>
                @if(isset($users))
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $users->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @elseif(isset($users) && $user->count() > 10)
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $users->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @else

                @endif
            </div>
        </div>
    </div>


@endsection
