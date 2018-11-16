var age = prompt("Iveskite savo amžių", "");

function permission(number) {

  if (isNaN(number)){
    alert("Ivestas ne skaičius");
  } else if (number>=18) {
    alert("Užeikite");
  } else if (number>=0 && number<18){
    alert("Užeiti negalima");
  } else {
    alert("Jūs dar negimėte, užeiti negalima")
  }
}
