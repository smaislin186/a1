<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">    
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto+Slab:300" rel="stylesheet">
    <!-- Local style sheet -->
    <link rel="stylesheet" href="/static/style.css"/> 
    
    <title>Asignement A1</title>
	<meta charset='utf-8'>
</head>
<body>
    <div class="container-fluid">
        <h1>Samantha A. Maislin</h1>
        <h2>About Me</h2>
        <p>
            <img src="/images/Pats.jpg" alt="Samantha Maislin picture" class="photo">

             <div class="text">I am a Product Manager/Product Owner for a financial software company. We make and sell software for
                financial institutions to help them project income and meet regulatory requirements. I have always been interested in Computer
                Science since I took a year's worth of Java in college (over 10 years ago). At my company, I have the unique experience to work directly
                with the developers and even am able to debug parts of the code! We are looking to move from a .Net Desktop application to 
                the web, so I am interested in learning more about how it all works. Who knows, maybe I will code up a few screens as a POC! 
                On a personal note, I was born and raised in Burbank, California. From infancy, I was brainwashed by
                my father, who grew up in the Bronx, to root for the Yankees. However, he was inneffective of making me like the Giants, GO PATS!
                I love In-n-Out and am engaged to the most awesomest man ever. We are planning our wedding and counting down the days till September 
                23rd! Oh and I can't forget our two cats.  They're the best, too.
            </div>
        <p>
        <p>
            <h3>Words of Wisdom</h3>       
            <div class="quotes">
                <blockquote>
                    <?php  
                        $quotes = [
                            ["I have not failed, I have only found 10,000 ways that won't work.","Thomas Edison"]
                            ,["A ship in port is safe, but that is not what ships are for. Sail out to sea and do new things.","Rear Admiral Grace Hopper"]
                            ,["I think it's very important to get more women into computing.  My slogan is: Computing is too important to be left to men.", "Karen Sparck Jones"]
                        ];
                        
                        $key = rand(0,2);
                        echo $quotes[$key][0];
                    ?>
                    <footer>
                        <?php echo $quotes[$key][1]; ?>
                    </footer>
                </blockquote>
            </div>  
        </p>                  
    </div>
</body>
</html>