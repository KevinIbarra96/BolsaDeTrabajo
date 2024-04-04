//console.clear();

/* PATHS */
	var jsDO = new Object();
	jsDO.Protocol		=	$(location).attr('protocol');
	jsDO.Root			= 	(($(location).attr('host').indexOf("localhost") == -1)?"/admin/":"/gascontrol/");
	jsDO.Initial 		= 	jsDO.Protocol + "//" + $(location).attr('host') + jsDO.Root;
	jsDO.Pages			= 	jsDO.Initial+"pages/";
	jsDO.MainFiles		= 	jsDO.Pages + "main/main-files/";
	jsDO.Content		=	jsDO.MainFiles + "content/";
	
	console.log(jsDO.Root);
	 
	// jsDO.Components		= 	jsDO.MainFiles + "components/";
	// jsDO.Sidebar			=	jsDO.Components+"sidebar/";
	// jsDO.Navbar			=	jsDO.Components+"navbar/";
	// jsDO.Main			=	jsDO.Components+"main/";
	// jsDO.Modals			=	jsDO.Components+"modals/";
	// jsDO.jsonTests		=	"./jsonTests/";
	// jsDO.Assets			=	jsDO.Initial + "assets/";
	// jsDO.Images			=	jsDO.Assets	 + "images/";
	// jsDO.Logos			=	jsDO.Images	 + "logos/";
	// jsDO.Avatars		=	jsDO.Assets	 + "avatars/";
	// jsDO.Uploads		=	jsDO.Initial + "uploads/";
	jsDO.Documents		=	"../uploads/documents/";
	jsDO.App			= 	jsDO.Content + GetURLParameter("a") + "/";
	jsDO.AppFiles 		= 	jsDO.App + GetURLParameter("a")+'-files/';
	jsDO.AppPHP 		= 	jsDO.AppFiles +"php/";
	
	var urlInitial = jsDO.Protocol + "//" + $(location).attr('host') + "/";	
	
	sessionStorage.setItem('sS_Paths',JSON.stringify(jsDO));
	
	
	var pathWS = jsDO.Initial +"jsonPHP/";
		
	var jsDOWS = new Object();
	jsDOWS.getJSON			= pathWS + "getJSON.php";
	jsDOWS.setJSON			= pathWS + "setJSON.php";
	jsDOWS.ValidateLogin	= pathWS + "getJSON.php?Validate=Login";
	jsDOWS.DynamicCursor	= pathWS + "getJSON.php?Dynamic=Cursor";
	jsDOWS.DynamicSentence	= pathWS + "getJSON.php?Dynamic=Sentence";
	jsDOWS.DynamicData	= pathWS + "getJSON.php?Dynamic=Data";
	jsDOWS.DynamicArray	= pathWS + "getJSON.php?Dynamic=Array";
	sessionStorage.setItem('sS_WebServices',JSON.stringify(jsDOWS));
	
/* WS */
	/*var pathWS = urlInitial + "ws/WebServicesx/";
	var jsDOWS = new Object();
	jsDOWS.ValidateLogin	= pathWS + "WSLogin.asmx/ValidateLogin";
	jsDOWS.UserInformation	= pathWS + "WSLogin.asmx/UserInformationXXX";
	jsDOWS.DynamicCursor	= pathWS +"WSAPMT.asmx/DynamicCursor";
	jsDOWS.DynamicSentence	= pathWS +"WSAPMT.asmx/DynamicSentence";
	jsDOWS.DynamicValue		= pathWS +"WSAPMT.asmx/DynamicValue";
	jsDOWS.DynamicMenu		= pathWS +"WSAPMT.asmx/DynamicMenu";
	jsDOWS.Utilities		= pathWS +"WSUtilities.asmx/";
	jsDOWS.ValidationList	= pathWS +"WSValidationList.asmx/";

	sessionStorage.setItem('sS_WebServices',JSON.stringify(jsDOWS));*/

/* WebForms */ 
	var pathWF = urlInitial + "ws/WebForms/";
	var jsDOWF = new Object();
	jsDOWF.WebForm = pathWF;
	jsDOWF.UploadFile = pathWF + "UploadFile.aspx";
	sessionStorage.setItem('sS_WebForms',JSON.stringify(jsDOWF));
	
	
/* WebTools */	
	var pathWT = "http://localhost/ws/WebTools/";
	var jsDOWT = new Object();
	jsDOWT.UploadFile = pathWT + "UploadFile.aspx";
	sessionStorage.setItem('sS_WebTools',JSON.stringify(jsDOWT));
	
/* RESOURCES */	
	var jsDOURL = new Object();
	jsDOURL.Login	=	jsDO.Initial + "pages/login/";
	jsDOURL.Main	=	jsDO.Initial + "pages/main/?n=0&a=applications&p=menu";
	sessionStorage.setItem('sS_URLs',JSON.stringify(jsDOURL));
		
/* INICIALIZACION */	
	var sUser = localStorage.getItem('ls_User'),
		UserData = JSON.parse(localStorage.getItem('ls_UserData')),
		Path = JSON.parse(sessionStorage.getItem('sS_Paths')),
		WS = JSON.parse(sessionStorage.getItem('sS_WebServices')),
		WF = JSON.parse(sessionStorage.getItem('sS_WebForms')),
		WT = JSON.parse(sessionStorage.getItem('sS_WebTools')),
		URLS = JSON.parse(sessionStorage.getItem('sS_URLs'));
		
	$.ajaxSetup({
		cache: true
	});
