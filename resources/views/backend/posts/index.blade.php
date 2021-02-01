@extends('layouts.admin')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Posts</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Add new post</span>
                </a>
            </div>
        </div>
        @include('backend.posts.filter.filter')

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>Title</th>
                        <th>Comments</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>User</th>
                        <th>Created at</th>
                        <th class="text-center" style="width: 30px;">Actions</th>
                    </thead>

                    <tbody>
                    @if (isset($posts))
                    @forelse($posts as $post)
                    <tr>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ \Illuminate\Support\Str::limit($post->title,15,'...')}}</a></td>
                        <td>{{ $post->comment_able == 1 ? $post->comments->count() : 'Disallow' }}</td>
                        <td>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td><a href="{{ route('admin.posts.index', ['category_id' => $post->category_id]) }}">{{ $post->category->name }}</a></td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('d-m-Y h:i a') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this post?') ) { document.getElementById('post-delete-{{ $post->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" id="post-delete-{{ $post->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>

                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No posts found</td>
                        </tr>
                    @endforelse
                    @endif

                    </tbody>
                </table>
                @if(isset($posts))
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $posts->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @elseif(isset($posts) && $post->count() > 10)
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $posts->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @else

                @endif
            </div>
        </div>
    </div>


@endsection
