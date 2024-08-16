let menu = document.querySelector(".nav-open")
let menuclose = document.querySelector(".nav-close")
let index = document.querySelector(".index")
let index2 = document.querySelector(".index2")
menu.addEventListener("click", function()
{
    
    index.style.display= "none"
    index2.style.display = "block"
})
menuclose.addEventListener("click", function()
    {
        index.style.display= "block"
        index2.style.display = "none"
    }
)