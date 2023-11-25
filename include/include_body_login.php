<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2> Ogame-Parser</h2>
            <form ACTION="./dao/do_login.php" METHOD="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">User</label>
                    <input  class="form-control" id="user" Type="text" NAME="user" SIZE="30" placeholder="inserisci nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" NAME="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <div class="col-md-4"></div>
</div>

</div>
<?php
    if(isset($_SESSION['user']))
    $_SESSION['user']=$_POST['user']; 
    if(isset($_SESSION['pwd']))
    $_SESSION['pwd']=$_POST['pwd'];
?>
<!-- Optional JavaScript -->