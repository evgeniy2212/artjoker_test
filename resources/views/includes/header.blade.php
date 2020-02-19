<div class="header">
    <div  style='margin: 10px;  text-align: left'>
        <input type="button" id="select" value="Select All"/>
        <input type="button" id="unselect" value="Unselect All"/>
        <input type="submit" value="Export Students"/>
        <a href="{{ route('student.csv') }}"><input type="button" value="Download Students"/></a>
        <a href="{{ route('export.total_attendance') }}"><input type="button" value="Export Total Attendance"/></a>
        <a href="{{ route('total_attendance.csv') }}"><input type="button" value="Download Total Attendance"/></a>
        <a href="{{ route('export.course_attendance') }}"><input type="button" value="Export Courses Attendance"/></a>
        <a href="{{ route('course_attendance.csv') }}"><input type="button" value="Download Courses Attendance"/></a>
    </div>
</div>
