<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            padding: 2rem;
            background: #f4f6fb;
            color: #1f2933;
        }

        .container {
            /* max-width: 1000px; */
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 0.5rem;
            font-size: 2rem;
            color: #1a202c;
        }

        .subtitle {
            margin-bottom: 1.5rem;
            color: #6b7280;
        }

        .card {
            background: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
            padding: 1.5rem 1.75rem;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        thead {
            background: #f3f4f6;
        }

        th,
        td {
            padding: 0.75rem 0.85rem;
            text-align: left;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        th {
            font-weight: 600;
            color: #4b5563;
            border-bottom: 1px solid #e5e7eb;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        .empty-state {
            padding: 1rem 0;
            color: #9ca3af;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Employee Management System</h1>
        <p class="subtitle">A simple overview of all employees in your company.</p>

        <div class="card">
            @if ($employees->isEmpty())
                <div class="empty-state">
                    No employees found. Try running the database seeder.
                </div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->city }}</td>
                                <td>{{ $employee->country }}</td>
                                <td>{{ $employee->position }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>

</html>
