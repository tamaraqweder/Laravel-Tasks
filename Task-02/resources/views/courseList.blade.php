<h1>this is course</h1>
<table border="1">
    <tr>
        <th>title</th>
        <th>description</th>
        <th>hours</th>

    </tr>

        @foreach ($courses as $x )
          <tr>
          <td>{{ $x->title }}</td>
          <td>{{ $x->description }}</td>
          <td>{{ $x->hours }}</td>


    </tr>
            @endforeach

</table>