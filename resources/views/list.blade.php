<h1>Member List</h1>
<form action="delete" method="post">
<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Operation</th>
    </tr>
    @foreach($members as $member)
    <tr>
        <td><input type="checkbox" name="ids[]" class="checkBoxClass" value="{{ $member['id'] }}"></td>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td>
            <a href={{ "delete/".$member['id'] }}>Delete</a>
            <a href={{ "edit/".$member['id'] }}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>
</form>

<span style="color: red">{{ Session::get('success');
 }}</span>

<span>
    {{$members->links()}}
</span>




















<style>
    table, tr {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        margin: 5px;
        padding: 15px;
        text-align: center;
    }

    .w-5 {
        width: 25px;
    }
</style>