<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Student Records</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Roll Number</th>
                <th>Marks</th>
                <th>Gender</th>
                <th>Date of Birth</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->roll_number }}</td>
                <td>{{ $student->marks }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->dob }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
