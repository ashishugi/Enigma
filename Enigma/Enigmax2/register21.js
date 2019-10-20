i=0;
function clicked(x){   
   if(document.getElementById(x).checked == true){
       i++;
       if(i>4){
           alert("cannot take part in more than 4 events");
           i--;
        document.getElementById(x).checked = false;
            
       }
      
   }
   else if(document.getElementById(x).checked == false){
    i--; 
   }
  
   
}


