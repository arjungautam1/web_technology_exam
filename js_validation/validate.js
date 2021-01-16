function validateForm(){
    var x=document.getElementById("fname").value;
    if(x.length<=5){
        alert("Name must be greater than 5");
        return false;
    }
   document.write("Name is "+x);
}