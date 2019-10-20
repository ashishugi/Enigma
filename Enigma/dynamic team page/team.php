<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
    <link rel="team.css" type="text/css"/>
    <title>Document</title>
    <style>
        body{
            margin:0;
            background-image: linear-gradient( to right,#6d150a,#07085e);


        }
        .main{
            height: 80%;
            margin:0px auto;
        }
        .thumb{
            width: 30%;
            float: left;
            margin: 10px;
            background: #fff;
            padding: 20px;
           
            box-sizing: border-box;
            
        }
        .thumb:hover{
            width: 30%;
            float: left;
            margin: 10px;
            background: #fff;
            padding: 5px;
            transition: 2s;
            box-sizing: border-box;
            background-image: linear-gradient( to right,#13147c,#ec331b);

        
        }
        .thumb img{
            width: 100%;
            height: auto;
        }
        

        
    </style>
</head>
<body>
    <h1 style="text-align: center; color:rgb(19, 172, 100);  font-size:50px;  font-family: 'Arbutus';"> Our Team</h1>
   <div class="container">
        <div class="row" >
                <h2 style="color: white; font-size:40px;">Core Members</h2>
                <div class="main">
                        <?php
                            $dir = glob('images/core/{*.jpg,*.png}',GLOB_BRACE);
                            foreach($dir as $values){
                                ?>
                            <div class="thumb">
                                
                                <img src="<?php echo $values ?>" alt="<?php ?>">
                            </div>
                                <?php
                            }
                        ?>
                    </div>
        
        
            </div>
            <div class="row">
                    <h2 style="color: white; font-size:40px;">Core Members</h2>
                    <div class="main">
                            <?php
                                $dir = glob('images/exe/{*.jpg,*.png}',GLOB_BRACE);
                                foreach($dir as $values){
                                    ?>
                                    
                                <div class="thumb">
                                    
                                    <img src="<?php echo $values ?>" alt="<?php ?>"  >
                                </div>
                                    <?php
                                }
                            ?>
                        </div>
            
            
                </div>
        
                <div class="row">
                        <h2 style="color: white; font-size:40px;">Core Members</h2>
                        <div class="main">
                                <?php
                                    $dir = glob('images/tech/{*.jpg,*.png}',GLOB_BRACE);
                                    foreach($dir as $values){
                                        ?>
                                    <div class="thumb">
                                        
                                        <img src="<?php echo $values ?>" alt="<?php ?>">
                                    </div>
                                        <?php
                                    }
                                ?>
                            </div>
                
                
                    </div>
                
   </div>



<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>