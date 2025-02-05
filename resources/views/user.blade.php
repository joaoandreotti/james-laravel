<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User Jameses</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @if ($user)
                @foreach ($user->james as $jam)
                    <tr>
                        <td>{{ $jam->id }}</td>
                        <td>{{ $jam->user_id }}</td>
                        <td>{{ $jam->description }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
