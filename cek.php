
     <?php 
if(isset($_POST['login'])){
    $user =$_POST['username'];
    $pass =$_POST['password'];
        if ($user == "admin" && $pass == "123") {
          echo "<h3>username anda salah!!!</h3";
        }
            elseif ($user=="Admin" && $pass=="123") {
              echo "<h6>username dan password benar</h6>";
            } else{
                  echo "<h1>Gagal Login</h1";
                }
              }
        ?>   

  