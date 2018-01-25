(function connected() {
   console.log('connected');
})();

function joiner() {
	//used for showing register form
   //document.getElementById('login').style.display = 'none';
   //document.getElementById('create').style.display = 'block';
   $("#login").hide(500);
   $("#create").show(500);

   
}

function ligner() {
	//used for showing login form
   //document.getElementById('login').style.display = 'block';   
   //document.getElementById('create').style.display = 'none';
   $("#login").show(500);
   $("#create").hide(500);
}

window.onload = function writePageTitleNavBar() {
   $('#side-menu').load('./webcom/side-menu.htm');
   $('#top-menu').load('./webcom/top-menu.htm');

};


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

(function checkLogin() {
  var url = document.location.href;
  if(url.indexOf("attempt")>-1) {
    alert("Incorrect Username or Password");
  }
})();

var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.scottsorci.com/statistics/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
