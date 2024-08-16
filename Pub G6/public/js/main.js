let menu = document.querySelector(".nav-open")
let menuclose = document.querySelector(".nav-close")
let index = document.querySelector(".index")
let index2 = document.querySelector(".index2")
let pMenu = document.querySelector(".voirMenu")
let appetizer = document.querySelector(".appetizer")
let meal = document.querySelector(".meal")
let dessert = document.querySelector(".dessert")
let phrase = ["Excellent service et de la nourriture absolument délicieuse!","Pub G6 est ma destination favorite lorsque je veux recevoir des invités. Fiables et toujours une ambiance très agréable.", "Même si les prix ne sont pas les plus bas, Pub G6 est une référence dans la qualité du service et de leur mets. Je recommande!", "Woow! Superbe présentation et les meilleures côtes levées que je n’ai jamais mangées!", "Une expérience agréable et un service de qualité, dommage que ce ne soit pas plus proche!", "Si vous commandez à boire, demandez les conseils de Kevin! C’est un expert!"]
let notes = ["5/5 étoiles", "5/5 étoiles", "4.5/5 étoiles", "5/5 étoiles", "4/5 étoiles", "5/5 étoiles"] 




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

function showTexte()
{
    pMenu.style.display = "block"
    appetizer.style.BackGroundColor = "grey"
}
function UnShowTexte()
{
    pMenu.style.display = "none"
}



function randomizePhrase() {
    const randomIndex = Math.floor(Math.random() * phrase.length);
    return phrase[randomIndex];
  }

  function updatePhrase() {
    const phraseOutput = document.querySelector(".commentaire");
    phraseOutput.textContent = randomizePhrase();
  }

  setInterval(updatePhrase, 3000);

  updatePhrase();

  function randomizeNotes() {
    const randomIndex = Math.floor(Math.random() * notes.length);
    return notes[randomIndex];
  }

  function updateNotes() {
    const notesOutput = document.querySelector(".etoile");
    notesOutput.textContent = randomizeNotes();
  }
  setInterval(updateNotes, 3000);

  updateNotes();










