function compareStrings(s1,s2){

    if(s1==s2)
    return 1;
    else
    return 0;
}

function search(){

    let str1 = {"Everest":"Journeys/j1.php",  "USA":"Journeys/j2.php",  "Rassia":"Journeys/j3.php", "Nepal":"Journeys/j4.php",  "Delhi":"Journeys/j5.php",  "Banglore":"Journeys/j6.php"};

    let var1 =  document.getElementById("box").value;
    
    let obj1 = Object.keys(str1);   // Everest USA Rassia
    let obj2 = Object.values(str1); // j1.php j2.php

    let flag=0;

    for(let i = 0;i<obj1.length;i++){
        if(compareStrings(obj1[i].toUpperCase(),var1.toUpperCase())){
            // console.log("yes");
            // window.location.href = obj2[i];
            window.open(obj2[i]); 
            flag=1;
        }
    }
    
    if(flag==1){
    alert("Welcome to "+var1)
    }
    else{
        alert("Sorry! Tour Not Found!")
        
    }
      document.getElementById("box").value="";
}