<?php
  $servername="localhost";
  $username="root"; 
  $password="";
  $database_name="3-1 semester project";
  
  $conn =mysqli_connect($servername, $username, $password, $database_name); 
  
  if(!$conn)
  
  {
    header("Location: Semester_project.php");
  }
  else{
    die("Connection failed:" .mysqli_connect_error());
  }
  if(isset($_POST['reg_user']))
  {
  $name = $POST['name']; 
  $email= $_POST['email']; 
  $sql_query ="INSERT INTO user_data (name,email) VALUES ('$name','$email')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "Connection is successful";
    }
    else
    {
        echo "Error: " .$sql ."". mysqli_error($conn);

    } 
    mysqli_close($conn);
    
    $conn->close();
}
  ?>
    <!DOCTYPE html>
    <html style="font-size: 16px;">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>Home</title>
        <link rel="stylesheet" href="nicepage.css" media="screen">
        <link rel="stylesheet" href="Home.css" media="screen">
        <!-- <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script> -->
        <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "",
                "logo": "images/2022-01-012.png"
            }
        </script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Home">
        <meta property="og:type" content="website">
    </head>

    <body class="u-body">
        <header class="u-clearfix u-header u-header" id="sec-1763">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="877" data-image-height="626">
                    <img src="images/2022-01-012.png" class="u-logo-image u-logo-image-1">
                </a>
                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                            <svg viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
                        </a>
                    </div>
                    <div class="u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Page-2.html" style="padding: 10px 20px;">Home</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-2.html">Home</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="u-clearfix u-palette-4-base u-section-1" id="carousel_ae94">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                        <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
                            <label for="email-319a" name="email" class="u-label u-label-1">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                        </div>
                        <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                            <label for="name-319a" name="name" class="u-label u-label-2">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                        </div>
                        <div class="u-align-left u-form-group u-form-submit u-form-group-3">
                            <a href="Page-2.html" class="u-btn u-btn-submit u-button-style u-white u-btn-1">Submit</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                </div>
                <img class="u-image u-image-default u-image-1" src="images/4.png" alt="" data-image-width="693" data-image-height="430">
            </div>
        </section>


        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5828">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">An E-billing and E-MB office working under Indian Government</p>
            </div>
        </footer>
    </body>

    </html>