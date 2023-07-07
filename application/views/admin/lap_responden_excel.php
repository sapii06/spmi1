<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Email</th>
      <th>Prodi</th>
      <th>Semester</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($responden as $mhs): ?>
    <tr>
        <td><?php echo $mhs['mhs_nim']; ?></td>
        <td><?php echo $mhs['mhs_nama']; ?></td>
        <td><?php echo $mhs['mhs_username']; ?></td>
        <td><?php echo $mhs['mhs_email']; ?></td>
        <td><?php echo $mhs['prodi_nama']; ?></td>
        <td><?php echo $mhs['mhs_semester']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>