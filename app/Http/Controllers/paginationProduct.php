 <?php
 if($current_page == "«"){
    if($previous_page != 1)
    {
      $arrayProducts=[];
      $arrayProducts['start_page']=$previous_page-5;
      $arrayProducts['end_page']=$previous_page-1;
      $arrayProducts['current_page']=$current_page;
      $current_page=$previous_page-1;
      if($previous_page == 6){
        $arrayProducts['first']=true;
      }
    }
    else
    {
      $arrayProducts['first']=true;
    }
  }
  elseif ($current_page == "»"){ 
      if($total_page <= $next_page+5){
        $arrayProducts=[];
        $arrayProducts['start_page']=$next_page+1;
        $arrayProducts['end_page']=$total_page;
        $arrayProducts['current_page']=$current_page;
        $current_page=$next_page+1;
        $arrayProducts['last']=true;
      }
      else{
        $arrayProducts=[];
        $arrayProducts['start_page']=$next_page+1;
        $arrayProducts['end_page']=$next_page+5;
        $arrayProducts['current_page']=$current_page;
        $current_page=$next_page+1;
      }

  }
  else{
    $arrayProducts=[];
    $arrayProducts['start_page']=1;
    $arrayProducts['end_page']=($total_page<5) ? $total_page : 5;
    $arrayProducts['current_page']=$current_page;
    $arrayProducts['first']=true;
    if($total_page <= 5){
      $arrayProducts['last']=true;
      $arrayProducts['first']=true;
    }
    elseif($next_page > 5 || $next_page == "«"){
      $arrayProducts['first']=false;
    }
  }
  $arrayProducts['total_records']= $total_records;
  $arrayProducts['limit']= $limit; 