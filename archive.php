<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BRACU Online Judge</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="image/BOJ.png">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<style>
    body {
        background-color: white;
    }

    h1 {
        font-family: 'Source Code Pro';
    }
</style>


<body>
<div class="topbar">
        <div class="topnav-right">
            <a href="logout.php" float:left><i class="fa fa-power-off"></i></a>
            <a href="" float:left>BRACU ONLINE JUDGE (BOJ)</a>
        </div>
        <a href="compiler.php"><i class="fa fa-terminal"></i> Compiler</a>
        <a href="archive.php"><i class="fa fa-puzzle-piece"></i> Archive</a>
        <a href="submit.php"><i class="fa fa-arrow-right"></i> Submit</a>
        <a href="rank.php"><i class="fa fa-trophy"></i> Rank</a>
    </div>
    <br><br>
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <h1 class="display-6 text-center">Problem Archive</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div class=container>
                    <div class="col-sm-6 offset-9">

                        <form class="form-inline" method="get" action="search.php">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only">Search by Problem ID</label>
                                <input type="text" class="form-control" name="searchFor" placeholder="Search by Problem ID">
                            </div>
                            <button type="submit" class="btn btn-dark mb-2">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <table id="tabledata" class=" table table-striped table-dark">

            <tr class="text-center">
                <th> # </th>
                <th> Name </th>
                <th> Difficulty </th>
                <th> </th>
            </tr>


            <?php
            $q = "select question_id , problem_name , difficulty from archive ORDER by difficulty";
            //ORDER BY solved DESC
            $show = mysqli_query($connection, $q);
            while ($res = mysqli_fetch_array($show)) {
                ?>
                <tr class="text-center">

                    <td>
                        <?php echo $res['question_id'];  ?>
                    </td>
                    <td>
                        <?php echo $res['problem_name'];  ?>
                    </td>
                    <td>
                        <?php echo $res['difficulty'];  ?>
                    </td>
                    <td> <button class="btn-warning btn"> <a href="view.php?id=<?php echo $res['question_id']; ?>" class="text-dark">
                                View </a> </button> </td>

                </tr>

            <?php
            }
            ?>

        </table>

    </div>
    </div>


    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </div>
    <br><br><br>
    <div class="area">
        <div class="well foot">
            <div class="row area">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-5">
                    <div class="fm">
                        BETA VERSION<bR>
                        © 2019 BRACU Online Judge (BOJ)<br>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php
    ?>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabledata').DataTable();
        })
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>