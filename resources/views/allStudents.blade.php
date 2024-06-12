<h2>All students data</h2>

@foreach ( $data as $id => $student)
    <h3>
       | {{$student->name}} |
        {{$student->age}} |
        {{-- {{$student->email}} | --}}
        <a href="{{route('view.student', $student->id)}}" >View Student</a> |
        
     
    </h3>
@endforeach


