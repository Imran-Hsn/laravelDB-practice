<table>
    <tr>
        <!-- <td>Id</td> -->
        <td>Employee Id</td>
        <td>Name</td>
        <td>E-mail</td>
        <td>Address</td>
        <td>Product Id</td>
        <td>Brand Name</td>
    </tr>

    @foreach ($joined as $item)
    <tr>
        <!-- <td>{{$item->id}}</td> -->
        <td>{{$item->employee_id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->product_id}}</td>
        <td>{{$item->brand_name}}</td>
    </tr>
    @endforeach
</table>





<style>
    * {
        margin: 5px;
        box-sizing: border-box;
    }
    table,
    th,
    td,
    tr {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
        text-align: center;
    }
</style>