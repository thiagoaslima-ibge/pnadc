// FS SCORM - fscommand adapter for ADL SCORM 1.2 and Flash MX 2004 Learning Interactions
// version 1.0    08/19/03
// Modified by Andrew Chemey, Macromedia
// Based on FS SCORM adapater version 1.2.4:
// 		Fragments Copyright 2002 Pathlore Software Corporation All rights Reserved
// 		Fragments Copyright 2002 Macromedia Inc. All rights reserved.
// 		Fragments Copyright 2003 Click2learn, Inc. All rights reserved.
// 		Developed by Tom King, Macromedia,
// 		             Leonard Greenberg, Pathlore,
// 		             and Claude Ostyn, Click2learn, Inc.
// 		Includes code by Jeff Burton and Andrew Chemey, Macromedia (01/09/02)
// -----------------------------------------------------------------
// Change these preset values to suit your taste and requirements.
var g_bShowApiErrors = false; 	// change to true to show error messages
var g_bInitializeOnLoad = true; // change to false to not initialize LMS when HTML page loads
// Translate these strings if g_bShowApiErrors is true
// and you need to localize the application
var g_strAPINotFound = "Management system interface not found.";
var g_strAPITooDeep = "Cannot find API - too deeply nested.";
var g_strAPIInitFailed = "Found API but LMSInitialize failed.";
var g_strAPISetError = "Trying to set value but API not available.";
var g_strFSAPIError = 'LMS API adapter returned error code: "%1"\nWhen FScommand called API.%2\nwith "%3"';
var g_strDisableErrorMsgs = "Select cancel to disable future warnings.";
// Change g_bSetCompletedAutomatically to true if you want the status to
// be set to completed automatically when calling LMSFinish. Normally,
// this flag remains false if the Flash movie itself sets status
// to completed by sending a FSCommand to set status to "completed",
// "passed" or "failed" (both of which imply "completed")
var g_bSetCompletedAutomatically = false;
// This value is normally given by the LMS, but in case it is not
// this is the default value to use to determine passed/failed.
// Set this null if the Flash actionscript uses its own method
// to determine passed/fail, otherwise set to a value from 0 to 1
// inclusive (may be a floating point value, e.g "0.75".
var g_SCO_MasteryScore = null; // allowable values: 0.0..1.0, or null
//==================================================================
// WARNING!!!
// Do not modify anything below this line unless you know exactly what
// you are doing!
// You should not have to change these two values as the Flash template
// presets are based on them.
var g_nSCO_ScoreMin = 0; 		// must be a number
var g_nSCO_ScoreMax = 100; 		// must be a number > nSCO_Score_Min
// Per SCORM specification, the LMS provided mastery score,
// if any, will override the SCO in interpreting whether the score
// should be interpreted when the pass/fail status is determined.
// The template tries to obtain the mastery score, and if it
// is available, to set the status to passed or failed accordingly
// when the SCO sends a score. The LMS may not actually make the
// determination until the SCO has been terminated.
// Default value for this flag is true. Set it to false if don't
// want to predict how the LMS will set pass/fail status based on
// the mastery score (the LMS will win in the end anyway).
var g_bInterpretMasteryScore = true;
// This script implements various aspects of
// common logic behavior of a SCO.
/////////// API INTERFACE INITIALIZATION AND CATCHER FUNCTIONS ////////
var g_nFindAPITries = 0;
var g_objAPI = null;
var g_bInitDone = false;
var g_bFinishDone = false;
var	g_bSCOBrowse = false;
var g_dtmInitialized = new Date(); // will be adjusted after initialize
var g_bMasteryScoreInitialized = false;
var g_sessionTimeCookie = false;
function AlertUserOfAPIError(strText) {
	if (g_bShowApiErrors) {
		var s = strText + "\n\n" + g_strDisableErrorMsgs;
		if (!confirm(s)){
			g_bShowApiErrors = false
		}
	}
}
function ExpandString(s){
	var re = new RegExp("%","g")
	for (i = arguments.length-1; i > 0; i--){
		s2 = "%" + i;
		if (s.indexOf(s2) > -1){
			re.compile(s2,"g")
			s = s.replace(re, arguments[i]);
		}
	}
	return s
}
function FindAPI(win) {
	while ((win.API == null) && (win.parent != null) && (win.parent != win)) {
		g_nFindAPITries ++;
		if (g_nFindAPITries > 500) {
			AlertUserOfAPIError(g_strAPITooDeep);
			return null;
		}
		win = win.parent;
	}
	return win.API;
}
function APIOK() {
	return ((typeof(g_objAPI)!= "undefined") && (g_objAPI != null))
}
function SCOInitialize(sessionTimeCookie) {
	if (sessionTimeCookie != undefined)
		g_sessionTimeCookie = sessionTimeCookie;
	var err = true;
	if (!g_bInitDone) {
		if ((window.parent) && (window.parent != window)){
			g_objAPI = FindAPI(window.parent)
		}
		if ((g_objAPI == null) && (window.opener != null))	{
			g_objAPI = FindAPI(window.opener)
		}
		if (!APIOK()) {
			AlertUserOfAPIError(g_strAPINotFound);
			err = false
		} else {
			err = g_objAPI.LMSInitialize("");
			if (err == "true") {
				g_bSCOBrowse = (g_objAPI.LMSGetValue("cmi.core.lesson_mode") == "browse");						if (!g_bSCOBrowse) {
					if (g_objAPI.LMSGetValue("cmi.core.lesson_status") == "not attempted") {
						err = g_objAPI.LMSSetValue("cmi.core.lesson_status","incomplete")
					}
				}
			} else {
				AlertUserOfAPIError(g_strAPIInitFailed)
			}
		}
		if (typeof(SCOInitData) != "undefined") {
			// The SCOInitData function can be defined in another script of the SCO
			SCOInitData()
		}
		g_dtmInitialized = new Date();
	}
	g_bInitDone = true;
	return (err + "") // Force type to string
}
function SCOFinish() {
	if ((APIOK()) && (g_bFinishDone == false)) {
		SCOReportSessionTime()
		if (g_bSetCompletedAutomatically){
			SCOSetStatusCompleted();
		}
		if (typeof(SCOSaveData) != "undefined"){
			// The SCOSaveData function can be defined in another script of the SCO
			SCOSaveData();
		}
		g_bFinishDone = (g_objAPI.LMSFinish("") == "true");
	}
	return (g_bFinishDone + "" ) // Force type to string
}
// Call these catcher functions rather than trying to call the API adapter directly
function SCOGetValue(nam)			{return ((APIOK())?g_objAPI.LMSGetValue(nam.toString()):"")}
function SCOCommit()					{return ((APIOK())?g_objAPI.LMSCommit(""):"false")}
function SCOGetLastError()		{return ((APIOK())?g_objAPI.LMSGetLastError():"-1")}
function SCOGetErrorString(n)	{return ((APIOK())?g_objAPI.LMSGetErrorString(n):"No API")}
function SCOGetDiagnostic(p)	{return ((APIOK())?g_objAPI.LMSGetDiagnostic(p):"No API")}
//LMSSetValue is implemented with more complex data
//management logic below
var g_bMinScoreAcquired = false;
var g_bMaxScoreAcquired = false;
// Special logic begins here
function SCOSetValue(nam,val){
	var err = "";
	if (!APIOK()){
			AlertUserOfAPIError(g_strAPISetError + "\n" + nam + "\n" + val);
			err = "false"
	} else if (nam == "cmi.core.score.raw") err = privReportRawScore(val)
	if (err == ""){
			err = g_objAPI.LMSSetValue(nam,val.toString() + "");
			if (err != "true") return err
	}
	if (nam == "cmi.core.score.min"){
		g_bMinScoreAcquired = true;
		g_nSCO_ScoreMin = val
	}
	else if (nam == "cmi.core.score.max"){
		g_bMaxScoreAcquired = true;
		g_nSCO_ScoreMax = val
	}
	return err
}
function privReportRawScore(nRaw) { // called only by SCOSetValue
	if (isNaN(nRaw)) return "false";
	if (!g_bMinScoreAcquired){
		if (g_objAPI.LMSSetValue("cmi.core.score.min",g_nSCO_ScoreMin+"")!= "true") return "false"
	}
	if (!g_bMaxScoreAcquired){
		if (g_objAPI.LMSSetValue("cmi.core.score.max",g_nSCO_ScoreMax+"")!= "true") return "false"
	}
	if (g_objAPI.LMSSetValue("cmi.core.score.raw", nRaw)!= "true") return "false";
	g_bMinScoreAcquired = false;
	g_bMaxScoreAcquired = false;
	if (!g_bMasteryScoreInitialized){
		var nMasteryScore = parseInt(SCOGetValue("cmi.student_data.mastery_score"),10);
		if (!isNaN(nMasteryScore)) g_SCO_MasteryScore = nMasteryScore
	}
	if ((g_bInterpretMasteryScore)&&(!isNaN(g_SCO_MasteryScore))){
		var stat = (nRaw >= g_SCO_MasteryScore? "passed" : "failed");
		if (SCOSetValue("cmi.core.lesson_status",stat) != "true") return "false";
	}
	return "true"
}
function MillisecondsToCMIDuration(n) {
//Convert duration from milliseconds to 0000:00:00.00 format
	var hms = "";
	var dtm = new Date();	dtm.setTime(n);
	var h = "000" + Math.floor(n / 3600000);
	var m = "0" + dtm.getMinutes();
	var s = "0" + dtm.getSeconds();
	var cs = "0" + Math.round(dtm.getMilliseconds() / 10);
	hms = h.substr(h.length-4)+":"+m.substr(m.length-2)+":";
	hms += s.substr(s.length-2)+"."+cs.substr(cs.length-2);
	return hms
}
// SCOReportSessionTime is called automatically by this script,
// but you may call it at any time also from the SCO
function SCOReportSessionTime() {
	var dtm = new Date();
	var n = dtm.getTime() - g_dtmInitialized.getTime();
	if (g_sessionTimeCookie) {
		var re = new RegExp("session_time=([^;]+)");
		var value = re.exec(document.cookie);
		if (value != null)
			n += parseInt(unescape(value[1]));
		document.cookie = "session_time="+n;
	}
	return SCOSetValue("cmi.core.session_time",MillisecondsToCMIDuration(n))
}
// Since only the designer of a SCO knows what completed means, another
// script of the SCO may call this function to set completed status.
// The function checks that the SCO is not in browse mode, and
// avoids clobbering a "passed" or "failed" status since they imply "completed".
function SCOSetStatusCompleted(){
	var stat = SCOGetValue("cmi.core.lesson_status");
	if (SCOGetValue("cmi.core.lesson_mode") != "browse"){
		if ((stat!="completed") && (stat != "passed") && (stat != "failed")){
			return SCOSetValue("cmi.core.lesson_status","completed")
		}
	} else return "false"
}
// Objective management logic
function SCOSetObjectiveData(id, elem, v) {
	var result = "false";
	var i = SCOGetObjectiveIndex(id);
	if (isNaN(i)) {
		i = parseInt(SCOGetValue("cmi.objectives._count"));
		if (isNaN(i)) i = 0;
		if (SCOSetValue("cmi.objectives." + i + ".id", id) == "true"){
			result = SCOSetValue("cmi.objectives." + i + "." + elem, v)
		}
	} else {
		result = SCOSetValue("cmi.objectives." + i + "." + elem, v);
		if (result != "true") {
			// Maybe this LMS accepts only journaling entries
			i = parseInt(SCOGetValue("cmi.objectives._count"));
			if (!isNaN(i)) {
				if (SCOSetValue("cmi.objectives." + i + ".id", id) == "true"){
					result = SCOSetValue("cmi.objectives." + i + "." + elem, v)
				}
			}
		}
	}
	return result
}
function SCOGetObjectiveData(id, elem) {
	var i = SCOGetObjectiveIndex(id);
	if (!isNaN(i)) {
		return SCOGetValue("cmi.objectives." + i + "."+elem)
	}
	return ""
}
function SCOGetObjectiveIndex(id){
	var i = -1;
	var nCount = parseInt(SCOGetValue("cmi.objectives._count"));
	if (!isNaN(nCount)) {
		for (i = nCount-1; i >= 0; i--){ //walk backward in case LMS does journaling
			if (SCOGetValue("cmi.objectives." + i + ".id") == id) {
				return i
			}
		}
	}
	return NaN
}
// Functions to convert AICC compatible tokens or abbreviations to SCORM tokens
function AICCTokenToSCORMToken(strList,strTest){
	var a = strList.split(",");
	var c = strTest.substr(0,1).toLowerCase();
	for (i=0;i<a.length;i++){
			if (c == a[i].substr(0,1)) return a[i]
	}
	return strTest
}
function normalizeStatus(status){
	return AICCTokenToSCORMToken("completed,incomplete,not attempted,failed,passed", status)
}
function normalizeInteractionType(theType){
	return AICCTokenToSCORMToken("true-false,choice,fill-in,matching,performance,sequencing,likert,numeric", theType)
}
function normalizeInteractionResult(result){
	return AICCTokenToSCORMToken("correct,wrong,unanticipated,neutral", result)
}
// Detect Internet Explorer
var g_bIsInternetExplorer = navigator.appName.indexOf("Microsoft") != -1;
// Handle fscommand messages from a Flash movie, remapping
// any AICC Flash template commands to SCORM if necessary
function base_DoFSCommand(command, args){
	var baseObj = g_bIsInternetExplorer ? base : document.base;
	// no-op if no SCORM API is available
	var myArgs = new String(args);
	var cmd = new String(command);
	var v = "";
	var err = "true";
	var arg1, arg2, n, s, i;
	var sep = myArgs.indexOf(",");
	if (sep > -1){
		arg1 = myArgs.substr(0, sep); // Name of data element to get from API
		arg2 = myArgs.substr(sep+1) 	// Name of Flash movie variable to set
	} else {
		arg1 = myArgs
	}
	if (!APIOK()) return;
	if (cmd.substring(0,3) == "LMS"){
		// Handle "LMSxxx" FScommands (compatible with fsSCORM html template)
		if ( cmd == "LMSInitialize" ){
			err = (APIOK() + "")
			// The actual LMSInitialize is called automatically by the template
		}	else if ( cmd == "LMSSetValue" ){
			err = SCOSetValue(arg1,arg2)
				//alert("-- "+arg2);
		} else if ( cmd == "LMSFinish" ){
			err = SCOFinish()
			// Handled automatically by the template, but the movie
			// may call it earlier.
		}	else if ( cmd == "LMSCommit" ){
			err = SCOCommit()
		}	else if ( cmd == "LMSFlush" ){
			// no-op
			// LMSFlush is not defined in SCORM and calling it causes test suite error
		}	else if ((arg2) && (arg2.length > 0)){
			if ( cmd == "LMSGetValue") {
				//alert("passou");
				baseObj.SetVariable(arg2, SCOGetValue(arg1));
			}	else if ( cmd == "LMSGetLastError") {
				baseObj.SetVariable(arg2, SCOGetLastError(arg1));
			}	else if ( cmd == "LMSGetErrorString") {
				baseObj.SetVariable(arg2, SCOGetLastError(arg1));
			}	else if ( cmd == "LMSGetDiagnostic") {
				baseObj.SetVariable(arg2, SCOGetDiagnostic(arg1));
			}	else {
				// for unknown LMSGetxxxx extension
				v = eval('g_objAPI.' + cmd + '(\"' + arg1 + '\")');
				baseObj.SetVariable(arg2,v);
			}
		} else if (cmd.substring(0,3) == "LMSGet") {
			err = "-2: No Flash variable specified"
		}
		// end of handling "LMSxxx" cmds
	} else if ((cmd.substring(0,6) == "MM_cmi")||(cmd.substring(0,6) == "CMISet")) {
		// Handle a Macromedia Learning Components FScommands.
		// These are using AICC HACP data model conventions,
		// so remap data from AICC to SCORM as necessary.
		var F_intData = myArgs.split(";");
		if (cmd == "MM_cmiSendInteractionInfo") {
			n = SCOGetValue("cmi.interactions._count");
			s = "cmi.interactions." + n + ".";
			// Catch gross errors to avoid SCORM compliance test failure
			// If no ID is provided for this interaction, we cannot record it
			v = F_intData[2]
			if ((v == null) || (v == "")) err = 201; // If no ID, makes no sense to record
			if (err =="true"){
				err = SCOSetValue(s + "id", v)
			}
			if (err =="true"){
				var re = new RegExp("[{}]","g")
				for (i=1; (i<9) && (err=="true"); i++){
					v = F_intData[i];
					if ((v == null) || (v == "")) continue
					if (i == 1){
						err = SCOSetValue(s + "time", v)
					} else if (i == 3){
						err = SCOSetValue(s + "objectives.0.id", v)
					} else if (i == 4){
						err = SCOSetValue(s + "type", normalizeInteractionType(v))
					} else if (i == 5){
						// strip out "{" and "}" from response
						v = v.replace(re, "");
						err = SCOSetValue(s + "correct_responses.0.pattern", v)
					} else if (i == 6){
						// strip out "{" and "}" from response
						v = v.replace(re, "");
						err = SCOSetValue(s + "student_response", v)
					} else if (i == 7){
						err = SCOSetValue(s + "result", normalizeInteractionResult(v))
					} else if (i == 8){
						err = SCOSetValue(s + "weighting", v)
					} else if (i == 9){
						err = SCOSetValue(s + "latency", v)
					}
				}
			}
		} else if (cmd == "MM_cmiSendObjectiveInfo"){
			err = SCOSetObjectiveData(F_intData[1], ".score.raw", F_intData[2])
			if (err=="true"){
				SCOSetObjectiveData(F_intData[1], ".status", normalizeStatus(F_intData[3]))
			}
		} else if ((cmd=="CMISetScore") ||(cmd=="MM_cmiSendScore")){
			err = SCOSetValue("cmi.core.score.raw", F_intData[0]);
		} else if ((cmd=="CMISetStatus") || (cmd=="MM_cmiSetLessonStatus")){
			err = SCOSetValue("cmi.core.lesson_status", normalizeStatus(F_intData[0]))
		} else if (cmd=="CMISetTime"){
			err = SCOSetValue("cmi.core.session_time", F_intData[0])
		} else if (cmd=="CMISetCompleted"){
			err = SCOSetStatusCompleted()
		} else if (cmd=="CMISetStarted"){
			err = SCOSetValue("cmi.core.lesson_status", "incomplete")
		} else if (cmd=="CMISetPassed"){
			err = SCOSetValue("cmi.core.lesson_status", "passed")
		} else if (cmd=="CMISetFailed"){
			err = SCOSetValue("cmi.core.lesson_status", "failed")
		} else if (cmd=="CMISetData"){
			err = SCOSetValue("cmi.suspend_data", F_intData[0])
		} else if (cmd=="CMISetLocation"){
			err = SCOSetValue("cmi.core.lesson_location", F_intData[0])
		} else if (cmd=="CMISetTimedOut"){
			err = SCOSetValue("cmi.core.exit", "time-out")
		} // Other Learning Component FScommands are no-ops in this context
	} else {
		if (cmd=="CMIFinish" || cmd=="CMIExitAU"){
			err = SCOFinish()
		} else if (cmd=="CMIInitialize" || cmd=="MM_StartSession"){
			err = SCOInitialize()
		} else {
			// Unknown command; may be invoking an API extension
			// If commands comes with a 2nd argument, assume a value is expected
			// otherwise assume it is just a cmd
			if (eval('g_objAPI.' + cmd)) {
				v = eval('g_objAPI.' + cmd + '(\"' + arg1 + '\")');
				if ((arg2) && (arg2.length > 0)){
					baseObj.SetVariable(arg2,v)
				} else {
					err = v
				}
			} else {
				err = "false"
			}
		}
	}
	// End of command translation and processing
	// handle detected errors, such LMS error returns
	if ((g_bShowApiErrors) && (err != "true")) {
		AlertUserOfAPIError(ExpandString(g_strFSAPIError, err, cmd, args))
	}
	return err
}
//-->