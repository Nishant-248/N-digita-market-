document.getElementById("appointForm").addEventListener("submit",function(e){

e.preventDefault();

let formData = new FormData(this);

fetch("book.php",{
method:"POST",
body:formData
})

.then(res=>res.text())
.then(data=>{

let popup = document.getElementById("popup");

popup.style.display="block";

popup.innerText=data;

if(data.includes("Success")){

popup.className="success";

}else{

popup.className="error";

}

setTimeout(()=>{
popup.style.display="none";
},4000);

});

});