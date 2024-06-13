<h2>Student Details</h2>

@foreach ( $data as $id => $student)
    <h3>ID: {{$student->id}}</h3>
    <h3>Name: {{$student->name}}</h3>
    <h3>age: {{$student->age}}</h3>
    <h3>Phone: {{$student->phone}}</h3>
    <h3>email: {{$student->email}}</h3>

@endforeach