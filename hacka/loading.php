<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nymi Health</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" background="blurcity.jpg">
    <script type="text/javascript">
        var browser = new WebBrowser()
browser.AllowNavigation = true;
browser.Navigate("http://localhost:3000/");

browser.DocumentCompleted += new webBrowserDocumentCompletedEventHandler(wb_DocumentCompleted);
while (browser.ReadyState != WebBrowserReadyState.Complete)
{
  Application.DoEvents();
  Thread.Sleep(10);
}

String altitudeValue = browser.Document.InvokeScript("document.getElementsByTagName('body')[0].textContent;").ToString();
        console.log(altitudeValue);
    </script>
    <!-- Intro Header -->
    <header class="intro" background="blurcity.jpg">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="loading.gif" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
