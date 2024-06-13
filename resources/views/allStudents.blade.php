<h2>All students data</h2>

{{-- <a  href="{{ newstudent }}">Add New</a> --}}
<a href="{{ route('newstudent') }}">Add New</a>


@foreach ( $data as $id => $student)
    <h3>
       | {{$student->name}} |
        {{$student->age}} |
        {{-- {{$student->email}} | --}}
        <a href="{{route('view.student', $student->id)}}" >View Student</a> |
        <a href="{{route('delete.student', $student->id)}}" >delete Student</a> |

        
     
    </h3>
@endforeach


