@extends('layouts.admin')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Contact Us</h3>
        </div>
        @include('backend.contact_us.filter.filter')

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>From</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th class="text-center" style="width: 30px;">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if (isset($messages))
                    @forelse($messages as $message)
                        <tr>
                            <td><a href="{{ route('admin.contact_us.show', $message->id) }}">{{ $message->name }}</a></td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->status == 1 ? 'Read' : 'Unread' }}</td>
                            <td>{{ $message->created_at->format('d-m-Y h:i a') }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.contact_us.show', $message->id) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this message?') ) { document.getElementById('message-delete-{{ $message->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    <form action="{{ route('admin.contact_us.destroy', $message->id) }}" method="post" id="message-delete-{{ $message->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No messages found</td>
                        </tr>
                    @endforelse
                    @endif
                    </tbody>
                </table>

                @if(isset($messages))
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $messages->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @elseif(isset($messages) && $message->count() > 10)
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $messages->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @else

                @endif
            </div>
        </div>
    </div>


@endsection
