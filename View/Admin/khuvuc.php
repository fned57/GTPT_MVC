


<h1 style="text-align:center;">Danh Sach khu Vuc</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Khu Vuc
</button>
<?php
if($error != null){
    echo "<script type='text/javascript'>alert('$error');</script>";;
}
if($mess != null){
  echo "<script type='text/javascript'>alert('$mess');</script>";;
}
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
                          <a  class="btn btn-danger" href="?khuvuc&&id='.$row['Id'].'&&event=xoa">Xóa</a>
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
                <form action="" method="post" class="row g-3" >

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