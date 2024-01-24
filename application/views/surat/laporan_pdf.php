<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Laporan PDF Toko Kita</h3>
        </div>
        <table id="table">
        <thead>
									<tr>
										<th>No</th>
										<th>ID Pengajuan</th>
										<th>Nama Pengaju (NIK)</th>
										<th>File</th>
										<th>Status Pengajuan</th>
										<th class="disabled-sorting text-right">Actions</th>
										<th>No Hp</th>
										<th>Tanggal</th>
										<th>Jenis Surat</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
									<?php if($key['status'] !== '5'):?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $key['id']; ?></td>
											<td><?= $key['nama'] . ' (' . $key['nik'] . ')'; ?></td>
											<td><?= $status[$key['status']]; ?></td>
											<td><?= $key['no_hp']; ?></td>
											<td><?= $key['tanggal']; ?></td>
											<td><?= $options[$key['jenis_surat']]; ?></td>
										</tr>
										<?php $no++; ?>
									<?php endif; ?>
									<?php endforeach; ?>
								</tbody>
        </table>
    </body>
</html>