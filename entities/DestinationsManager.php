<?php

class DestinationsManager extends Manager
{
  // crud
     public function addDestination($Destination)
  {
   
    $request = $this->getDb()->prepare ('INSERT INTO destinations(location, price,card_pic,  parallax_1,parallax_2,id_tour_operator) 
                                  VALUES(:location, :price,:card_pic,:parallax_1,:parallax_2,:id_tour_operator)');
    $request->bindValue(':location', $Destination->getLocation());
    $request->bindValue(':price', $Destination->getPrice());
    $request->bindValue(':card_pic', $Destination->getCard_pic());
    $request->bindValue(':parallax_1', $Destination->getParallax_1());
    $request->bindValue(':parallax_2', $Destination->getParallax_2());
    $request->bindValue(':id_tour_operator', $Destination->getId_tour_operator());
    $request->execute();
    
    
  }


  // method
  public function getDestinationsCardContent()
  {
    $destinationCards = [];
    $request = $this->getDb()->prepare('SELECT
                                    `location`,
                                    `card_pic`
                                FROM
                                    `destinations`
                                GROUP BY `location`,`card_pic`');
    $request->execute();
    // var_dump($request->fetch(PDO::FETCH_ASSOC));
    while($destinationsCardContent = $request->fetch(PDO::FETCH_ASSOC)){


     array_push($destinationCards, new Destination($destinationsCardContent)) ;
      
    };
    return $destinationCards;
    

    // $destinationsCardContent->getLocation();

  }


  public function getOperatorPageDisplayContent($location)
  {
    // $destinationInfos =[];
    
    $request = $this->getDb()->prepare("SELECT
                                      `location`, 
                                      `parallax_1`, 
                                      `parallax_2`
                                  FROM
                                      `destinations`
                                  WHERE location = :location
                                  GROUP BY `location`, `parallax_1`, 
                                      `parallax_2`");

    $request->bindValue(':location',$location, PDO::PARAM_STR);
    $request->execute();

    while($destinationDisplayInfos = $request->fetch(PDO::FETCH_ASSOC)){
      
     return new Destination ($destinationDisplayInfos);
      
    };

    
    

  }

  public function getCarouselPics(){

    $request = $this->getDb()->prepare("SELECT
                                    `parallax_1`
                                FROM
                                    `destinations`
                                GROUP BY `location`,`parallax_1`");
    $request->execute();

    $carouselPics = [];
    $rawCarouselPics = $request->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($rawCarouselPics);
   
    foreach($rawCarouselPics as $rawCarouselPic){

      array_push($carouselPics , new Destination ($rawCarouselPic));
// echo "<pre>". var_export($carouselPics, true) . "</pre>";
    }
    return $carouselPics;
     
    
    }
  }

  


