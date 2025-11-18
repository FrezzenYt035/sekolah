<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
<x-app-layout>

<h2>Daftar Siswa</h2>
<table cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kelas</th>
    </tr>

    @foreach($siswa as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->nis }}</td>
        <td>{{ $item->kelas->nama_kelas }}</td>
    </tr>
    @endforeach

</table>
</x-app-layout>
</body>
</html>