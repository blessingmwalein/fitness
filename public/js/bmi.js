
var bmiButton = document.getElementById('bmiButton');
var bmiHeight = document.getElementById('bmiHeight');
var bmiWeight = document.getElementById('bmiWeight');

var bmi = document.getElementById('bmi');


bmiButton.addEventListener("click", function(){
    calcBMi();
})

function calcBMi(){
    bmi.innerHTML = "Your BMI = "+ (bmiWeight.value / (bmiHeight.value * bmiHeight.value)).toFixed();
}
