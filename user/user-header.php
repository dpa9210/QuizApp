<nav class="navbar navbar-fixed-top bg-purple-hd" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index">
      <img id="logo1" alt="logo" src="dist/img/logo.png" width="90" height="30" style="max-width:100px; margin-top:-5px;">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php if(isset($_SESSION['user_id'])){
          echo "<li><a class='right' href='profile.php'><span class='glyphicon glyphicon-user'></span>Profile</a></li>"."<li><a href='logout.php'><span class='glyphicon glyphicon-off'></span>Logout</a></li>";
        }else{
          echo "<li><a class='right' href='index.php'> Login</a></li>";
        } ?>
        </ul>

        <div class="container">
      <ul class="nav navbar-nav navbar-right">

      <li>
        <p>
         <li><a> <?php if(isset($_SESSION['user_id'])){echo $_SESSION['name']." ".$_SESSION['name2'];} ?> </a>  </li>     

        </p>
      </li>
     
    
      </ul>
      </div>
  
    </div>
  </div>
</nav>


