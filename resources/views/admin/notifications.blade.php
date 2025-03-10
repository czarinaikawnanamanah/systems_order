@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notifications</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $notification)
                    <tr>
                        <td>{{ $notification->title }}</td>
                        <td>{{ $notification->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        {{ $notifications->links() }}
    </div>
@endsection
