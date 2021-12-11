<html>
<head>
	<title>Danh sách phòng trọ</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>

<div class="container-lg overflow-hidden">
    <h1>Thông tin phòng trọ</h1>
  <div class="row gy-5">
      <button id="Boloc">Bo Loc</button>
    <?php
    if($phongtro->num_rows > 0){
    

        while($row = $phongtro->fetch_assoc()) {

            echo '
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <div class="row gx-5">
                            <div class="col">
                                <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
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
                                    
                                    </div>
                                </div>';
                                break;


        }
    }
  
?>
    
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"> </script>
<script>
 $('#Boloc').click(()=>{
    alert("sad");
 });
// $.get('/data.txt',  // url
//       function (data, textStatus, jqXHR) {  // success callback
//           alert('status: ' + textStatus + ', data:' + data);
//     });
</script>
</body>
</html>