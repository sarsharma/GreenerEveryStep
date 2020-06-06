<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>

    <nav>
        <div id="header">
            <script>
                $(function() {
                    $('#header').load('reusenavbar.php');

                });
            </script>

        </div>
    </nav>

    <div class="container">

        <?php
        session_start();
        require_once "php/config.php";
        mysqli_select_db($con, DB_NAME);
        #$reader_userid = $_SESSION["id"];


        //find story count
        $query = "select count(*) as cnt from stories";
        $result = $con->query($query);
        $row = mysqli_fetch_assoc($result);
        $total_rows = $row['cnt'];


        $stories_per_page = 2;



        $query = "select * from stories order by time desc";
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $username_query = "select username from users where id=" . $row["userid"];
                $query_result = mysqli_query($con, $username_query);

                while ($res = mysqli_fetch_row($query_result)) {
                    $username = $res[0];
                }

                #echo "Story by: " . $username .  "Title " . $row["title"] .  "Content" . $row["content"] . "time " . $row["time"] . "<br>";



        ?>
                <div class="shadow rounded border my-5">
                    <H3 class="text-center mt-3 mb-2"><?php echo $row['title']; ?></H3>
                    <p class="px-3">By <?php echo $username; ?> </p>
                    
                    <p class="px-3"><?php echo $row['time']; ?></p>
                    <div class="justify-content-center text-center">
                        <img src="imageview.php?time=<?php echo $row["time"]; ?> " height="300" />
                    </div>

                    <p class="mx-1 py-4 px-3"><?php echo $row['content']; ?></p>

                </div>

        <?php
            }
        }
        mysqli_close($con);
        ?>

    </div>


    <!--

        echo '<div class="caption"><h3><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'. $row['userid']. '</h3></div>';

        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/> width="100" height="100"';
        header("Content-type: image/jpeg");
echo $row['image'];




         <header class="masthead" style="background-image: url('images/introslides/image3.jpeg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Greener Every Step</h1>
                        <span class="subheading">Read stories submitted by our awesome members</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     
    <div class="container">
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">
               Ipra Mekola
            </h2>
            <h3 class="post-subtitle">
                Head of Mekola clan from the Idu Mishmi tribe in Arunachal Pradesh, Ipra Mekola has spent over two decades conserving 
                wildlife, but that is not what makes him a true environmental hero. Ipra managed to not just raise awareness amidst his 
                clan members but also involved them in his conservational pursuits, so much so that together they’d flagged off a 
                movement to declare their land a ‘community conserved area’.

                In addition to that, the dedicated eco-warrior has helped rescue and rehabilitate many endangered species, including 
                the Hoolock Gibbon and the Bengal Florican as well as two tiger cubs after their mother was killed.

                “What is the point of all the development if it comes at the cost of clearing forests and driving wildlife species into 
                extinction? Throughout my long drawn fight for environmental conservation, I’d trudged through many setbacks and 
                disappointments—some even from the government level. But even then, what kept me going was this one thought—if I don’t 
                do it, who else will? And no matter how tough the going gets, I will continue to persist for the cause I’ve dedicated my 
                life to. What I ultimately hope is that more people are inspired to step up and fight for the environment before it’s too 
                late. Where to begin from—your own locale.”
            </h3>
        </a>
        <p class="post-meta">Posted by
            <a href="#">User1</a>
            on January 20, 2020</p>
    </div>
    <hr>
                <hr>
                
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Kalpana Ramesh
                        </h2>
                        <h3 class="post-subtitle">
                            Growing up in Bengaluru, the possibility of water shortage was something that seemed implausible to Kalpana 
                            Ramesh. But when she moved to Hyderabad with her family, the different reality in the parched city was quite
                            disconcerting.
                            This led her to start a change by herself. She began with rainwater harvesting and greywater recycling in 
                            her home. Having personally impacted by this move, she was then motivated to take forward her water 
                            conservation endeavours to the public. So far, she successfully managed to get about 200 families to adopt 
                            rainwater-harvesting methods. Today, she is working with different communities in the city for the resuscitation 
                            of lakes and surface water bodies. 
                            “Harvesting rainwater is no rocket science. All it takes for an individual to propel change is the will to do
                            it. It won’t be long before we exhaust all available sources of water supply—what will we do then? All the exorbitant
                            medical bills that we pay year after year can be singly addressed if we take some time to understand why are we 
                            falling sick. It is the consequences of our actions that are destroying the environment and as a result, our health. 
                            It is never too late to fuel change and if we all stand together in this, we can undo this damage.”
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">User3</a>
                        on January 20, 2020</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Dnyaneshwar Bodke
                        </h2>
                        <h3 class="post-subtitle">
                            Through the ‘Abhinav Farmers Club’, Dnyaneshwar Bodke kicked off a farming revolution in 2004 that changed 
                            lives of over 1,00,000 farmers across the country. The initial agenda was to free farmers from the clutches 
                            of middleman and help them make better profits. But since Dnyaneshwar’s idea has taken the conservation 
                            route. The farmer group soon swore to practice only organic farming. “While the switch to organic farming 
                            has helped farmers, what most of us remain unaware is how impactful these practices have been for the 
                            environment. On the one hand, we have been able to produce better crops that are naturally fragrant and good
                            for health. On the other hand, we have seen visible soil rejuvenation. I believe that there is an impending 
                            need for awareness of organic farming and we should begin with schools, where children are at an impressionable 
                            age. Would you believe if I said that the trees and plants we nurture here smile?”
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">User2</a>
                        on January 20, 2020</p>
                </div>
                <hr>
                
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>




</body>

</html>
            -->