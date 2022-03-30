
//SIDEBAR
let btn =document.querySelector("#btn");
	let sidebar =document.querySelector(".sidebar");

	btn.addEventListener("click" ,function(e){sidebar.classList.toggle("sidebar-active");});

//</SIDEBAR>

var pageTitle = document.getElementById('title').textContent;


if (pageTitle == "Edit Student Profile") {
    editProfile();
} else if (pageTitle == "View Student Profile") {
    viewProfile();
}


    
function editProfile() {
    // for making inputs that are necessary required
    var necessaryFields = document.querySelectorAll('input,select,textarea');
    for (let index = 0; index < necessaryFields.length; index++) {
        if (necessaryFields[index].name != "suffix" && necessaryFields[index].name != "account_sta" && necessaryFields[index].name != "profile_picture_path" && necessaryFields[index].name != "gender" && necessaryFields[index].name != "description") {
            necessaryFields[index].required = true;
        }
    }
}

function viewProfile() {

    // for getting age from bday input[type=date]
    var now =new Date();                            //getting current date
    var currentY= now.getFullYear();                //extracting year from the date
    var dobget =document.getElementById("data-bday").value; //getting user input
    var dob= new Date(dobget);                             //formatting input as date
    var prevY= dob.getFullYear();                          //extracting year from input date
    var ageY =currentY - prevY;
    document.getElementById('auto-age').value = ageY;

    // for converting middle name to middle initial
    document.getElementById("middle-name").value = document.getElementById("middle-name").value.charAt(0) + ".";

    // for removing suffix if there is no data for suffix
    if (document.getElementById("data-suffix").value == "") {
        document.getElementById("suffix-id").style.display = "none";
    }

    // for formatting contact number to 09XX-XXX-XXXX
    var contactNoRaw = document.getElementById("contactno-data").value;
    var contactNoParts = [
        contactNoRaw.substring(0,4),
        contactNoRaw.substring(4,7),
        contactNoRaw.substring(7,11)
    ];
    document.getElementById("contactno-data").value = contactNoParts[0] + "-" + contactNoParts[1] + "-" + contactNoParts[2];
}




// for back to top button -> check if at the top of the page
const spot = document.getElementById('spot');
window.onscroll = function() {
    if (checkVisible(spot)) {
        $('#backtotop-button').fadeOut(200);
    } else if (!checkVisible(spot)) {
        $('#backtotop-button').fadeIn(200);
    }
};
function checkVisible(x) {
    var rect = x.getBoundingClientRect();
    var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}
// ----------------------------------------------------------




var isShowing = false
var isNotifsShowing = false;

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
} else {
    menuBtn.classList.remove('open');
    menuOpen = false;
}
});

document.getElementById("menuButton").addEventListener("click", function(){
    if (!isShowing) {
        document.getElementById("panel").style.width="90%";
        document.getElementById("panelul").style.display="flex";
        document.getElementById("userAccountButton").style.left="120px";
        // $(userAccountButton).fadeOut(200);
        isShowing = true
    } else if (isShowing) {
        document.getElementById("panel").style.width="0%";
        document.getElementById("panelul").style.display="none";
        document.getElementById("userAccountButton").style.left="0";
        // $(userAccountButton).fadeIn(200);
        isShowing = false
    }
});

document.getElementById("notifications-button").addEventListener("click",function(){
    if (!isNotifsShowing) {
        document.getElementById("notifications-panel").style.display="flex";
        isNotifsShowing = true;
    } else if (isNotifsShowing) {
        document.getElementById("notifications-panel").style.display="none";
        isNotifsShowing = false;
    }
});
// for month in add education
document.getElementById('year').onchange = function() {
    document.getElementById('yeargraduated').readOnly = true;

    if ( document.getElementById('year').checked){

   
    document.getElementById("yeargraduated").value = getyear()

        function getyear() {
        var today = new Date();
       
        var yyyy = today.getFullYear();
      
        today =  yyyy;
        return today
        }
    }
    else{
        document.getElementById('yeargraduated').readOnly = false;
        document.getElementById("yeargraduated").value ="";
    }
  
};
// for add work
document.getElementById('present').onchange = function() {
    document.getElementById('job_end').readOnly = true;

    if ( document.getElementById('present').checked){

   
    document.getElementById("job_end").value = getyear()

        function getyear() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;
            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd;
            } 
            if(mm<10){
                mm='0'+mm;
            } 
        
            today = yyyy+'-'+mm+'-'+dd;
            return today
        }
    }
    else{
        document.getElementById('job_end').readOnly = false;
        document.getElementById("job_end").value ="";
    }
  
};
