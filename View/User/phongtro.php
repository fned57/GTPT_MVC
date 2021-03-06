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
   <?php
    if($Listphongtro != null){
        // print_r($Listphongtro);
    if($Listphongtro->num_rows > 0){
    

        while($row = $Listphongtro->fetch_assoc()) {

            echo '
           
            <div class="col-6">
            <div class="p-3 border bg-light">
                <div class="row gx-5">
                    <div class="col">
                        <img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/>
                        <div class="col">
                        <div>
                            <div>
                                <p >Lượt Xem : '.$row["count_view"].'</p>
                            </div>
                            <div class="info-item">
                                <p><span> Thời Gian : '.$row["created_at"].'</span></p>
                            </div>
                        
                        </div>
                </div>
                    
                        </div>
                    <div class="col">
                            <div>
                                <div>
                                    <p style="color: #fd9843; font-size: 18px; font-weight:600">'.$row["title"].'</p>
                                </div>
                                <div class="info-item">
                                    <p><i class="far fa-user-circle"></i><span> '.$row["user_id"].'</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="fas fa-layer-group"></i><span> '.$row["utilities"].'</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="fas fa-map-marker-alt"></i><span> '.$row["address"].'</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="far fa-money-bill-alt"></i><span>'.$row["price"].'</span></p>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                </div>
                                <a class="info-item" href="info/'.$row["Id"].'">Chi Tiết </a>
                            </div>
                            
                        </div>
                       
                ';


        }
    }}
  
?> 
    
  </div>
</div>
<a href=""></a>
<!-- start modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Bộ Lọc</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
      </div>
      <div class="modal-body">
        <div id="dangsach">
            <p>Dang sach tim kiem</p>
            <p id='khuvuc'></p>
        </div>
</br>
        <p>Khu vực</p>
        <?php
        
          if($ListKhuVuc->num_rows > 0){
          

              while($row = $ListKhuVuc->fetch_assoc()) {
                echo '<button type="button" onclick="khuvuc('.$row["Id"].',\''.$row["Name"].'\')"> '.$row["Name"].'</button> ';
              }
          }
      ?>
</br>
        <button type="button" onclick="tim()">tim</button>  
       
      </div>
     
    </div>
  </div>
</div>
<!-- end modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    var ulr = '';
    var ulrkhuvuc ="";
    var ulrgiaphong = "";
    var ulrtienich = "";

    function khuvuc(diachi,name){
        var dangsach = document.getElementById("dangsach");
        var a = document.getElementById("khuvuc");
        dangsach.removeChild(a);
        
        var p = document.createElement("p");
        p.innerHTML = "Khu vực " + name;
        p.id = "khuvuc"
        dangsach.appendChild(p);
        ulrkhuvuc = "?khuvuc="+diachi;
    }
    function giaphong(gp){
        ulrgiaphong = "&&giaphong=" +gp;
    }
    function tienich(tc){
        ulrtienich = "&&tienich=" + tc;
    }

    function tim(){
       ulr = ulr + ulrkhuvuc +ulrgiaphong+ulrtienich;
        location.href= ulr;
    }

  
</script>
</body>
</html>