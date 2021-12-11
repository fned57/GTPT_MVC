<html>
<head>
	<title>Danh sách phòng trọ</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>

<div class="container-lg overflow-hidden">
    <h1>Danh Sach Phong Tro</h1>
    
    <!-- <div class="row gy-5"><button>Bo Loc</button></div> -->
  <div class="row gy-5">
    <div class="row gy-5">
    <button   type="button" class="col-1 btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Bộ loc</button>
    </div>

    <div class="row gy-5">
    <button   type="button" class="col-1 btn btn-primary " id='boloc' onclick="boloc()">Bộ loc</button>
    </div>
  
    <!-- <?php
    // if($Listphongtro->num_rows > 0){
    

    //     while($row = $Listphongtro->fetch_assoc()) {

    //         echo '
           
    //         <div class="col-6">
    //         <div class="p-3 border bg-light">
    //             <div class="row gx-5">
    //                 <div class="col">
    //                     <img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/>
    //                     <div class="col">
    //                     <div>
    //                         <div>
    //                             <p >Lượt Xem : '.$row["count_view"].'</p>
    //                         </div>
    //                         <div class="info-item">
    //                             <p><span> Thời Gian : '.$row["created_at"].'</span></p>
    //                         </div>
                        
    //                     </div>
    //             </div>
                    
    //                     </div>
    //                 <div class="col">
    //                         <div>
    //                             <div>
    //                                 <p style="color: #fd9843; font-size: 18px; font-weight:600">'.$row["title"].'</p>
    //                             </div>
    //                             <div class="info-item">
    //                                 <p><i class="far fa-user-circle"></i><span> '.$row["user_id"].'</span></p>
    //                             </div>
    //                             <div class="info-item">
    //                                 <p><i class="fas fa-layer-group"></i><span> '.$row["utilities"].'</span></p>
    //                             </div>
    //                             <div class="info-item">
    //                                 <p><i class="fas fa-map-marker-alt"></i><span> '.$row["address"].'</span></p>
    //                             </div>
    //                             <div class="info-item">
    //                                 <p><i class="far fa-money-bill-alt"></i><span>'.$row["price"].'</span></p>
    //                                                 </div>
    //                                             </div>
    //                                     </div>
                                        
    //                             </div>
    //                             <a class="info-item" href="info/'.$row["Id"].'">Chi Tiết </a>
    //                         </div>
                            
    //                     </div>
                       
    //             ';


    //     }
    // }
  
?> -->
    
  </div>
</div>

<!-- start modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Bộ Lọc</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <a href="Boloc" onclick="boloc()"> boloc</a>
      </div>
      <div class="modal-body">

        <p>Khu vuc</p>

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
<!-- end modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

    function boloc(){
       $.get('gtpt/admin/user',  // url
      function (data, textStatus, jqXHR) {  // success callback
        
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
        //   alert('status: ' + textStatus + ', data:' + data);
        });
    }

 
// $.get('/data.txt',  // url
//       function (data, textStatus, jqXHR) {  // success callback
//           alert('status: ' + textStatus + ', data:' + data);
//     });
</script>
</body>
</html>