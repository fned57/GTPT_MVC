<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    
    <div class="container" style="width:800px;"> 
    <header>
        <div class="d-flex justify-content-between">
                <div class="justify-content-start" >
                    <div style="display: flex;">
                        <img width="20px" src="https://th.bing.com/th/id/R.d04a4fd159c749df4f03609b71405834?rik=qzy3vGN4y%2bbV%2bw&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_212716.png&ehk=vaMcWF5b%2bxc%2f5D7BqJ0Uj1vfugK3hZfX6%2boMpSqDGwg%3d&risl=&pid=ImgRaw&r=0" alt="">
                        <h3>Quan ly phong tro</h3>
                    </div>    
                </div>
                
                    <div style="display: flex;">
                    <div class="col" style="margin-right: 20px;">
                    <p>User</p>   
                    </div>
                    <div class="col">
                    <img width="20px" src="https://th.bing.com/th/id/R.d04a4fd159c749df4f03609b71405834?rik=qzy3vGN4y%2bbV%2bw&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_212716.png&ehk=vaMcWF5b%2bxc%2f5D7BqJ0Uj1vfugK3hZfX6%2boMpSqDGwg%3d&risl=&pid=ImgRaw&r=0" alt=""></div>
             
                    </div>
                   
                </div>
    </header>
        <div class="d-flex justify-content-start">
            <div class= >
            <ul class="list-group">
                <li class="list-group-item"><a href="?user">user</a></li>
                <li class="list-group-item"><a href="?phongtro">Phong tro</a></li>
                <li class="list-group-item"><a href="?khuvuc">khu vuc</a></li>
                <li class="list-group-item"><a href="?info">ca nhan</a></li>
                </ul>
               
            </div >
            <div >
                <?php
            
                include_once($path.'.php');
                ?>
            </div>


        </div>
        <footer>
        foo
    </footer>
    </div>    
    
    
    


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>