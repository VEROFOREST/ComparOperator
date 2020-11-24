<?php

class OperatorsManager extends Manager
{

  // Get 
  public function rawsOperators()
  {
    
    $request = $this->getDb()->prepare("SELECT
                                     `id`,
                                     `name`
                                     FROM
                                    `tour_operators`");
    $request->execute();

     $rawOperatorIds = $request->fetchAll(PDO::FETCH_ASSOC);
   
    $allOperatorIds = [];
   
    foreach($rawOperatorIds as $rawOperatorId){

       array_push ($allOperatorIds,new TourOperator($rawOperatorId));
          
    }
    return $allOperatorIds;
  }

    public function getStandardOperators()
  {
    
    $request = $this->getDb()->prepare("SELECT
                                     `id`,
                                     `name`,
                                     `is_premium`
                                     FROM
                                    `tour_operators`
                                    WHERE is_premium = 0");
    $request->execute();

     $rawOperatorNames = $request->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>". var_export($rawOperatorNames, true) . "</pre>"; 
    $standardOperators = [];
   
    foreach( $rawOperatorNames as  $rawOperatorName){

       array_push ($standardOperators,new TourOperator($rawOperatorName));
      //  echo "<pre>". var_export($standardOperators, true) . "</pre>";   
    }
    return $standardOperators;
  }
  
  // crud

  public function addOperator($tourOperator)
  {
   
    $request = $this->getDb()->prepare('INSERT INTO tour_operators(name, grade, link, logo, is_premium) VALUES(:name,:grade,:link,:logo,:is_premium)');
    $request->bindValue(':name', $tourOperator->getName());
    $request->bindValue(':grade', $tourOperator->getGrade());
    $request->bindValue(':link', $tourOperator->getLink());
    $request->bindValue(':logo', $tourOperator->getLogo());
    $request->bindValue(':is_premium', $tourOperator->getIs_premium());
    $request->execute();
    
   }
  
  public function updateToPremium ($newPremiumOperator)
  {
    $request = $this->getDb()->prepare("UPDATE tour_operators SET is_premium = :is_premium WHERE name = :name");
     $request->bindValue(':name', $newPremiumOperator->getName());
    $request->bindValue(':is_premium', $newPremiumOperator->getIs_premium());
    $request->execute();
  }

}