@extends('layouts.admin')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Page ({{ $page->title }})</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Pages</span>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <th>Page Title</th>
                        <td colspan="4"><a href="{{ route('posts.show', $page->slug) }}">{{ $page->title }}</a></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $page->category->name }}</td>
                        <th>Status</th>
                        <td>{{ $page->status == 1 ? 'Active' : 'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>{{ $page->user->name }}</td>
                        <th>Created date</th>
                        <td>{{ $page->created_at->format('d-m-Y h:i a') }}</td>
                    </tr>
                    @if($page->media->count() > 0)
                    <tr>
                        <td colspan="4">
                            <div class="row">

                                    @foreach($page->media as $media)
                                        <div class="col-2">
                                            <img src="{{ asset('assets/posts/' . $media->file_name) }}" class="img-fluid">
                                        </div>
                                    @endforeach
                            </div>
                        </td>
                    </tr>
                    @else
                        <tr>
                            <td colspan="7" class="text-center">No media found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Page Content</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <td colspan="4">{{ $page->description }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
