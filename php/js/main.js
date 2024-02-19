
// SLIDES NAVI IN FROM RIGHT AND TUCKS 3 LINE NAVI AWAY

function showNavi(){
	document.getElementById('nav').style.marginLeft = '0%';
	document.getElementById('box').style.marginLeft =  '50%';
}
function hideNavi(){
	document.getElementById('nav').style.marginLeft = '50%';
	document.getElementById('box').style.marginLeft =  '0%';
}

// PUTS CONTACT SECTION IN FRONT VIA OPACITY AND Z-INDEX 

document.getElementById('contactWrapper').style.zIndex = '-500';

function showContact(){
	document.getElementById('contactWrapper').style.zIndex = '3000';
	document.getElementById('contactWrapper').style.opacity = '10';
}
function hideContact(){
	document.getElementById('contactWrapper').style.zIndex = '-500';
	document.getElementById('contactWrapper').style.opacity = '0';
}

function fadeArrowAway(){
	document.getElementById('assistWrapper1').style.opacity ='0'
}

// POPS UP THE SERVICES WHEN "SEE DETAILS IS CLICKED"

document.getElementById('serviceWrapper1').style.zIndex = '-500';
document.getElementById('serviceWrapper1').style.opacity = '0';
document.getElementById('serviceWrapper2').style.zIndex = '-500';
document.getElementById('serviceWrapper2').style.opacity = '0';
document.getElementById('serviceWrapper3').style.zIndex = '-500';
document.getElementById('serviceWrapper3').style.opacity = '0';
document.getElementById('serviceWrapper4').style.zIndex = '-500';
document.getElementById('serviceWrapper4').style.opacity = '0';

function showDD(){
	document.getElementById('serviceWrapper1').style.zIndex = '3000';
	document.getElementById('serviceWrapper1').style.opacity = '10';
}
function showEC(){
	document.getElementById('serviceWrapper2').style.zIndex = '3000';
	document.getElementById('serviceWrapper2').style.opacity = '10';
}
function showWSM(){
	document.getElementById('serviceWrapper3').style.zIndex = '3000';
	document.getElementById('serviceWrapper3').style.opacity = '10';
}
function showWSR(){
	document.getElementById('serviceWrapper4').style.zIndex = '3000';
	document.getElementById('serviceWrapper4').style.opacity = '10';
}


function hideAllServicePop(){	
	document.getElementById('serviceWrapper1').style.opacity = '0';
	document.getElementById('serviceWrapper1').style.zIndex = '-500';
	document.getElementById('serviceWrapper2').style.opacity = '0';
	document.getElementById('serviceWrapper2').style.zIndex = '-500';
	document.getElementById('serviceWrapper3').style.opacity = '0';
	document.getElementById('serviceWrapper3').style.zIndex = '-500';
	document.getElementById('serviceWrapper4').style.opacity = '0';
	document.getElementById('serviceWrapper4').style.zIndex = '-500';
}






// THIS JQUEARY PLUGIN SLIDES THE USEER TO THE DESIRED SECTION
// WHEN THE BUTTON IS ACCESSED IN THE NAVI

$(document).ready(function() {
	$('a').smoothScroll({
		speed: 820
	});
});


document.getElementById('services').style.letterSpacing = '1px';
document.getElementById('about').style.letterSpacing = '1px';
document.getElementById('featured').style.letterSpacing = '1px';
document.getElementById('customerQuotes').style.letterSpacing = '1px';
document.getElementById('aboutGraphic').style.opacity = '0';
// document.getElementById('aboutGraphic').style.backgroundPosition = '0 1px';

	function expand(){
		document.getElementById('services').style.letterSpacing = '5px';
	}

// THIS SECTION IS FOR THE OPENING AND CLOSING THE MAIN FOOTER

	function expandThree(){
		document.getElementById('featured').style.letterSpacing = '3px';
		document.getElementById('featuredItems').style.opacity = '9';
	}
	function expandFour(){
		document.getElementById('customerQuotes').style.letterSpacing = '3px';
		// document.getElementById('customerQuotes').style.height = '350px';
	}
	function openFooter(){
		document.getElementById('mainFooter').style.height = '550px';
		document.getElementById('openArrow').style.height = '0px';
		document.getElementById('closeArrow').style.height = '25px';
	}
	function closeFooter(){
		document.getElementById('mainFooter').style.height = '200px';
		document.getElementById('openArrow').style.height = '25px';
		document.getElementById('closeArrow').style.height = '0px';
	}



// THIS SECTION IS SERVICE MODULES

	function devIconUp(){
		document.getElementById('devIcon').style.marginTop = '-50px';
		document.getElementById('devwhite').style.backgroundColor = "#f5f5f5";
	}
	function devIconDown(){
		document.getElementById('devIcon').style.marginTop = '0px';
		document.getElementById('devwhite').style.backgroundColor = "#f1f1f1";
	}
	function campaignIconUp(){
		document.getElementById('campaignIcon').style.marginTop = '-50px';
		document.getElementById('campaignwhite').style.backgroundColor = "#f5f5f5";
	}
	function campaignIconDown(){
		document.getElementById('campaignIcon').style.marginTop = '0px';
		document.getElementById('campaignwhite').style.backgroundColor = "#f1f1f1";
	}
	function managementIconUp(){
		document.getElementById('managementIcon').style.marginTop = '-50px';
		document.getElementById('managementwhite').style.backgroundColor = "#f5f5f5";
	}
	function managementIconDown(){
		document.getElementById('managementIcon').style.marginTop = '0px';
		document.getElementById('managementwhite').style.backgroundColor = "#f1f1f1";
	}
	function rentIconUp(){
		document.getElementById('rentIcon').style.marginTop = '-50px';
		document.getElementById('rentwhite').style.backgroundColor = "#f5f5f5";
	}
	function rentIconDown(){
		document.getElementById('rentIcon').style.marginTop = '0px';
		document.getElementById('rentwhite').style.backgroundColor = "#f1f1f1";
	}
	///////////////////////////////////////////////////////////////////////////
	function closeDialog() {
	var x = document.getElementById("myDialog");
	x.close(); }			  
	