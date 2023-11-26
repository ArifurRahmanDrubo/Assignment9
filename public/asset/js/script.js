 window.addEventListener("load",function(){
     document.querySelector(".preloader").classList.add("opacity-0");
      setTimeout(function(){
          document.querySelector(".preloader").style.display="none";
      },1000)
   
})


//portfolio-item-filter


const filterContainer=document.querySelector(".portfolio-fiter"),
      filterBtns=filterContainer.children,
      totalfilterBtn=filterBtns.length,
      portfolioitems=document.querySelectorAll(".portfolio-item"),
      totalportfoiloitem=portfolioitems.length;
          
      for(let i=0; i<totalfilterBtn; i++){
          filterBtns[i].addEventListener("click",function(){
              filterContainer.querySelector(".active").classList.remove("active");
              this.classList.add("active");
              const filterValue=this.getAttribute("data-filter");
              for(let k=0; k<totalportfoiloitem; k++){
                  if(filterValue == portfolioitems[k].getAttribute("data-catagory")){
                      portfolioitems[k].classList.remove("hide");
                      portfolioitems[k].classList.add("show");
                  }
                  else{
                      portfolioitems[k].classList.remove("show");
                      portfolioitems[k].classList.add("hide");
                  }
                  if(filterValue == "all"){
                     portfolioitems[k].classList.remove("hide");
                      portfolioitems[k].classList.add("show"); 
                  }
              }
          })
        
      }



//lightbox
       const lightbox=document.querySelector(".lightbox"),
             lightboxImg=lightbox.querySelector(".lightbox-img"),
             lightboxText=lightbox.querySelector(".caption-text"),
             lightboxClose=lightbox.querySelector(".lghtbox-close"),
             lightboxCounter=lightbox.querySelector(".caption-counter");
let itemIndex=0;

  for(let i=0; i<totalportfoiloitem; i++){
      portfolioitems[i].addEventListener("click",function(){
         itemIndex=i;
         changeItem();
         toggleLightbox();
      } )
  }
function nexItem(){
    if(itemIndex == totalportfoiloitem-1 ){
        itemIndex=0;
    }
    else{
       itemIndex++; 
    }
    changeItem();
}
function prevItem(){
    if(itemIndex == 0 ){
        itemIndex=totalportfoiloitem-1;
    }
    else{
       itemIndex--; 
    }
    changeItem();
}

function toggleLightbox(){
    lightbox.classList.toggle("open");
}

 function changeItem(){
     imgSrc=portfolioitems[itemIndex].querySelector(".portfolio-img img").getAttribute("src");
    lightboxImg.src=imgSrc;
     lightboxText.innerHTML=portfolioitems[itemIndex].querySelector("h4").innerHTML;
     lightboxCounter.innerHTML=(itemIndex +1) + "of" + totalportfoiloitem;
 }
     
//clos lightbox
lightbox.addEventListener("click",function(event){
    if(event.target === lightboxClose ||lightbox === event.target){
        toggleLightbox();
    }
})




//navbar
 const nav=document.querySelector(".nav"),
       navList=nav.querySelectorAll("li"),
       totalnavList=navList.length,
       allsection=document.querySelectorAll(".section"),
       totalSection=allsection.length;
  
   for(let i=0; i<totalnavList; i++){
       const a=navList[i].querySelector("a");
             a.addEventListener("click", function(){
                 removeBackSectionClass();
                 
          
                 
                 
                 
                 
          
       for(let j=0; j<totalnavList; j++){
           if(navList[j].querySelector("a").classList.contains("active")){ 
               
               addBackSectionClass(j);

            }  
             navList[j].querySelector("a").classList.remove("active");
          }
          this.classList.add("active");
           
                 showSection(this);
                 
                 if(window.innerWidth < 1200){
                     asideSectionTogglerBtn();
                 }
             })
       
   }
 function removeBackSectionClass(){
            for(let i=0; i<totalSection; i++){
            allsection[i].classList.remove("back-section");
        }
 }
  function addBackSectionClass(num){
   allsection[num].classList.add("back-section");
  }
    function showSection(element){
        for(let i=0; i<totalSection; i++){
            allsection[i].classList.remove("active");
        }
        const target=element.getAttribute("href").split("#")[1];
        
        document.querySelector("#"+target).classList.add("active");
    }

    function updateNav(element){
       for(let i=0; i<totalnavList; i++){
            
             navList[i].querySelector("a").classList.remove("active");
            const target=element.getAttribute("href").split("#")[1];
            if(target === navList[j].querySelector("a").getAttribute("href").split("#")[1] ){
                navList[j].querySelector("a").classList.add("active");
            }
        }
        
    }


     document.querySelector(".hire-me").addEventListener("click",function(){
         const sectionIndex=this.getAttribute("data-section-index");
         showSection(this);
         updateNav(this);
         removeBackSectionClass();
         addBackSectionClass(sectionIndex);
     })

   const navTogglerBtn=document.querySelector(".nav-toggler"),
                aside=document.querySelector(".aside");

        navTogglerBtn.addEventListener("click", () =>{
            asideSectionTogglerBtn();
        })

        function asideSectionTogglerBtn(){
            aside.classList.toggle("open");
            navTogglerBtn.classList.toggle("open");
             for(let i=0; i<totalSection; i++){
            allsection[i].classList.toggle("open");
        }
        }