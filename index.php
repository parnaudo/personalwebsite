
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Paul Arnaudo</title> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand"></h3>
              <ul class="nav masthead-nav">
              <li><img src="images/bio.jpg" class="img-circle" alt="Circular Image"></li>
                <li class="active"><a href="#home" data-toggle="tab">Paul Arnaudo</a></li>
                <li><a href="#projects" data-toggle="tab">Projects</a></li>
               
              </ul>
            </div>
          </div>
		<div class="tab-content">
		  <div class="tab-pane fade in active" id="home">           
			   <h1 class="cover-heading">Hi There!</h1>
	            <p class="lead">My name is Paul Arnaudo and I aim to be a well rounded full stack engineer with a specialization in applicable business intelligence. I enjoy finding solutions to problems that are data driven but also easily applicable to a business environment. Feel free to contact me if you are interested in something I've worked on or are looking to collaborate on a new project.
	            </p>
 <table class="table">
 <tr><td> <a href="https://www.twitter.com/paularnaudo">Twitter</a></td>
 <td><a href="https://github.com/parnaudo">Github</a></td>                    
 <td><a href="https://www.linkedin.com/in/paul-arnaudo/">LinkedIn</a></td>
 </table>
	      </div>
		  <div class="tab-pane fade" id="projects">
		      <table class="table">
		        <tbody>  
		            <tr>
		                <td><a href="https://github.com/parnaudo/spreadsheet">Spreadsheet MSSQL updater</a></td>
		                <td>Created a spreadsheet web app for a client as an easy way to update a MS SQL table through an easy web interface that resembled a spreadsheet. </td>		
		            </tr>
		            <tr>
		                <td><a href="https://github.com/parnaudo/mobile_translations">Automated Translations</a></td>
		                <td>Scripts for automatically uploading/downloading string sheets to Smartling API</td>
		            </tr>
		            <tr>
		                <td><a href="https://github.com/parnaudo/Datamining">Physician Network Analysis</a></td>
		                <td>This project utilized publically available APIs along with proprietary data to create weighted, directed graphs of physician networks. 
		                Networks were then analyzed using different centrality networks to select physicians for optimal marketing targeting. <a href='images/PhysicianNetworkAnalysis.pdf'> Read the full paper</a>. </td>		
		            </tr>
		            <tr>
		                <td><a href="images/TextClassification.pdf">Automated Text Classification</a></td>
		                <td>Utilized artificial neural network DAN2 to classify Reuters articles.</td>	
		            </tr>
		            <tr>
		                <td><a href="http://webpages.scu.edu/broncobikes/">Bronco Bikes</a></td>
		                <td>Started a bike rental program on campus @ Santa Clara University. Designed rental checkin/checkout system along with maitenence logger. Program no longer runs but first tast into starting a business. </td>		
		            </tr>
		           
		        </tbody>
		    </table>
		 </div>
		  <div class="tab-pane" id="contact">contact text</div>
		</div>
          <div class="inner cover">

          </div>

          <div class="mastfoot">
          </div>

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		  $(function () {
		    $('#myTab a:last').tab('show');
		  })
	</script>
  </body>
</html>
