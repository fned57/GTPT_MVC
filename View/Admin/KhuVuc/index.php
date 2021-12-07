<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<h1 style="text-align:center;">danh Sach USer</h1>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Khu Vuc
</button>
<?php

    if($ListKhuVuc != null){
      if ($ListKhuVuc->num_rows > 0){

          echo '<table class="table">
          <thead>
              <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col"></th>
              </tr>
          </thead>
          <tbody>';
      



          
        
                  while($row = $ListKhuVuc->fetch_assoc()) {
                      echo ' 
                      <tr>
                          <th scope="row">'.$row['Id'].'</th>
                          <td>'.$row['Name'].'</td>
                          <td>
                            <button type="button" class="btn btn-primary">Sửa</button>
                            <button type="button" class="btn btn-primary">Xóa</button>
                          </td>
                          </tr>';
                  }
            
          echo '</tbody>
          </table>';       
      }
    }else{
      echo '<h1 style="text-align:center;">danh Sach trong</h1>';
    }
 ?>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Thêm User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


       <!-- form -->
                <form action="/khuvuc" method="post" class="row g-3" >

            <div class="mb-6">
            <label for="formGroupExampleInput" class="form-label">Tên Khu Vực</label>
            <input type="text" class="form-control" name="TxtName"  >
            </div>

            <div class="col-12 mb-6">
            <button type="submit" name="sumit"  class="btn btn-primary justify-content-center" >Thêm</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>

            <!-- endform -->
      </div>
     
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
