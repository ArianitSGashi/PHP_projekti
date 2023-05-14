<!DOCTYPE html>
<html>
    <head>
        <title>Student Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" href="Trajnimet.css">
        <link rel="stylesheet" type="text/css" href="stylefooter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
        #bgimage {
  background-image: url('Fotot/figura5.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;

}

.search-warp {
background: #d82a4e;
padding-top: 60px;
padding-bottom: 50px;
width: 90%;
height: 40%;
margin-top: 150px;
margin-bottom: 50px;
}
        

.search-warp .section-title {
	margin-bottom: 30px;
}

.course-search-form {
    background: #fff;
    padding: 44px 38px;
    display: flex;
    align-items: center;
}

.course-search-form .input-wrap {
    display: flex;
    flex: 1;
}

.course-search-form input[type=text],
.course-search-form input[type=email] {
    height: 56px;
    flex: 1;
    padding: 0 30px;
    margin-right: 15px;
    margin-left: 15px;
    border: none;
    font-size: 14px;
    background: #edf4f6;

}

.course-search-form .site-btn {
    min-width: 198px;
    padding: 16px 10px;
    margin-right: 15px;
}

.search-section.ss-other-page {
	margin-top: 85px;

}

.search-section.ss-other-page .search-warp {
	position: relative;
	padding: 60px 0;
}

.search-section.ss-other-page .section-title {
	margin-bottom: 0;
}

.search-section.ss-other-page .section-title h2 {
	position: absolute;
	width: 100%;
	left: 0;
	bottom: 100%;
	font-size: 24px;
	margin-bottom: 0;
	text-align: center;
}

.search-section.ss-other-page .section-title h2 span {
	display: inline-block;
	background: #d82a4e;
	padding: 20px 60px 10px;
}

.search-section.ss-other-page .course-search-form {
	background-color: transparent;
	padding: 0;
}

.search-section.ss-other-page .course-search-form input[type=text]:focus,
.search-section.ss-other-page .course-search-form input[type=email]:focus {
	border-bottom: none;
}

        </style>
    </head>

    <body>

        <div>
        <header class="header" style="background-color:#df2d45; background-attachment: fixed;">
            <div id="container">
                <img src="Fotot/Logo.png" alt="logo" width="90px" height="90px">   
                <p style="margin-left:10px;" class="texti1">Student Dashboard</p>
            </div>
            <form class="search-form" action="#"> 
                <input type="text" placeholder="Search.." name="search"> 
                <button>Search</button>
            </form>
        </header>
        </div>

        <div id="bgimage">
               
        <div class="menu"> 
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="trajnimetEMbajtura.php">My trainings</a></li>
              <li><a href="">Materials</a>
              <li><a href="">Sign out</a></li>
            </ul>
        </div>
        

        <section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2><span>Search your course</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<!-- search form -->
						<form class="course-search-form">
							<input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Trainer">
							<button class="site-btn btn-dark">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
        </div>
    
    </body>
</html>