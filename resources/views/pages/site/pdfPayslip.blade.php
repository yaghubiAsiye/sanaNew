<!DOCTYPE html>
<html>
<head>
    <title>persiatc.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    @foreach ($data as $items)

        <p></p>
        <p></p>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>

            <tr>
                <td>{{ $items['itemWithName'][0]['Name'] ?? ''}}</td>
                <td>{{ $items['itemWithName'][0]['Family'] ?? ''}}</td>
                <td>{{ $items['itemWithName'][0]['FatherName'] ?? ''}}</td>
            </tr>

        </table>
    @endforeach
</body>
</html>
