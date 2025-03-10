<html>
<head>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th> Mã Thể Loai</th>
            <th>Tên thể loại</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sach as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->ten_the_loai}}</td>
            </tr>
        @endforeach
    </tbody>
</table>   

</body>
</html>

