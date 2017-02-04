jQuery(document).ready(function($) {

    'use strict';
    var ip = $('#ip-address');
    var hosts = $("#hosts");
    var resDiv = $("#result");
    var regInput = $("#resMatch");

    function cidrClass() {

    	var ipAddres = null;
    	var port = null;
    	var z = null;
    	var array = null; 
    	this.splitArray = function(string){
    		array = string.split("|");
    		this.ipAddres = array[3];
    		this.port = array[4];
    		console.log(this.ipAddres + " "+ this.port);
    	}

    	this.calcSubnetMask = function(string){
    		var counter = null;
    		var hostNo = null;
    		this.hostNo = parseInt(this.port);
    		for (z = 1; z < this.hostNo ; z = z * 2) {
    			counter += 1; 
                //resDiv.append("<li class='arrayListItem' hidden>" + z + "</li>");
                //console.log(counter)
            }

            this.arrayTotal = $(".arrayListItem").length;
            this.cidr = 32 - counter;

            if (this.cidr >= 0) {
                resDiv.append("<hr>");
                resDiv.append("IP address:" + this.ipAddres + "/" + this.cidr);
               
            } else {

            }
    	}

    	this.networkParser = function(){

    		
    	}

        
    }


    $('#match').click(function(event) {
        event.preventDefault();
        var calcIP = null;
        calcIP = new cidrClass();
        calcIP.splitArray($('#resMatch').val());
        calcIP.calcSubnetMask()  
    })


    /*
        function uploadMethod(){
                
                var fileDiv = document.getElementById("fileUploadDiv");
                var txt = "";
                var i = null;
                if ('files' in fileDiv) {
                    if (fileDiv.files.length == 0) {
                        txt = "Select one or more files.";
                    } else {
                        for (var i = 0; i < fileDiv.files.length; i++) {
                            txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                            var file = fileDiv.files[i];
                            if ('name' in file) {
                                txt += "name: " + file.name + "<br>";
                            }
                            if ('size' in file) {
                                txt += "size: " + file.size + " bytes <br>";
                            }

                            var reader = new FileReader();
                            reader.onload = function(event) {
                                var contents = event.target.result;
                                $('#uploadDetails').append("File contents: " + contents);
                            };

                            reader.onerror = function(event) {
                                console.error("File could not be read! Code " + event.target.error.code);
                            };

                            reader.readAsText(file);
                        }
                    }
                } 
                else {
                    if (fileDiv.val() == "") {
                        txt += "Select one or more files.";
                    } else {
                       txt += "The files property is not supported by your browser!";
                       txt += "<br>The path of the selected file: " + fileDiv.val(); // If the browser does not support the files property, it will return the path of the selected file instead. 
                    }
                }
                   $('#uploadDetails').append(txt);
               
            }


    */

});