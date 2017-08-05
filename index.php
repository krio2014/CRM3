<?php include('include/bootstrap.html');

?>
<script>
 function tog(){
                
                alert('gets here!');
                        $('#sideBarTog').toggle(); 
 }
</script>

<body>
    <input type="button" onClick="tog()" value="button"/>
<div class="container-fluid" name="main-content" id="main-content" ><!--style="border:solid; border-color:red;"-->

    
    
<div class="row">

    
    <div class="collapse navbar-collapse" id="sideBarTog">
        
             
            <nav class="nav nav-toggleable-md navbar-inverse flex-column p-1" name="sidebar" id="sideBar">
                    
                    <div class="col-sm-2 sidebar toggleable" >

                    <a class="navbar-brand" href="#">Backoffice</a>
                    
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">New Case<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active ">
                                <a class="nav-link " href="#">as</a>
                            </li>
                        
                            <li class="nav-item ">
                                <a class="nav-link " href="logout.html">Logout</a>
                            </li>
                        </ul>
                    
                        
                </nav>

            <!-- Page content goes here-->
            <div class="col"  name="pageContentContainer" id="pageContentContainer">
            
            </div>
        </div>
    </div>
    
<!--
       <nav class="nav  flex-column" id="sideBarNav">                                    
                        <a class="nav-link"  href="#">Summary</a>
                        <a class="nav-link" href="#" >Timeline</a>
                        <a class="nav-link active" href="#">Product 
-->
<!--    </div>-->
<!--
    <div class="row">
        <div class="col-sm-2 sidebar" >
            <nav class="navbar navbar-toggleable-md ">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#sideBarTog" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Options</a>
                <div class="collapse navbar-collapse" id="sideBarTog">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Files<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accounts<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Marketing<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Case<span class="sr-only">(current)</span></a>
                        </li>
                    </ul> 
                </div>
            </nav>
        </div>
-->
            
        <div class="col-sm-10 p-0"> 

                <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse topNavBar" name="topNavBar">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#topNavBarTog" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="toggler nav-toggler-left myTog" type="button" data-toggle="collapse" data-target="#sideBarTog" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="z-index:1000;">
                        <span class="navbar-toggler-icon"></span>
                    </button>   
                    <a class="navbar-brand" href="#">Backoffice</a>
                    <div class="collapse navbar-collapse" id="topNavBarTog">
                        
                        
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link " href="#">New Case<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active ">
                                <a class="nav-link " href="#">as</a>
                            </li>
                        
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