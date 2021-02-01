<div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Last posts</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <font size="2">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Comments</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ \Illuminate\Support\Str::limit($post->title, 25, '...') }}</a></td>
                                <td>{{ $post->comments_count }}</td>
                                <td>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No posts found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                        </font>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Last comments</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <font size="2">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <td colspan="1">{{ $comment->name }}</td>
                                <td colspan="1">{{ \Illuminate\Support\Str::limit($comment->comment, 20, '...') }}</td>
                                <td colspan="1">{{ $comment->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td colspan="1">{{ $comment->created_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No comments found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                        </font>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
