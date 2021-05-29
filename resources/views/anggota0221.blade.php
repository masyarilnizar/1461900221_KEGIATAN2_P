<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>


<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>No Telp</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($anggota as $Anggota)
                  <tr>
                      <td>{{ $Anggota->anggota_id }}</td>
                      <td>{{ $Anggota->anggota_nama }}</td>
                      <td>{{ $Anggota->anggota_alamat }}</td>
                      <td>{{ $Anggota->anggota_jk }}</td>
                      <td>{{ $Anggota->anggota_telp }}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>