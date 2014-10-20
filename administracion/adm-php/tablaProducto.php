<?php

function TablaProductos($theads , $tbodys, $onclick,$id)
{  
   $cantCol=0;
    $cantIns=0;
    
    $str = '<div class="table-responsive"> ';
        $str .= '<table class="table table-striped table-fixed-header" id="'.$id.'">';//  table table-bordered table-fixed-header
            $str.= ' <thead class="header">';

            //lleno thead
            $resultado = count($theads);
             $bool = true;
            foreach($theads as $thead)
            {              
                if($bool)
                {
                    $str.= '<tr>';
                  $bool = false;
                }
                $str.='<th>'.$thead.'</th>';
                $cantCol++;
                if($cantCol == $resultado)
                {
                    $str.='</tr>';
                }
                
            }
            $str.='</thead>';

            //lleno tbody
            $str.='<tbody>';
            foreach ($tbodys as $tbody) {          
                if($cantIns==0)
                {
                    $cantIns++;
                    $str.='<tr onclick="'.$onclick.'" >';      
                    $str.='<td>'.$tbody.'</td>'; 
                                      
                 }elseif( $cantIns != $cantCol && $cantIns <= $cantCol)
                    {
                       $cantIns++;
                       $str.='<td>'.$tbody.'</td>'; 
                           if($cantIns == $cantCol)
                           {
                                $str.='</tr>';  
                                $cantIns = 0;
                           }
                    }                       
            }
            $str.='</tbody>';
        $str.='</table>';
    $str.='</div>';
    //echo ($str);
return  $str;
}