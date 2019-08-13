<?php include("a_config.php"); ?>

<?php include("curl.php");
$get_data = callAPI('GET', 'http://www.omdbapi.com/?s=green&apikey=fdda027d');
$response = json_decode($get_data, true);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Green Titles</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" />
</head>

<body>

    <!-- the content -->
    <main>
        <!-- hero content -->
        <section class="hero">
            <!-- content for the hero -->
            <div class="hero__content">
                <h1 class="hero__title">Klyp OMDb API</h1>
                <p class="hero__subtitle">Search Film by Colour</p>

                <!-- Include button navigation -->
                <?php include("buttons.php"); ?>
            </div>
        </section>

        <!-- features section -->
        <article class="features">
            <div class="features__header">
                <h2>Results</h2>
            </div>

            <table>
                <?php
                foreach ($response['Search'] as $row) {
                    ?>
                <tr>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Year']; ?></td>
                    <td><img class="poster" src="<?php echo $row['Poster']; ?>" /></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </article>

    </main>

    </main>

    <!-- the footer -->
    <footer>
        <span>Kyle Tristan Dela Cruz<br /></span>
    </footer>
</body>

</html>