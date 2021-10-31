<div>
    <h1>Welcome to students Details pages</h1>
    <h2>Student Name</h2>
    <ul>
        @foreach ($students as $student)
            <li><b><i><u>{{$student}}</u></i></b></li>
        @endforeach
    </ul>
</div>