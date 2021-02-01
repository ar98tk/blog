@extends('layouts.admin')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Categories</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.post_categories.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Add new category</span>
                </a>
            </div>
        </div>
        @include('backend.post_categories.filter.filter')

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <th>Name</th>
                    <th>Posts count</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th class="text-center" style="width: 30px;">Actions</th>
                    </thead>

                    <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('admin.posts.index', ['category_id' => $category->id]) }}">{{ $category->posts_count }}</a></td>
                        <td>{{ $category->status() }}</td>
                        <td>{{ $category->created_at->format('d-m-Y h:i a') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.post_categories.edit', $category->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this category?') ) { document.getElementById('category-delete-{{ $category->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <form action="{{ route('admin.post_categories.destroy', $category->id) }}" method="post" id="category-delete-{{ $category->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No categories found</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
                @if($category->count() > 10)
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                                {!! $categories->appends(request()->input())->links() !!}
                            </div>
                        </th>
                    </tr>
                @else

                @endif
            </div>
        </div>
    </div>


@endsection
