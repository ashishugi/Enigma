i=0;
function clicked(x){
 console.log(x); console.log(i);    
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


function submit1(x){
  
    if(i<1){
        alert("select atleast one event");
        window.location.href = "regiter.html";
    }
    else{
        document.getElementById(x).submit(); 
    }
}