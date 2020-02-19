@if($errors->any())
    <table class="alert error">
        <tr>
            @foreach($errors->all() as $error)
                <td>{{ $error }}</td>
            @endforeach
        </tr>
    </table>
@endif

@if(session('success'))
    <table class="alert success">
        <tr>
            @foreach (session()->get('success') as $message)
                <td>{{ $message }}</td>
            @endforeach
        </tr>
    </table>
@endif
