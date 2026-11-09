<h1>Courses List</h1>

@foreach ($courses as $x)

    <h2>Course ID: {{ $x->id }}</h2>
    <h3>Course Name: {{ $x->name }}</h3>

    <h4>Enrolled Students:</h4>

    @foreach ($x->enrolledStudents as $student)
        <p>Student ID: {{ $student->id }}</p>
        <p>Student Name: {{ $student->name }}</p>
        <p>Student Email: {{ $student->email }}</p>
    @endforeach

    <hr>

@endforeach