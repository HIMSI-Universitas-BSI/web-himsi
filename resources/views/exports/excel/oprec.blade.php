<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NO ANGGOTA</th>
            <th>NAMA LENGKAP</th>
            <th>ASAL KAMPUS</th>
            <th>SEMESTER</th>
            <th>EMAIL</th>
            <th>NO WHASTAPP</th>
            <th>STATUS INTERVIEW</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        ?>
        @foreach ($dataOprec as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->NIM }}</td>
                <td>{{ $data->no_anggota }}</td>
                <td>{{ $data->full_name }}</td>
                <td>{{ $data->campuses->name }}</td>
                <td>{{ $data->semester }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->whatsapp }}</td>
                <td>{{ $data->status_interview }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
