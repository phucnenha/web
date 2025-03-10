<html>
<head>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sach as $row)
            <tr>
                <td>{{ $row->tieu_de }}</td>
                <td>{{ $row->tac_gia }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>

