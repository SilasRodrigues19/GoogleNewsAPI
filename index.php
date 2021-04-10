<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brazil Headlines</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://iconarchive.com/download/i81866/pelfusion/folded-flat/News.ico">

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Java Script -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	
		<?php 
			$url = 'https://newsapi.org/v2/top-headlines?country=br&apiKey=59ec39b94ae5481aa4ddb562c45bd49c';
			$response = file_get_contents($url);
			$NewsData = json_decode($response);
		?>
	
	<div class="jumbotron">
		<h1 data-aos="fade-down" data-aos-duration="3000">Brazil Headlines</h1>
		<p data-aos="fade-up" data-aos-duration="3000">Top headlines from Brazil</p>
		<img src="https://freepngimg.com/download/newspaper/6-2-newspaper-png-clipart.png" alt="News" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="3000" data-aos-delay="100">
	</div>

	<div class="container-fluid">
		<?php 
			foreach($NewsData->articles as $News)
			{
		?>	

	<div class="row News" data-aos="fade-up" data-aos-duration="3000">
		<div class="col-md-3 imgBx">
			<img src="<?php echo $News->urlToImage ?>" alt="News thumbnail">
		</div>
		<div class="col-md-9 News-info">
			<h2><strong>Título:</strong> <?php echo $News->title ?></h2>
			<h5><strong>Descrição:</strong> <?php echo $News->description ?></h5>
			<p><strong>Conteúdo:</strong> <?php echo $News->content ?></p>
			<h6><strong>Autor:</strong> <?php if($News->author != "") { echo $News->author; } else {echo "Autor não informado";}?></h6>
			<h6><strong>Data de publicação:</strong> <?php echo $News->publishedAt ?></h6>
		</div>
	</div>
		<?php		
			} 
		
		?>
	</div>
	
	<!-- Scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>
	<!-- Initialize Animations -->
	<script>
  		AOS.init();
	</script>
</body>
</html>