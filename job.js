/**
* Author: Mohammad Khan
* Purpose: This file is for showing readonly text in enquire.html and validating the form inputs
* Created: 1 Oct 2014
* Last updated: 1 Oct 2014
*  
*/


/*get variables from form and check rules*/


        
function validate(){
	
        var result = true;
	var errMsg = "";								/* stores the error message */
	var result = true;								/* assumes no errors */
	var statepost = false;
        var state = getState();
        var postcode = document.getElementById("postcode").value;
        var skill = document.getElementsByClassName("skills");
        var otherskills = document.getElementById("otherskills");
        var checker = otherskills.value;
        
        var chkd = skill[0].checked || skill[1].checked ||  skill[2].checked || skill[3].checked || skill[4].checked;

	
       
        /*get values from the form*/
        //the selected state must match the first digit of the postcode
        //VIC = 3 OR 8, NSW = 1 OR 2 ,QLD = 4 OR 9 ,NT = 0 ,WA = 6 ,SA=5 ,TAS=7 ,ACT= 0
        //(e.g. the postcode 3122 should match the state VIC)

	/* shows combination of 2 attributes from the form*/
        
		switch(state){
                   
			case "VIC":
				if (postcode < 3000 || postcode > 3999 && postcode < 8000 || postcode > 8999) {
                                        errMsg += "Your post code is not listed in VIC \n"
					result = false;
				}
                                break;
			case "NSW":
				if (postcode < 1000 || postcode > 2999) {
					errMsg += "Your post code is not listed in NSW \n"
					result = false;
				}
                                break;
			case "QLD":
				if (postcode < 4000 || postcode > 4999 && postcode < 9000 || postcode > 9999) { 
					errMsg += "Your post code is not listed in QLD \n"
					result = false;
				}
                                break;
                        case "NT":
				if (postcode < 0 || postcode > 9999 ) { 
					errMsg += "Your post code is not listed in NT \n"
					result = false;
				}
                                break;
			case "WA":
				if (postcode < 6000 || postcode > 6999) { 
					errMsg += "Your post code is not listed in WA \n"
					result = false;
				}
                                break;
                        case "SA":
				if (postcode < 5000 || postcode > 5999) { 
					errMsg += "Your post code is not listed in SA \n"
					result = false;
				}
                                break;
                        case "TAS":
				if (postcode < 7000 || postcode > 7999) { 
					errMsg += "Your post code is not listed in TAS \n"
					result = false;
				}
                                break;
			case "ACT":
				if (postcode < 0 || postcode > 999) { 
					errMsg += "Your post code is not listed in ACT \n"
					result = false;
				}
                                break;
                            
		}   //end switch
                
                
            
    //Checking if other skills have been mentioned if other skills checkbox is checked
    
     if (chkd == false) {
            errMsg += "Please select at least one skill \n";
            result = false;
        }


     //If otherskills checkbox is checked, data must be provided accordingly
        
    if (skill[4].checked && checker == "") {
        
        errMsg += "You must mention your other skills \n"
        result = false;
        
        
    }
    
   
	// Only show alert error if it the error message is not empy
	 
                if (errMsg != ""){
                   alert(errMsg);
                    }  
		
	return result;    //if false the infomration will not be sent to the server
}




	//To extract the state selected state name from dropdown list

function getState() {
	var state = "Unknown";               //initialise variable in case does not get reinitialised properly
	/* test which option is selected*/
        var temp = document.getElementById("state");
        
        
        if (temp.selectedIndex == 0) {
            state = "VIC";
        }
        else if (temp.selectedIndex == 1) {
            state = "NSW";
        }
        else if (temp.selectedIndex == 2) {
            state = "WA";
        }
        else if (temp.selectedIndex == 3) {
            state = "QLD";
        }
        else if (temp.selectedIndex == 4) {
            state = "NT";
        }
        else if (temp.selectedIndex == 5) {
            state = "SA";
        }
        else if (temp.selectedIndex == 6) {
            state = "TAS";
        }
        else if (temp.selectedIndex == 7) {
            state = "ACT";
        }
	
	
	return state;
}


	// To prefill the Job Title and Job Refference number in form

function prefill_form() {
    
	 if(localStorage.jt != undefined){
	     
	document.getElementById("jobname").value =localStorage.jt;
	document.getElementById("jobreference").value =localStorage.jr;

    
    }
    
}


function init () {
    prefill_form();
    
    var regForm = document.getElementById("eform");// link the variable to the HTML element
    regForm.onsubmit = validate; /* assigns functions to corresponding events */
 
}



window.onload=init;