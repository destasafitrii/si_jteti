/*
 Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
*/
CKEDITOR.dialog.add("radio",function(c){return{title:c.lang.forms.checkboxAndRadio.radioTitle,minWidth:350,minHeight:140,getModel:function(a){return(a=a.getSelection().getSelectedElement())&&"input"==a.getName()&&"radio"==a.getAttribute("type")?a:null},onShow:function(){var a=this.getModel(this.getParentEditor());a&&this.setupContent(a)},onOk:function(){var a=this.getParentEditor(),b=this.getModel(a);b||(b=a.document.createElement("input"),b.setAttribute("type","radio"),a.insertElement(b));this.commitContent({element:b})},
contents:[{id:"info",label:c.lang.forms.checkboxAndRadio.radioTitle,title:c.lang.forms.checkboxAndRadio.radioTitle,elements:[{id:"name",type:"text",label:c.lang.common.name,"default":"",accessKey:"N",setup:function(a){this.setValue(a.data("cke-saved-name")||a.getAttribute("name")||"")},commit:function(a){a=a.element;this.getValue()?a.data("cke-saved-name",this.getValue()):(a.data("cke-saved-name",!1),a.removeAttribute("name"))}},{id:"value",type:"text",label:c.lang.forms.checkboxAndRadio.value,"default":"",
accessKey:"V",setup:function(a){this.setValue(a.getAttribute("value")||"")},commit:function(a){a=a.element;this.getValue()?a.setAttribute("value",this.getValue()):a.removeAttribute("value")}},{id:"checked",type:"checkbox",label:c.lang.forms.checkboxAndRadio.selected,"default":"",accessKey:"S",value:"checked",setup:function(a){this.setValue(a.getAttribute("checked"))},commit:function(a){var b=a.element;if(CKEDITOR.env.ie){var d=b.getAttribute("checked"),e=!!this.getValue();d!=e&&(d=CKEDITOR.dom.element.createFromHtml('\x3cinput type\x3d"radio"'+
(e?' checked\x3d"checked"':"")+"\x3e\x3c/input\x3e",c.document),b.copyAttributes(d,{type:1,checked:1}),d.replace(b),e&&d.setAttribute("checked","checked"),c.getSelection().selectElement(d),a.element=d)}else a=this.getValue(),CKEDITOR.env.webkit&&(b.$.checked=a),a?b.setAttribute("checked","checked"):b.removeAttribute("checked")}},{id:"required",type:"checkbox",label:c.lang.forms.checkboxAndRadio.required,"default":"",accessKey:"Q",value:"required",setup:CKEDITOR.plugins.forms._setupRequiredAttribute,
commit:function(a){a=a.element;this.getValue()?a.setAttribute("required","required"):a.removeAttribute("required")}}]}]}});