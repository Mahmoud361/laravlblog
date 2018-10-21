<html>
<head>
    <title>viewStudents</title>
</head>
<body>
    <table>
        <tr>
            <th>fristName</th>
            <th>lastName</th>
            <th>email</th>
            <th>address</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        @foreach($allStudents as $student)
            <tr>
                <td>{{$student->fristName}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td><form action="deleteStudent" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$student->id}}">
                        <input type="submit" value="delete">
                    </form>
                </td>
                <td><form action="updateStudent" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$student->id}}">
                        <input type="submit" value="update">
                    </form>

                </td>
            </tr>

        @endforeach
    </table>
</body>
</html>