 <?php
    if($current_page == "«"){
      if($previous_page != 1)
      {
        $arrayOrders=[];
        $arrayOrders['start_page']=$previous_page-5;
        $arrayOrders['end_page']=$previous_page-1;
        $arrayOrders['current_page']=$current_page;
        $current_page=$previous_page-1;
        if($previous_page == 6){
          $arrayOrders['first']=true;
        }
      }
      else
      {
        $arrayOrders['first']=true;
      }
    }
    elseif ($current_page == "»"){ 
      if($total_page == $next_page){
        $arrayOrders['last']=true;
      }

      elseif($total_page <= $next_page+5){
        $arrayOrders=[];
        $arrayOrders['start_page']=$next_page+1;
        $arrayOrders['end_page']=$total_page;
        $arrayOrders['current_page']=$current_page;
        $current_page=$next_page+1;
        $arrayOrders['last']=true;
      }
      else{
        $arrayOrders=[];
        $arrayOrders['start_page']=$next_page+1;
        $arrayOrders['end_page']=$next_page+5;
        $arrayOrders['current_page']=$current_page;
        $current_page=$next_page+1;
      }

    }
    else{
      $arrayOrders=[];
      $arrayOrders['start_page']=1;
      $arrayOrders['end_page']=($total_page<5)?$total_page:5;
      $arrayOrders['current_page']=$current_page;
      $arrayOrders['first']=true;
      if($total_page <= 5){
        $arrayOrders['last']=true;
        $arrayOrders['first']=true;
      }
      elseif($next_page > 5 || $next_page == "«"){
        $arrayOrders['first']=false;
      }
    }
    $arrayOrders['total_records']= $total_records;
    $arrayOrders['limit']= $limit; 