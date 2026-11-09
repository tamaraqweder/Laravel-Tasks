<h1>Students List</h1>
@foreach ($students as $student)
  <p>{{ $student->name }}</p>
<p>{{ $student->email }}</p>

<h3>Course Information:</h3>
<p>{{ $student->course->name }}</p>
<h3>Profile Information:</h3>
<p>{{ $student->personalProfile->phone}}</p>
<p>{{ $student->personalProfile->address}}</p>





@endforeach