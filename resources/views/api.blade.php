<h1>user list</h1>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>profile</td>
    </tr>
    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src={{$user['avatar']}} alt=""> </td>
    </tr>
    @endforeach
</table>