
/**
* Author: Mohammad Khan
* Purpose: This file is for storing text fields locally
* Created: 1 Oct 2014
* Last updated: 1 Oct 2014
*  
*/

    //Get and store element values in local storage

function store_job() {
    
    localStorage.jt = document.getElementById("jt").value;
    localStorage.jr = document.getElementById("jr").value;
    alert ("Job Title: " +localStorage.jt + "\n" + "Job Refference:" + localStorage.jr);
    
   

}



function init(){
    
    var job = document.getElementById("job2b");
    job.onsubmit=store_job;

    
}



window.onload=init;