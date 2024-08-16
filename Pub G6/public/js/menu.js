let entree = document.querySelector(".entree")
let repas = document.querySelector(".repas")
let desert = document.querySelector(".deserte")
let entreebtn = document.querySelector(".entree-btn")
let repasbtn = document.querySelector(".repas-btn")
let desertbtn = document.querySelector(".desert-btn")
let autrebtn = document.querySelector(".autrebtn")
let autre = document.querySelector(".autre")
entreebtn.addEventListener("click", function()
    {
        console.log("entree")
        entree.style.display = "flex"
        repas.style.display = "none"
        desert.style.display = "none"
        autre.style.display = "none"
       

    }
)
repasbtn.addEventListener("click", function()
    {
        console.log("repas")
        repas.style.display = "flex"
        entree.style.display = "none"
        desert.style.display = "none"
        autre.style.display = "none"

       

    }
)
desertbtn.addEventListener("click", function()
    {
        console.log("desert")
        desert.style.display = "flex"
        repas.style.display = "none"
        entree.style.display = "none"
        autre.style.display = "none"

       
    }
)
    autrebtn.addEventListener("click", function()
    {
        console.log("desert")
        desert.style.display = "none"
        repas.style.display = "none"
        entree.style.display = "none"
        autre.style.display = "flex"

       
    }
    
)