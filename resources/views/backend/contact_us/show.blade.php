@extends('layouts.admin')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Message ({{ $message->title }})</h3>
            <div class="ml-auto">
                <a href="{{ route('admin.contact_us.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Messages</span>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <th>Title</th>
                        <td>{{ $message->title }}</td>
                    </tr>
                    <tr>
                        <th>From</th>
                        <td>{{ $message->name }} </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $message->email }} </td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{ isset($message->mobile) ? $message->mobile : 'User didn\'t enter mobile number' }} </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Message Content</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                    <tr>
                        <td colspan="4">{{ $message->message }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
