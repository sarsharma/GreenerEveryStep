<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />

</head>

<body background="images/highres/bright-countryside-dawn-daylight-302804.jpg">
    <nav>
        <div id="header">
            <script>
                $(function() {
                    $('#header').load('reusenavbar.php');

                });
            </script>

        </div>
    </nav>
    
    <div class="container rounded shadow-lg" style="background-color: #ffffff">
        <section class="mb-4">


            <h2 class="h1-responsive  text-center my-4">Contact us</h2>

            <p class="text-left w-responsive mx-auto mb-3">Do you have any questions or suggestions for us? Feel free to
                contact us
                using this form</p>

            <div class="row">


                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="php/contactus.php" method="POST">


                        <div class="row my-2">


                            <div class="col-md-6">
                                <div class="md-form mb-0 ">
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="Your Name">

                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" required placeholder="Your Email">

                                </div>
                            </div>


                        </div>



                        <div class="row my-2">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" required placeholder="Subject">

                                </div>
                            </div>
                        </div>



                        <div class="row">


                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea>

                                </div>

                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary my-2" value="Send">


                    </form>



                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">


                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p></p>
                            </li>
                        </ul>
                    </div>


                </div>

        </section>

    </div>

</body>

</html>