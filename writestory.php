<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

<body>
   <nav>
    <div id="header">
        <script>
                $(function(){
                    $('#header').load('reusenavbar.php');

                });
            </script>
  
        </div>
    </nav>

    <section class="my-2">
        <div class="py-2">
            <h3 class="text-center">Write your own stories!</h3>
        </div>
        </section>

    <form action="php/submitstory.php" method="post">
    <pre>
    Title <input type="text" name="storytitle" maxlength="30">
    Content 
    <textarea name="content"></textarea>
    <button>Submit</button>
    </pre>
    </form>

    </pre>
    </form>

</body>
</html>

    