<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>danh sach phong tro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album-rtl/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">حول</h4>
          <p class="text-muted">أضف بعض المعلومات حول الألبوم، المؤلف، أو أي سياق خلفية آخر. اجعلها بضع جمل حتى يتمكن الزوار من التقاط بعض التلميحات المفيدة. ثم اربطها ببعض مواقع التواصل الاجتماعي أو معلومات الاتصال.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">تواصل معي</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">تابعني على تويتر</a></li>
            <li><a href="#" class="text-white">شاركني الإعجاب في فيسبوك</a></li>
            <li><a href="#" class="text-white">راسلني على البريد الإلكتروني</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
        $user = $_SESSION["user"];
        if($user["Role"] === 'admin'){
          echo '<a href="admin" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
          <strong>Quản Lý</strong>
        </a>';

        
        if($user != null){
          
          echo '<a href="logout" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
          <strong>Đăng Xuất</strong>
          </a>';
        }else{
          
          echo '<a href="login" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
          <strong>Đăng Nhập</strong>
          </a>';
        }
      }
      
      ?>
      
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"> Dang sach phòng trọ</h1>
        <p class="lead text-muted">وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">الدعوة الرئيسية للعمل</a>
          <a href="#" class="btn btn-secondary my-2">عمل ثانوي</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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

        //   echo '
        //   <div class="col">
        //   <div class="card shadow-sm">
        //     <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text></svg>

        //     <div class="card-body">
        //       <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
        //       <div class="d-flex justify-content-between align-items-center">
        //         <div class="btn-group">
        //           <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
        //           <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
        //         </div>
        //         <small class="text-muted">9 دقائق</small>
        //       </div>
        //     </div>
        //   </div>
        // </div>
        //   ';


  }
}}
        

      ?>
       
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">عد إلى الأعلى</a>
    </p>
    <p class="mb-1">مثال الألبوم هو © Bootstrap ، ولكن يرجى تنزيله وتخصيصه لنفسك!</p>
    <p class="mb-0">جديد على Bootstrap؟ <a href="/"> تفضل بزيارة الصفحة الرئيسية </a> أو اقرأ <a href="../getting-started/introduction/ "> دليل البدء </a>.</p>
  </div>
</footer>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
