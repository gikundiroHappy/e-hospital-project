function register(){
   var name=document.getElementById("name").value
   var dob=document.getElementById("dob").value
   var phone_number=document.getElementById("phone-number").value
   var age=document.getElementById("age").value
   if(name=="" || name == null){
       alert("Name is required")
    }else{
       alert(name+" "+dob+" "+phone_number+" "+age)

   }
}