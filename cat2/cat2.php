<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>

    <!--STLYESHEET-->
    <link rel="stylesheet" href="style1.css">

    <!--ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!--MATERIAL ICONS CDN-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

</head>

<body>
    <section class="landing">
        <div class="over">
            <div class="cointainer">
                <div class="background">
                    <h1>Travel</h1>
                    <p>Roam around the world admiring the beauty of nature, virtually!</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="add" id="add">
        <div class="over">
            <div class="cointainer">
                <div class="vidform">
                    <div class="formt">
                        <h1 class="btn btn-primary">Add a Video here!</h1>
                    </div>
                    <div class="addform">
                        <form action="add.php" method="POST">
                            <!--ACTION AND POST Methods to be done-->
                            <input type="Title" name="name" placeholder="name" required>
                            <input type="url" name="url" placeholder="url" required>
                            <input type="submit" name="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="cointainer">

        <!--PHP GET VIDEOS-->
        <?php
				$conn = new mysqli('localhost', 'root','','vidbook');
					
				$q = "SELECT * FROM travel";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) 
                { 

					$name = $row['name'];
                    $url = $row['url'];
		?>
        <!--Video format-->
            <div class="videos">
                <iframe src="<?php echo str_replace("watch?v=","embed/",$url);?>" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" list="user_uploads"
                    allowfullscreen></iframe>
                <h3><?php echo $name;?> </h3> 
            </div>

        <!--While loop close-->
        <?php
                }
        ?>
        </div>
    </section>

    <script src="main1.js"></script>
    <!--END OF SCRIPT TAGS-->

</body>

</html>