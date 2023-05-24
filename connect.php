<?php



    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $BirthDate=$_POST['BirthDate'];
    $star=$_POST['star'];
    $genre=$_POST['genre'];
    $source1=$_POST['source1'];
    $source2=$_POST['source2'];
    $source3=$_POST['source3'];
    $content=$_POST['content'];
    $feedback=$_POST['feedback'];


    //database connection
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registration(name,surname,email,
        BirthDate,star,genre,source1,source2,source3,content,
        feedback)
        values(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssiiiiiiii",$name,$surname,$email
        ,$BirthDate,$star,$genre,$source1,$source2,$source3
        ,$content,$feedback);
        $stmt->execute();
        echo "registration succesfully";
        $stmt->close();
        $conn->close();

}
    
?>
