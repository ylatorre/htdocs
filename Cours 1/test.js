// let message = "ici c'est une variable globale !";
// function showMess()  {
//     let message = "ici c'est une variable local"
//     alert(message)
// }



// alert(message)
// showMess()

function myFunction(arg) {
    document.write("Votre argument est " + arg + "<br>");
}
myFunction("ARG");
// myFunction(prompt("Que voulez vous afficher"));


function plusArg(premier, second) {
    document.write(premier + second + "<br>")
}
plusArg("1", "2")

function sayHello() {
    return "Hello !"
}
document.write(sayHello());

function calcul() {

    return " " + (2+2)

}
retour = calcul();
document.write("<br>" + retour)
let func = function (arg) {
    return 2 + 3
}
//!Fonction préférée
let func2 = () => {
        return 3+4
}
document.write("<br>" + func() + " " + func2())

//les objects

let maVariable ="ceci est une variable"
document.write("<br>"+maVariable.length)
maVariable.toLowerCase();
maVariable.toUpperCase();


let tableau = ["TchouTchoup","Lucie","Camil","Chocolatine"]
document.write("<br>"+tableau[3])
tableau[4]="Pain au chocolat"
document.write("<br>" + tableau[4])

//!Pour imprimer
// window.print();

tableau.push("Harrnnox")
tableau.push("Bea", "cop")
tableau.unshift("G4")

document.write("<br>" + tableau)


tableau.shift()
tableau.pop()
document.write("<br>" + tableau)

let CousinsMachins = "Jerome Guillaume Paul";
let CousinsTab = CousinsMachins.split(" ")

document.write("<br>" + CousinsTab)
CousinsMachins = CousinsTab.join("-")
document.write("<br>" + CousinsMachins+"<br>")

let tableau1 = ["TchouTchoup","Lucie","Camil","Chocolatine"]
for (let i = 0; i < tableau1.length; i++) {
    document.write("<br>"+tableau1[i]);
}




