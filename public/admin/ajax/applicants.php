<?php

$conn = mysqli_connect('localhost','root','','db_applicants');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM tb_applicants WHERE
  id LIKE '%$keyword%' OR
  name LIKE '%$keyword%' OR
  pob LIKE '%$keyword%' OR
  dob LIKE '%$keyword%' OR
  gender LIKE '%$keyword%' OR
  email LIKE '%$keyword%' OR
  phone LIKE '%$keyword%' OR
  address LIKE '%$keyword%' OR
  id_job LIKE '%$keyword%' OR
";
$applicants = query($query);
?>

<table class="table table-bordered overflow-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">POB</th>
      <th scope="col">DOB</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_Number</th>
      <th scope="col">Address</th>
      <th scope="col">Job_Interest</th>
      <th scope="col">Photo</th>
      <th scope="col">KTP</th>
      <th scope="col">KK</th>
      <th scope="col">SKCK</th>
      <th scope="col">Sertificate</th>
    </tr>
  </thead>
  <tbody>

      <?php foreach($data['applicants'] as $applicants) :?>
        <tr>
        <th scope="row"><?= $applicants['id'];?></th>
        <td><?= $applicants['name'];?></td>
        <td><?= $applicants['pob'];?></td>
        <td><?= $applicants['dob'];?></td>
        <td><?= $applicants['gender'];?></td>
        <td><?= $applicants['email'];?></td>
        <td><?= $applicants['phone'];?></td>
        <td><?= $applicants['address'];?></td>
        <td><?= $applicants['id_job'];?></td>
        <td><?= $applicants['photo'];?></td>
        <td><?= $applicants['ktp'];?></td>
        <td><?= $applicants['kk'];?></td>
        <td><?= $applicants['skck'];?></td>
        <td><?= $applicants['sertificate'];?></td>
        </tr>
      <?php endforeach;?>
</table>

<?php
private function query($query){
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

?>
