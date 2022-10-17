<?php  
    require_once('nav.php');  
    session_start();
    require_once('./testQuery.php');
    require_once('../Database/Connection.php');

    $phone = $_SESSION['phone'] ?? "0000";
    $email = $_SESSION['email'] ?? "session email";
    $userName = $_SESSION['name'] ?? "session Name";
    
    if( isset($_POST['submit'])){
        echo $_POST['review'];
        $review = $_POST['review'];
        $date = date('Y-m-d H:i:s');
        $query = new TestQuery(Connection::make());
        $query->insertReview("reviews",[$userName,$phone,$email,$review,$date]);
    }

?>

<body class=" bg-gray-100 ">
   <div class="flex flex-col justify-center p-28">
        <div class=" mb-10 font-semibold text-xl ">
            <pre>Name : <?php echo $userName ?></pre>
            <pre>Email : <?php echo $email ?></pre>
        </div>

        <div class="w-1/2 px-5">
            <form action="customerRivew.php" method="post" enctype="multipart/form-data">
                <textarea  
                    placeholder="review..."
                    name="review"
                    cols="60" rows="10"    
                >  
                </textarea>
                <input class="  my-3 block rounded-md w-full  text-white bg-green-400 py-2 border border-gray-400" type="submit" value="upload" name="submit">

            </form>
        </div>


   </div> 


</body>
</html>