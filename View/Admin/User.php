<h1>User</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm USER
</button>

</br>
<?php
if($errer != null){
    echo "<script type='text/javascript'>alert('$errer');</script>";;
}
if($mess != null){
  echo "<script type='text/javascript'>alert('$mess');</script>";;
}
    if($listuser != null){
      if ($listuser->num_rows > 0){
       
          echo '<table class="table table-success table-striped">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">UserName</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
            <th scope="col">Event</th>
          </tr>';
      



          
        
                  while($row = $listuser->fetch_assoc()) {
                      echo ' 
                      <tr>
                          <th scope="row">'.$row['Id'].'</th>
                          <td> <p>'.$row['Name'].'</p></td>
                          <td>'.$row['Username'].'</td>
                          <td>'.$row['Phone'].'</td>
                          <td>'.$row['Email'].'</td>
                          <td><img src='.$row["Avatar"].'" alt="Girl in a jacket" width="200" height="200"></td>
                          <td>
                            <a  class="btn btn-danger" href="?user&&id='.$row['Id'].'&&event=xoa">Xóa</a>
                          </td>
                          </tr>';
                  }
            
          echo ' </table>';       
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
                <form action="" method="post" class="row g-3" name="fromdangki" onsubmit="return checkform(document.fromdangki)">

            <div class="mb-6">
            <label for="formGroupExampleInput" class="form-label">Tài khoản</label>
            <input type="text" class="form-control" name="TxtUserName"  >
                <p class="badge bg-primary text-wrap" id="PTxtUserName">
                </p>
            </div>

            <div class="mb-6">
            <label for="formGroupExampleInput2" class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control"  name="TxtPass"  >
            <p class="badge bg-primary text-wrap"  id="PTextPassword"></p>
            </div>

            <div class="mb-6">
            <label for="formGroupExampleInput" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" name = "TextRePassword" >
            <p class="badge bg-primary text-wrap" id="PTextRePassword"> </p>
            </div>

            <div class="mb-6">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="text" class="form-control" name="TxtEmail" >
            <p class="badge bg-primary text-wrap" id="PTextEmail" > </p>
            </div>

            <div class="mb-6">
            <label for="formGroupExampleInput" class="form-label">Tên hiện thị</label>
            <input type="text" class="form-control" name="TxtName">
            <p class="badge bg-primary text-wrap" id="PTxtName">
                </p>
            </div>

            <div class="mb-6">
            <label for="formGroupExampleInput" class="form-label">Số Điện Thoại</label>
            <input type="text" class="form-control" name="TxtPhone">
            <p class="badge bg-primary text-wrap" id="PTxtName">
                </p>
            </div>

            <div class="col-12 mb-6">
            <button type="submit" name="sumit"  class="btn btn-primary justify-content-center" >Đăng ký</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>

            <!-- endform -->
      </div>
     
    </div>
  </div>
</div>