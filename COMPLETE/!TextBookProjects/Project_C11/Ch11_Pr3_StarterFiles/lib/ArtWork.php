<?php 

    class ArtWork {
        public function getArtworkByArtistID {
                $db = DatabaseHelper::getConnection(DB_CONN, DB_USER, DB_PASS);
                $id = 1;
                $sql = "SELECT ArtworkID, artworks.ArtistID as ArtistID, FirstName, 
                    LastName, Nationality, YearOfBirth, YearOfDeath, Details, 
                    ArtistLink, ImageFileName, Title, Description, Excerpt, 
                    YearOfWork, Width, Height, Medium, Original Home, GalleryID, 
                    Cost from artists INNER JOIN artworks ON artists.ArtistID 
                    WHERE artworks.ArtistID = ?";
                $result = $db->prepare($sql);
                $result->bindValue(1, $id);
                if($result->execute()){
                    $resultResultsArray=$result->fetchAll();
                    if(count($returnedResultsArray > 0)){
                        return $returnResultsArray;
                    } else {
                        return null;
                    }
                } else {
                    echo "Error";
            }
        }
    }
?>