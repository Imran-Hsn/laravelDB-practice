<h1>Member List</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>E-mail</td>
        <td>Address</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$members->links()}}
</span>




















<style>
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
        margin: 5px;
        padding: 15px;
        text-align: center;
    }

    .w-5 {
        width: 25px;
    }
</style>