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
  <div class="row gy-5">
    <?php

    for($i=0;$i<100;$i++){
        echo '
        <div class="col-6">
            <div class="p-3 border bg-light">
                <div class="row gx-5">
                    <div class="col">
                        <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
                        <div class="col">
                        <div>
                            <div>
                                <p >Phòng trọ tầng hai</p>
                            </div>
                            <div class="info-item">
                                <p><span> Người đăng: Hoàng Văn Công</span></p>
                            </div>
                           
                        </div>
                </div>
                    
                        </div>
                    <div class="col">
                            <div>
                                <div>
                                    <p style="color: #fd9843; font-size: 18px; font-weight:600">Phòng trọ tầng hai</p>
                                </div>
                                <div class="info-item">
                                    <p><i class="far fa-user-circle"></i><span> Người đăng: Hoàng Văn Công</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="fas fa-layer-group"></i><span> Diện tích: 12m2</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="fas fa-map-marker-alt"></i><span> Địa chỉ: 36 Bạch Liêu</span></p>
                                </div>
                                <div class="info-item">
                                    <p><i class="far fa-money-bill-alt"></i><span> Giá thuê: 1.200.000</span></p>
                                </div>
                            </div>
                    </div>
                    
            </div>
        
        </div>
      </div>';
      
    }
?>
    
  </div>
</div>
    <!-- <div style="max-width: 1500px; margin: auto;">
        <h3 style="margin-top: 100px">PHÒNG TRỌ MỚI ĐĂNG NHẤT</h3>
        <div class="flex-container" >
            <div class="row">
                <div style="display: flex; align-items:center; gap: 20px">
                    <div>
                        <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
                    </div>
                    <div>
                        <div>
                            <p style="color: #fd9843; font-size: 18px; font-weight:600">Phòng trọ tầng hai</p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-user-circle"></i><span> Người đăng: Hoàng Văn Công</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="fas fa-layer-group"></i><span> Diện tích: 12m2</span></p></div>
                        <div class="info-item">
                            <p><i class="fas fa-map-marker-alt"></i><span> Địa chỉ: 36 Bạch Liêu</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-money-bill-alt"></i><span> Giá thuê: 1.200.000</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="info-item">
                            <p><i class="far fa-clock"></i><span> 2 ngày trước</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-eye"></i><span> 150 lượt xem</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div   style="display: flex; align-items:center; gap: 20px">
                    <div>
                        <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
                    </div>
                    <div>
                        <div>
                            <p style="color: #fd9843; font-size: 18px; font-weight:600">Nhà cấp 4 rộng rãi</p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-user-circle"></i><span> Người đăng: Hoàng Văn Công</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="fas fa-layer-group"></i><span> Diện tích: 12m2</span></p></div>
                        <div class="info-item">
                            <p><i class="fas fa-map-marker-alt"></i><span> Địa chỉ: 36 Bạch Liêu</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-money-bill-alt"></i><span> Giá thuê: 1.200.000</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="info-item">
                            <p><i class="far fa-clock"></i><span> 2 ngày trước</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-eye"></i><span> 150 lượt xem</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div   style="display: flex; align-items:center; gap: 20px">
                    <div>
                        <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
                    </div>
                    <div>
                        <div>
                            <p style="color: #fd9843; font-size: 18px; font-weight:600">Phòng 3 người</p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-user-circle"></i><span> Người đăng: Hoàng Văn Công</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="fas fa-layer-group"></i><span> Diện tích: 12m2</span></p></div>
                        <div class="info-item">
                            <p><i class="fas fa-map-marker-alt"></i><span> Địa chỉ: 36 Bạch Liêu</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-money-bill-alt"></i><span> Giá thuê: 1.200.000</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="info-item">
                            <p><i class="far fa-clock"></i><span> 2 ngày trước</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-eye"></i><span> 150 lượt xem</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div   style="display: flex; align-items:center; gap: 20px">
                    <div>
                        <a href=""><img class="img-thumbnail" width="250" height="250" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/270931056.jpg?k=297b860de4daec5b19435a815b812be735e219034a68b285e306d51562e6a636&o=&hp=1"/></a>
                    </div>
                    <div>
                        <div>
                            <p style="color: #fd9843; font-size: 18px; font-weight:600">Phòng trọ đôi</p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-user-circle"></i><span> Người đăng: Hoàng Văn Công</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="fas fa-layer-group"></i><span> Diện tích: 12m2</span></p></div>
                        <div class="info-item">
                            <p><i class="fas fa-map-marker-alt"></i><span> Địa chỉ: 36 Bạch Liêu</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-money-bill-alt"></i><span> Giá thuê: 1.200.000</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="info-item">
                            <p><i class="far fa-clock"></i><span> 2 ngày trước</span></p>
                        </div>
                        <div class="info-item">
                            <p><i class="far fa-eye"></i><span> 150 lượt xem</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination" style="width: 30%; float:right">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div> -->
    
</body>
</html>