<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <h3> {{ $title }} </h3>
    <table border="1" style="scale: 10px">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Asal</td>
        </thead>
        @php $no = 1; @endphp
        @foreach ($daf_mhs as $mhs)
            <tbody>
                <td> {{ $no++ }} </td>
                <td> {{ $mhs['nama'] }} </td>
                <td> {{ $mhs['asal'] }} </td>
            </tbody>
        @endforeach
    </table>
</body>

</html>
