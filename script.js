let tableOptions, tableRow;

window.addEventListener("load", getElements);


function getElements(){
    tableOptions=document.querySelector(".tableOptions");
    tableRow=document.querySelectorAll(".tableRow");
    for(i of tableRow){
        i.addEventListener("mouseover", showOptions);
        i.addEventListener("mouseout", hideOptions);
    }
}

function showOptions(){
console.log("hover");
    tableOptions.style.display="block";

}

function hideOptions(){
    console.log("saiu");
    tableOptions.style.display="none";
}