<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 5px;
}

th {
  background-color: #4CAF50;
  font-weight: bold;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid grey;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
}

.responsive {
  width: 100%;
  height: auto;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body onload="printCetak()">

<h2 style="text-align: center;"><?php echo $title; ?></h2>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Email</th>
      <th>Prodi</th>
      <th>Semester</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($responden as $mhs): ?>
    <tr>
        <td><?php echo $i; ?>.</td>
        <td><?php echo $mhs['mhs_nim']; ?></td>
        <td><?php echo $mhs['mhs_nama']; ?></td>
        <td><?php echo $mhs['mhs_username']; ?></td>
        <td><?php echo $mhs['mhs_email']; ?></td>
        <td><?php echo $mhs['prodi_nama']; ?></td>
        <td><?php echo $mhs['mhs_semester']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</div>
<script>
    function printCetak() {
      window.print();
    }
</script>
</body>
</html>
