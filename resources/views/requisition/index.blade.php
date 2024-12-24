
<div class="container">
    <h1>Requisitions List</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requisitions as $requisition)
                <tr>
                    <td>{{ $requisition->id }}</td>
                    <td>{{ $requisition->name }}</td>
                    <td>{{ $requisition->phone }}</td>
                    <td>{{ $requisition->email }}</td>
                    <td>{{ $requisition->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('requisition.show', $requisition->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('requisition.edit', $requisition->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('requisition.destroy', $requisition->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $requisitions->links() }}
    </div>
</div>

