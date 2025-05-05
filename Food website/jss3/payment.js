tcolorA = document.getElementById('tcolorA'),
tcolorB = document.getElementById('tcolorB'),
tcolorC = document.getElementById('tcolorC'),
iconA = document.querySelector('"fa-solid fa fa-credit-card" aria-hidden="true"'),
iconB = document.querySelector('"fa-solid fa fa-university" aria-hidden="true"'),
iconC = document.querySelector('"fa-solid fa fa-google-wallet" aria-hidden="true"'),
cDetails = document.querySelector('.card-details');


function dofun(){
    tcolorA.style.color = "greenyellow";
    tcolorB.style.color = "#444";
    tcolorC.style.color = "#444";
    iconA.style.color = "greenyellow";
    iconB.style.color = "#aaa";
    iconC.style.color = "#aaa";
    cDetails.style.display = "block";
}
function dofunA(){
    tcolorA.style.color = "#444";
    tcolorB.style.color = "greenyellow";
    tcolorC.style.color = "#444";
    iconA.style.color = "#aaa";
    iconB.style.color = "greenyellow";
    iconC.style.color = "#aaa";
    cDetails.style.display = "none";
}
function dofunB(){
    tcolorA.style.color = "#444";
    tcolorB.style.color = "#444";
    tcolorC.style.color = "greenyellow";
    iconA.style.color = "#aaa";
    iconB.style.color = "#aaa";
    iconC.style.color = "greenyellow";
    cDetails.style.display = "none";
}
cNumber = document.getElementById('number');
cNumber.addEventListener('keyup', function(e){
    num= cNumber.value;

    newValue = '';
    num = num.replace(/\s/g, '');
    for(var i = 0; i< num.length; i++ ){
        if(i%4 == 0 && i > 0) newValue = newValue.concat('');
        newValue = newValue.concat(num[i]);
        cNumber.value = newValue;
    }
    
    ccNum = document.getElementById('c-number');
    if(num.length<16){
        ccNum.style.border="1px solid red";
    }
    else{
        ccNum.style.border="1px solid greenyellow";
    }
}
);

eDate = document.getElementById('e-date');
eDate.addEventListener('keyup', function( e ){

    newInput = eDate.value;
    
    if(e.which !== 8){
        var numChars = e.target.value.length;
        if(numChars == 2){
            var thisVal = e.target.value;
            thisVal += '/';
            e.target.value = thisVal;
            console.log(thisVal.length)
        }
    }

    if(newInput.length<5){
        eDate.style.border="1px solid red";
    }
    else{
        eDate.style.border="1px solid greenyellow";
    }
    });