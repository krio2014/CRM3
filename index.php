<?php include('include/bootstrap.html');

?>
<script>
 function tog(){
                
//                alert('gets here!');
                        $('#sideBarTog').show(); 
 }
    function untog(){
        $('#sideBarTog').hide();
    }
    
    function bothTog(){
        $('#sideBarTog').toggle();
    }
</script>

<body>
    
<div class="container-fluid" name="main-content" id="main-content" >

    
    
<div class="row">
    
    <div class="col-sm-1 sidebar hidden-sm-down p-0" id="sideBarTog">
        <div class="row">
            
            <div class="container-fluid p-3">
                    <img src="images/placeholder.png" width="120px" height="120px">
                
            </div>
            
        
        </div>            
        
                        <ul class="navbar-nav flex-column hidden-sm-down">
                            
                            <li class="nav-item">
                                <a class="nav-link sidebarLink p-3" href="#">File<span class="sr-only">(current)</span></a>
                            </li>
                            
                            <li class="nav-item sidebarLink">
                                <a class="nav-link sidebarLink p-3 active" href="#">Marketing</a>
                            </li>
                        
                            <li class="nav-item sidebarLink">
                                <a class="nav-link sidebarLink p-3" href="logout.html">Reports</a>
                            </li>
                        </ul>
                    

            <!-- Page content goes here-->
            <div class="col"  name="pageContentContainer" id="pageContentContainer">
            
            </div>
        
    </div>
    

        <div class="col p-0"> 

                <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse topNavBar" name="topNavBar">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#topNavBarTog" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <input type="button" class="hidden-sm-down"style="height:50px; margin-left:-20px;"  onClick="bothTog()" value=">"/>
<!--                    <button class="toggler nav-toggler-left myTog" type="button" data-toggle="collapse" data-target="#sideBarTog" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="z-index:1000;">-->
<!--                        <span class="navbar-toggler-icon"></span>-->
<!--                    </button>   -->
                    <a class="navbar-brand" style="margin-left:10px;" href="#">Backoffice</a>
                    <div class="collapse navbar-collapse" id="topNavBarTog">
                        
                        
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link " href="#">System Settings<span class="sr-only"></span></a>
                            </li>
<!--
                            <li class="nav-item active ">
                                <a class="nav-link " href="#"></a>
                            </li>
-->
                        
                            <li class="nav-item ">
                                <a class="nav-link " href="logout.html">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            <!-- Page content goes here-->
            <div class="col"  name="pageContentContainer" id="pageContentContainer">
            
            </div>
        </div>
    </div>
    

    
    
    

    </div></body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	  
	  <script src="content/js/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>


</html>