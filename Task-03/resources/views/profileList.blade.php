<h1>Profiles List</h1>
@foreach ($profile as $y )
<p> {{ $y->student->name }}</p>
<p> {{ $y->phone}}</p>
<p> {{ $y->address}}</p>



@endforeach