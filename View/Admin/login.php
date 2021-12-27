<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                
            </head>
            <body>
                <h1>Dang Nhap</h1>
               <?php
                    if($error != null){
                        echo "<script type='text/javascript'>alert('$error');</script>";
                    }
               ?>
                <form action="" method="post" class="row g-3">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We ll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
            </body>
        </html>
        
        '