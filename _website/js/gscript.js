var Config = {
	ajax:"https://mziurigardens.ge/"
};

(function(){
	if(typeof document.getElementsByClassName("country_code")[0] !== "undefined"){
		var string = "Afghanistan +93;Albania +355;Algeria +213;American Samoa +1-684;Andorra +376;Angola +244;Anguilla +1-264;Antarctica +672;Antigua and Barbuda +1-268;Argentina +54;Armenia +374;Aruba +297;Australia +61;Austria +43;Azerbaijan +994;Bahamas +1-242;Bahrain +973;Bangladesh +880;Barbados +1-246;Belarus +375;Belgium +32;Belize +501;Benin +229;Bermuda +1-441;Bhutan +975;Bolivia +591;Bosnia and Herzegovina +387;Botswana +267;Brazil +55;British Indian Ocean Territory +246;British Virgin Islands +1-284;Brunei +673;Bulgaria +359;Burkina Faso +226;Burundi +257;Cambodia +855;Cameroon +237;Canada +1;Cape Verde +238;Cayman Islands +1-345;Central African Republic +236;Chad +235;Chile +56;China +86;Christmas Island +61;Cocos Islands +61;Colombia +57;Comoros +269;Cook Islands +682;Costa Rica +506;Croatia +385;Cuba +53;Curacao +599;Cyprus +357;Czech Republic +420;Democratic Republic of the Congo +243;Denmark +45;Djibouti +253;Dominica +1-767;Dominican Republic +1-809, 1-829, 1-849;East Timor +670;Ecuador +593;Egypt +20;El Salvador +503;Equatorial Guinea +240;Eritrea +291;Estonia +372;Ethiopia +251;Falkland Islands +500;Faroe Islands +298;Fiji +679;Finland +358;France +33;French Polynesia +689;Gabon +241;Gambia +220;Georgia +995;Germany +49;Ghana +233;Gibraltar +350;Greece +30;Greenland +299;Grenada +1-473;Guam +1-671;Guatemala +502;Guernsey +44-1481;Guinea +224;Guinea-Bissau +245;Guyana +592;Haiti +509;Honduras +504;Hong Kong +852;Hungary +36;Iceland +354;India +91;Indonesia +62;Iran +98;Iraq +964;Ireland +353;Isle of Man +44-1624;Israel +972;Italy +39;Ivory Coast +225;Jamaica +1-876;Japan +81;Jersey +44-1534;Jordan +962;Kazakhstan +7;Kenya +254;Kiribati +686;Kosovo +383;Kuwait +965;Kyrgyzstan +996;Laos +856;Latvia +371;Lebanon +961;Lesotho +266;Liberia +231;Libya +218;Liechtenstein +423;Lithuania +370;Luxembourg +352;Macau +853;Macedonia +389;Madagascar +261;Malawi +265;Malaysia +60;Maldives +960;Mali +223;Malta +356;Marshall Islands +692;Mauritania +222;Mauritius +230;Mayotte +262;Mexico +52;Micronesia +691;Moldova +373;Monaco +377;Mongolia +976;Montenegro +382;Montserrat +1-664;Morocco +212;Mozambique +258;Myanmar +95;Namibia +264;Nauru +674;Nepal +977;Netherlands +31;Netherlands Antilles +599;New Caledonia +687;New Zealand +64;Nicaragua +505;Niger +227;Nigeria +234;Niue +683;North Korea +850;Northern Mariana Islands +1-670;Norway +47;Oman +968;Pakistan +92;Palau +680;Palestine +970;Panama +507;Papua New Guinea +675;Paraguay +595;Peru +51;Philippines +63;Pitcairn +64;Poland +48;Portugal +351;Puerto Rico +1-787, 1-939;Qatar +974;Republic of the Congo +242;Reunion +262;Romania +40;Russia +7;Rwanda +250;Saint Barthelemy +590;Saint Helena +290;Saint Kitts and Nevis +1-869;Saint Lucia +1-758;Saint Martin +590;Saint Pierre and Miquelon +508;Saint Vincent and the Grenadines +1-784;Samoa +685;San Marino +378;Sao Tome and Principe +239;Saudi Arabia +966;Senegal +221;Serbia +381;Seychelles +248;Sierra Leone +232;Singapore +65;Sint Maarten +1-721;Slovakia +421;Slovenia +386;Solomon Islands +677;Somalia +252;South Africa +27;South Korea +82;South Sudan +211;Spain +34;Sri Lanka +94;Sudan +249;Suriname +597;Svalbard and Jan Mayen +47;Swaziland +268;Sweden +46;Switzerland +41;Syria +963;Taiwan +886;Tajikistan +992;Tanzania +255;Thailand +66;Togo +228;Tokelau +690;Tonga +676;Trinidad and Tobago +1-868;Tunisia +216;Turkey +90;Turkmenistan +993;Turks and Caicos Islands +1-649;Tuvalu +688;U.S. Virgin Islands +1-340;Uganda +256;Ukraine +380;United Arab Emirates +971;United Kingdom +44;United States +1;Uruguay +598;Uzbekistan +998;Vanuatu +678;Vatican +379;Venezuela +58;Vietnam +84;Wallis and Futuna +681;Western Sahara +212;Yemen +967;Zambia +260;Zimbabwe +263;Afghanistan +93;Albania +355;Algeria +213;American Samoa +1-684;Andorra +376;Angola +244;Anguilla +1-264;Antarctica +672;Antigua and Barbuda +1-268;Argentina +54;Armenia +374;Aruba +297;Australia +61;Austria +43;Azerbaijan +994;Bahamas +1-242;Bahrain +973;Bangladesh +880;Barbados +1-246;Belarus +375;Belgium +32;Belize +501;Benin +229;Bermuda +1-441;Bhutan +975;Bolivia +591;Bosnia and Herzegovina +387;Botswana +267;Brazil +55;British Indian Ocean Territory +246;British Virgin Islands +1-284;Brunei +673;Bulgaria +359;Burkina Faso +226;Burundi +257;Cambodia +855;Cameroon +237;Canada +1;Cape Verde +238;Cayman Islands +1-345;Central African Republic +236;Chad +235;Chile +56;China +86;Christmas Island +61;Cocos Islands +61;Colombia +57;Comoros +269;Cook Islands +682;Costa Rica +506;Croatia +385;Cuba +53;Curacao +599;Cyprus +357;Czech Republic +420;Democratic Republic of the Congo +243;Denmark +45;Djibouti +253;Dominica +1-767;Dominican Republic +1-809, 1-829, 1-849;East Timor +670;Ecuador +593;Egypt +20;El Salvador +503;Equatorial Guinea +240;Eritrea +291;Estonia +372;Ethiopia +251;Falkland Islands +500;Faroe Islands +298;Fiji +679;Finland +358;France +33;French Polynesia +689;Gabon +241;Gambia +220;Georgia +995;Germany +49;Ghana +233;Gibraltar +350;Greece +30;Greenland +299;Grenada +1-473;Guam +1-671;Guatemala +502;Guernsey +44-1481;Guinea +224;Guinea-Bissau +245;Guyana +592;Haiti +509;Honduras +504;Hong Kong +852;Hungary +36;Iceland +354;India +91;Indonesia +62;Iran +98;Iraq +964;Ireland +353;Isle of Man +44-1624;Israel +972;Italy +39;Ivory Coast +225;Jamaica +1-876;Japan +81;Jersey +44-1534;Jordan +962;Kazakhstan +7;Kenya +254;Kiribati +686;Kosovo +383;Kuwait +965;Kyrgyzstan +996;Laos +856;Latvia +371;Lebanon +961;Lesotho +266;Liberia +231;Libya +218;Liechtenstein +423;Lithuania +370;Luxembourg +352;Macau +853;Macedonia +389;Madagascar +261;Malawi +265;Malaysia +60;Maldives +960;Mali +223;Malta +356;Marshall Islands +692;Mauritania +222;Mauritius +230;Mayotte +262;Mexico +52;Micronesia +691;Moldova +373;Monaco +377;Mongolia +976;Montenegro +382;Montserrat +1-664;Morocco +212;Mozambique +258;Myanmar +95;Namibia +264;Nauru +674;Nepal +977;Netherlands +31;Netherlands Antilles +599;New Caledonia +687;New Zealand +64;Nicaragua +505;Niger +227;Nigeria +234;Niue +683;North Korea +850;Northern Mariana Islands +1-670;Norway +47;Oman +968;Pakistan +92;Palau +680;Palestine +970;Panama +507;Papua New Guinea +675;Paraguay +595;Peru +51;Philippines +63;Pitcairn +64;Poland +48;Portugal +351;Puerto Rico +1-787, 1-939;Qatar +974;Republic of the Congo +242;Reunion +262;Romania +40;Russia +7;Rwanda +250;Saint Barthelemy +590;Saint Helena +290;Saint Kitts and Nevis +1-869;Saint Lucia +1-758;Saint Martin +590;Saint Pierre and Miquelon +508;Saint Vincent and the Grenadines +1-784;Samoa +685;San Marino +378;Sao Tome and Principe +239;Saudi Arabia +966;Senegal +221;Serbia +381;Seychelles +248;Sierra Leone +232;Singapore +65;Sint Maarten +1-721;Slovakia +421;Slovenia +386;Solomon Islands +677;Somalia +252;South Africa +27;South Korea +82;South Sudan +211;Spain +34;Sri Lanka +94;Sudan +249;Suriname +597;Svalbard and Jan Mayen +47;Swaziland +268;Sweden +46;Switzerland +41;Syria +963;Taiwan +886;Tajikistan +992;Tanzania +255;Thailand +66;Togo +228;Tokelau +690;Tonga +676;Trinidad and Tobago +1-868;Tunisia +216;Turkey +90;Turkmenistan +993;Turks and Caicos Islands +1-649;Tuvalu +688;U.S. Virgin Islands +1-340;Uganda +256;Ukraine +380;United Arab Emirates +971;United Kingdom +44;United States +1;Uruguay +598;Uzbekistan +998;Vanuatu +678;Vatican +379;Venezuela +58;Vietnam +84;Wallis and Futuna +681;Western Sahara +212;Yemen +967;Zambia +260;Zimbabwe +263";
		var ex = string.split(";");
		var html = "";
		for(var i = 0; i<ex.length; i++){
			html += "<option value=\""+ex[i]+"\">"+ex[i]+"</option>";
		}
		document.getElementById("country_code").innerHTML = html;
	}

	if(typeof document.getElementsByClassName("gsubmit")[0] !== "undefined"){
		document.getElementsByClassName("gsubmit")[0].addEventListener("click", () => {
			var name = document.getElementsByClassName("gname")[0].value;
			var phone = document.getElementsByClassName("gphone")[0].value;
			var input_lang = document.getElementById("input_lang").value;
			var country_code = encodeURIComponent(document.getElementsByClassName("country_code")[0].value);
			var token = document.getElementById("token").value;

			var post = "type=callme&name="+name+"&phone="+phone+"&country_code="+country_code+"&token="+token;

			var xhttp = new XMLHttpRequest();
			xhttp.open("POST", Config.ajax + input_lang + "/?ajax=true", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(post);

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4) {
					var txt = "";
					var obj = JSON.parse(this.responseText);
					if(obj.Success.Code==1){
						document.getElementsByClassName("gname")[0].value = "";
						document.getElementsByClassName("gphone")[0].value = "";
						document.getElementsByClassName("country_code")[0].value = "Afghanistan +93";
						txt = "<font color=\"green\">"+obj.Success.Text+"</font>";

						setTimeout(function(){
							document.getElementById("gRequestACall").innerHTML = "";
							$("#CallModal").modal("hide");
						}, 2500);
					}else{
						txt = "<font color=\"red\">"+obj.Error.Text+"</font>";
					}

					document.getElementById("gRequestACall").innerHTML = txt;	
				}
			};
		});
	};

	if(typeof document.getElementsByClassName("g-submit")[0] !== "undefined"){
		document.getElementsByClassName("g-submit")[0].addEventListener("click", () => {
			var name = document.getElementsByClassName("g-name")[0].value;
			var phone = document.getElementsByClassName("g-phone")[0].value;
			var email = document.getElementsByClassName("g-email")[0].value;
			var message = document.getElementsByClassName("g-message")[0].value;
			var input_lang = document.getElementById("input_lang").value;
			var token = document.getElementById("token").value;

			var post = "type=contactMsg&name="+name+"&phone="+phone+"&email="+email+"&message="+message+"&token="+token;

			var xhttp = new XMLHttpRequest();
			xhttp.open("POST", Config.ajax + input_lang + "/?ajax=true", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(post);

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4) {
					var txt = "";
					var obj = JSON.parse(this.responseText);
					if(obj.Success.Code==1){
						document.getElementsByClassName("g-name")[0].value = "";
						document.getElementsByClassName("g-phone")[0].value = "";
						document.getElementsByClassName("g-email")[0].value = "";
						document.getElementsByClassName("g-message")[0].value = "";
						
						txt = "<font color=\"green\">"+obj.Success.Text+"</font>";

						setTimeout(function(){
							document.getElementById("gRequestContact").innerHTML = "";
							$("#CallModal").modal("hide");
						}, 2500);
					}else{
						txt = "<font color=\"red\">"+obj.Error.Text+"</font>";
					}

					document.getElementById("gRequestContact").innerHTML = txt;	
				}
			};
		});
	};
})();