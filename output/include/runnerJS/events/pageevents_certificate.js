
Runner.pages.PageSettings.addPageEvent("certificate",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Print';if(!pageObj.buttonEventBefore['Print']){pageObj.buttonEventBefore['Print']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="";ctrl.setMessage("Opening...");}}
if(!pageObj.buttonEventAfter['Print']){pageObj.buttonEventAfter['Print']=function(result,ctrl,pageObj,proxy,pageid,rowData){var cid=result['cid'];var userID=result['userID'];var cnameCode=result['cnameCode'];var cert="../webcon/certificatePage.php?cid="+cid+"&userID="+userID+"&conf="+cnameCode;window.open(cert,"_blank");}}
$('a[id=Print]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Print"+"_"+Runner.genId();var button_Print=new Runner.form.Button({id:this.id,btnName:"Print"});button_Print.init({args:[pageObj,proxy,pageid]});});});