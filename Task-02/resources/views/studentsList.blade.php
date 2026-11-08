<h1>student list</h1>

<table border="1">
  <tr>
    <th>name</th>
    <th>email</th>
    <th>age</th>
  </tr>

  @foreach ($students as $student)
  <tr>
  <td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->age }}</td>
  </tr>


@endforeach

</table>
