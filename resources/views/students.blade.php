@extends('main')

@section('content')
    @include('message')
    <form method="POST" action="{{ route("export.students") }}">
        @csrf
        @include('includes.header')
        <div>
            <table class="student-table">
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Course</th>
                </tr>
                @if($students_amount)
                    @foreach($students as $student)
                        <tr>
                            <td><input type="checkbox"
                                       name="itemIds[]"
                                       value="{{ $student->id }}"
                                       class="checkbox">
                            </td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->surname}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->course->university}}</td>
                            <td>{{$student->course->course_name}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" style="text-align: center">Oh dear, no data found.</td>
                    </tr>
                @endif
            </table>
        </div>
    </form>
@endsection
