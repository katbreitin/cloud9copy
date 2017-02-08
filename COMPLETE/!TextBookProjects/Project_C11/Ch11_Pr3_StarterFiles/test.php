<?php  

    require_once('includes/db-config.php');
    require_once('lib/Databasehelper.php');
    require_once('lib/Artists.php');
    require_once('lib/ArtWork.php');
    
    
    $a = new Artists(); 
    $artist = $a->getArtistById(1);
    //print_r($artist);
    echo $artist[0]['FirstName'] . " " . $artist[0]['LastName'] . "<br />";
    
    $b = new Artists(); 
    $artist2 = $b->getArtistById(5);
    echo $artist2[0]['FirstName'] . " " . $artist2[0]['LastName'] . "<br />";
    
    $c = new Artists(); 
    $artist3 = $b->getArtistById(10);
    echo $artist3[0]['FirstName'] . " " . $artist3[0]['LastName'] . "<br />";
    
    // ------ArtWork----
    
    echo "Testing Artwork Class<br/>";
    $e = new ArtWork();
    $vals = $e->getArtworkByArtistId(1);
    foreach($vals as $val){
        echo $$val[0]['Title'] . "<br />";
    }
    
     echo "Testing Artwork Class<br/>";
    $e = new ArtWork();
    $vals = $f->getArtworkByArtistId(5);
    foreach($vals as $val){
        echo $$val[0]['Title'] . "<br />";
    }
    
    // $db = DatabaseHelper::getConnection(DB_CONN, DB_USER, DB_PASS);
    // $id = 1;
    // $sql = "SELECT ArtworkID, artworks.ArtistID as ArtistID, FirstName, 
    //         LastName, Nationality, YearOfBirth, YearOfDeath, Details, 
    //         ArtistLink, ImageFileName, Title, Description, Excerpt, 
    //         YearOfWork, Width, Height, Medium, Original Home, GalleryID, 
    //         Cost from artists INNER JOIN artworks ON artists.ArtistID 
    //         WHERE artworks.ArtistID = ?";
    // $result = $db->prepare($sql);
    // $result->bindValue(1, $id);
    // if($result->execute()){
    //     $resultResultsArray=$result->fetchAll();
    //     echo $returnResultsArray[0]['FirstName'];
    // } else {
    //     echo "Error";
    // }

    
  /* $db = DatabaseHelper::getConnection(DB_CONN, DB_USER, DB_PASS);
    
   $id=1;
   $sql = "SELECT * FROM artists WHERE ArtistID = ?";
   $result = $db->prepare($sql);
   $result->bindValue(1, $id);
   if($result->execute()) {
         $returnedResultsArray = $result->fetchAll();
         if(count($returnedResultsArray) > 0) { 
             echo  $returnedResultsArray[0]['FirstName'];
        } else {
       
             echo "No records found!";
        }
   } else {
       
       echo "Error";
   }
   */
        
  
//  while($row = $result->fetch(PDO::FETCH_ASSOC)){
//      echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Nationality'] . "<br />"; }  */
 
    
?>