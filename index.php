<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/static/style.css"/> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">     
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>   


    <title>Asignement A1</title>
	<meta charset='utf-8'>

</head>
<body>
    <div class="container-fluid">
        <h1>Samantha A. Maislin</h1>
    
        <img src="/tbd.jpg" alt="Samantha Maislin picture">
        
        <h2>About Me</h2>
        <p>Some text about me.</p>
        
        <h2>Words of Wisdom</h2>
        <?php  
        $quotes = [
             "I have not failed, I have found 10,000 ways that won't work. -Thomas Edison"
            ,"A ship in port is safe, but that is not what ships are for. Sail out to sea and do new things. - Rear Admiral Grace Hopper"
            ,"I think it's very important to get more women into computing.  My slogan is: Computing is too important to be left to men. - Karen Sparck Jones"
        ];
        
        $key = rand(0,2);
        echo "<blockquote><p>".$quotes[$key]."</p>";
        ?>
        <footer>Person</footer>
        </blockquote>
    </div>
    
	
</body>
</html>