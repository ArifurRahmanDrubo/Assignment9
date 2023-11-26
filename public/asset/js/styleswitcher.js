 const links=document.querySelectorAll(".alternate-style"),
       totalLinks=links.length;
 
function setActiveStyle(color){
    localStorage.setItem("color",color);
    changeColor();
}
function changeColor(){
        for(let i=0; i<totalLinks; i++){
        if(localStorage.getItem("color") === links[i].getAttribute("title")){
            links[i].removeAttribute("disabled");
        }
        else{
            links[i].setAttribute("disabled","true");
        }
    }
}
 if(localStorage.getItem("color") !== null){
     changeColor();
 }


//body-skin

const bodySkin=document.querySelectorAll(".body-skin");
    totalBodySkin=bodySkin.length;
 for(let k=0; k<totalBodySkin; k++){
      bodySkin[k].addEventListener("change", function(){
        if(this.value === "dark"){
           localStorage.setItem("theme", "dark");
             document.body.classList.add("dark");
             document.body.classList.remove("light"); 
         }
         else{
             localStorage.setItem("theme", "light");
             document.body.classList.remove("dark");
             document.body.classList.add("light");               
         } 
         
     })
    }



function themeMode(){
    if(localStorage.getItem("theme") !== null){
       if(localStorage.getItem("theme")==="light"){
          document.body.classList.remove("dark");     
       }
        else{
         document.body.classList.add("dark");
    }
    }
    
}
themeMode();

        
  












//
//
document.querySelector(".toggle-style-switcher").addEventListener("click", ()=>{
    document.querySelector(".style-swicther").classList.toggle("open");
    
})

 