<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel='shortcut icon' type='image/x-icon' href='image/favicon.ico'/>
  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link rel="publisher" href="https://plus.google.com/u/0/114476594670091453759?rel=publisher"/>
    <link rel="canonical" href="https://www.mebhineta.com/blog"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->  
    <title>Blog - Me Bhi Neta</title>
    
    <meta name="description" content="Read our latest and Blog on politics, elctions, evetns of leaders of India." />
    <meta name="robots" content="NOODP" />
 	<meta name="p:domain_verify" content="57217373ff9944e587df724ff3a77972"/> 

 	<meta name="msvalidate.01" content="B3F89C9A8EDE328CDA68F1D90D27E18E" />
    <meta name="yandex-verification" content="df7aa0bf6208ce6b" />

   	    <!-- Google Font CSS --> 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora|Roboto+Slab" rel="stylesheet">

<!-- <script>
 $(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script> -->
 

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111724400-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111724400-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8376214708896218",
          enable_page_level_ads: true
     });
</script>
</head>
<body>
<header>
   

<div class="container-fluid">
	<div class="row">
		<div class="navhead">
			<div class="col-md-3 col-xs-12">
				<a href="/" title="PR Agency | Political Campaign Management | Digital Agency - Me Bhi Neta"><img src="image/Me-bhi-neta-logo.png" title="Main bhi neta" alt="PR Agency | Political Campaign Management | Digital Agency - Me Bhi Neta" height="110" id="pic"></a>
			</div>


			
				<div class="col-md-3 col-xs-12" id="call" >
					
					<p id="text"><a href="contact"><img src="image/phone.png" height="40"/></a><span id="text1"><b>Call Now: </b></span>+91- 9958455307</p>
					<form style="margin-bottom: 5px;">
	                    <input type="text" name="search" placeholder="Search Here.." id="topbarsearch">
	                </form>
				</div>
		</div>
	</div>
</div>
</header>

<!-- Navigation -->

  <?php include("include/navigation.php") ?>

<!-- Navigation End -->


<!Navigation end here!>

	<section>
		
		<img src="image/blog-me-bhi-neta.jpg" alt="blog-me-bhi-neta" class="img-responsive" style="margin-top: -20px; width: 1504px; height: 400px;">
		
	</section>

<div class="container">
	<div class="col-md-8 col-xs-12">
		<h1 id="servicehead1">MBN Blog</h1>
			
			
<br>
		<section id="servicepara"> 
			<?php 
				function base64_url_encode($input) {
    return strtr(base64_encode($input), '+/=', '-_,');
		}
			include("config.php");
			$result=$mysqli->query("select * from containt order by id desc");
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{?>
				
			<img src="uploads/<?php echo $row['image']; ?>" class="img-responsive" width="750" height="250">
			<h2 id="servicehead2"><?php echo $row['title']; ?></h2>
	<hr class="horizontal" style="border-bottom: 2px solid #4e2623;">
		<div style="max-height: 140px; overflow: hidden;" id="servicepara"><?php echo $row['content']; ?></div>

		<a href="story?ids=<?php echo base64_url_encode($row['id']); ?>" class="btn btn-default btn-lg" style="background-color:#4e2623; color: #fff; font-family: ' Lora', serif;">Learn More</a>

			
				<?php }
			}

			


			 ?>
		</section><br/>

	</div>
<div class="col-md-4 col-xs-12">
	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MebhiNeta_Poster -->
<ins class="adsbygoogle"
     style="display:block; width:300px; height:600px"
     data-ad-client="ca-pub-8376214708896218"
     data-ad-slot="3255434099"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>		</div>
</div>
</div>
<! Click to top javascript start here!>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up" id="arrow"></button>
    </span></button>
    <script src="js/clicktotop.js"></script>
<!Java script end here!>


<!Side social bar start from here!>

	<div class="float-sm">
	
	  <div class="fl-fl float-fb">
		<i class="fa fa-facebook" style="font-size:18px;"></i>
		<a href="https://www.facebook.com/mebhineta/" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">Facebook</span></a>
	  </div>
	  
	  <div class="fl-fl float-tw">
		<i class="fa fa-twitter" style="font-size:18px;"></i>
		<a href="https://twitter.com/mebhi_neta" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">Twitter</span></a>
	  </div>
	  
	  <div class="fl-fl float-gp">
		<i class="fa fa-google-plus" style="font-size:18px;"></i>
		<a href="https://plus.google.com/u/0/114476594670091453759" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">Google+</span></a>
	  </div>
	  
	  <div class="fl-fl float-yt">
		<i class="fa fa-youtube" style="font-size:18px;"></i>
		<a href="https://www.youtube.com/channel/UCRaBEBCZjyVAOTszZ8X5xTQ" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">YouTube</span></a>
	  </div>
	  
	  <div class="fl-fl float-ig">
		<i class="fa fa-instagram" style="font-size:18px;"></i>
		<a href="https://www.instagram.com/me_bhi_neta/" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">Instagram</span></a>
	  </div>
	  
	  <div class="fl-fl float-lk">
		<i class="fa fa-linkedin" style="font-size:15px;"></i>
		<a href="https://www.linkedin.com/in/me-bhi-neta" target="_blank"><span style="font-size:15px; font-family: 'Lora', serif;">Linkedin</span></a>
	  </div>
	  
	</div>


<!Social bar end!>


<!-- Footer -->

  <?php include("include/footer.php") ?>

<!-- Footer End -->


</body>
</html>