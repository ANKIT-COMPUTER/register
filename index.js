//function check form valid or not.
function valid(val) {
  var mno = val;
  if (mno.length ==10) {
    document.getElementById("massage").innerHTML = " ";
    alert("मोबाईल नंबर : " + val);
  }
  if (mno == "") {
    document.getElementById("massage").innerHTML = "*** कृपया मोबाईल नंबर लिखे ***";
    alert("मोबाईल नंबर डाले : " + val);
  }
  if (isNaN(mno)) {
    document.getElementById("massage").innerHTML = "***कृपया सिर्फ नंबर लिखे ***";
    alert("कृपया सही मोबाईल नंबर डाले : " + val);
  }

  if (mno.length < 10 || mno.length > 10) {
    document.getElementById("massage").innerHTML = "*** मोबाईल नंबर 10 अंकों का होना चाहिए *** ";
    alert("मोबाईल नंबर 10 अंकों का होना चाहिए  : " + val);
  }
  if ((mno.charAt(0) != 6) && (mno.charAt(0) != 7) &&
    (mno.charAt(0) != 8) && (mno.charAt(0) != 9)) {
    document.getElementById("massage").innerHTML =
      "*** कृपया सही मोबाईल नंबर डाले ***"
      alert("कृपया सही मोबाईल नंबर डाले : " + val);
  }
}
function myFunction(val) {
  alert("कुल सदस्य : " + val);
  for (var nums=1;nums<=val;nums++) {
    document.getElementById("gardian").innerHTML += '<div id="ankit' + nums + '"><div ><label class="mem">सदस्य नंबर : </label><span><input type="number" value=' + nums + ' name="SN' + nums + '" id="SN' + nums + '" class="mem"></span></div><div><label for="name' + nums + '">सदस्य का नाम :</label><span><input type="text" class="name" id="name' + nums + '" name="name' + nums + '"placeholder="लिखे"><span></div><div><label for="fname'+nums+'">पिता/पति  का नाम :</label><span><input type="text" class="fname" name="fname'+nums+'" id="'+nums+'"></span></div><div><label for="adhar">आधार नंबर  :</label><span><input type="number" class="adhar" name="adhar' + nums + '" id="'+nums+'"></span></div><div><label for="age">उम्र  :</label><span><input type="number" class="age" name="age' + nums + '" id="'+nums+'"></span></div><div><label for="gender' + nums + '" >लिंग :</label><span><select id="gender' + nums + '" name="gender' + nums + '" class="gender"><option value="M">पुरुष</option><option value="F">महिला</option> <option value="O">कोई नहीं</option></select></span></div><div><label for="rasion' + nums + '"> राशन कार्ड का डिटेल्स :</label><span><input type="text" class="rasion" id="rasion' + nums + '" name="rasion' + nums + '"placeholder="लिखे"><span></div><div><label for="name' + nums + '">मानरेगा कार्ड का डीटेल :</label><span><input type="text" class="manrega" id="manrega' + nums + '" name="manrega' + nums + '"placeholder="लिखे"><span></div><div><label for="pension' + nums + '" >पेंशन पात्र :</label><span><select id="pension' + nums + '" name="pension' + nums + '" class="pension"><option value="नहीं">नहीं</option><option value="old age">वृद्धा</option><option value="vidhwa">विधवा</option> <option value="divang">विकलांग</option></select></span></div><div><label for="pmksn' + nums + '" >प्रधानमंत्री किसान सम्मान निधि  :</label><span><select id="pmksn' + nums + '" name="pmksn' + nums + '" class="pmksn"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div><div><label for="pmjay' + nums + '" >आयुष्मान भारत योजना  :</label><span><select id="pmjay' + nums + '" name="pmjay' + nums + '" class="pmjay"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div><div><label for="mksy' + nums + '" >मुख्यमंत्री कन्या सुमंगला योजना :</label><span><select id="mksy' + nums + '" name="mksy' + nums + '" class="mksy"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div></div><br>'; 
  }
}
/*function person() {
  if (nums > 0) {
    document.getElementById("gardian").innerHTML += '<div id="ankit' + nums + '"><div ><label class="mem">सदस्य नंबर : </label><span><input type="number" value=' + nums + ' name="SN' + nums + '" id="SN' + nums + '" class="mem"></span></div><div><label for="name' + nums + '">सदस्य का नाम :</label><span><input type="text" class="name" id="name' + nums + '" name="name' + nums + '"placeholder="लिखे"><span></div><div><label for="fname'+nums+'">पिता/पति  का नाम :</label><span><input type="text" class="fname" name="fname'+nums+'" id="'+nums+'"></span></div><div><label for="adhar">आधार नंबर  :</label><span><input type="number" class="adhar" name="adhar' + nums + '" id="'+nums+'"></span></div><div><label for="age">उम्र  :</label><span><input type="number" class="age" name="age' + nums + '" id="'+nums+'"></span></div><div><label for="gender' + nums + '" >लिंग :</label><span><select id="gender' + nums + '" name="gender' + nums + '" class="gender"><option value="M">पुरुष</option><option value="M">महिला</option> <option value="O">कोई नहीं</option></select></span></div><div><label for="rasion' + nums + '"> राशन कार्ड का डिटेल्स :</label><span><input type="text" class="rasion" id="rasion' + nums + '" name="rasion' + nums + '"placeholder="लिखे"><span></div><div><label for="name' + nums + '">मानरेगा कार्ड का डीटेल :</label><span><input type="text" class="manrega" id="manrega' + nums + '" name="manrega' + nums + '"placeholder="लिखे"><span></div><div><label for="pension' + nums + '" >पेंशन पात्र :</label><span><select id="pension' + nums + '" name="pension' + nums + '" class="pension"><option value="नहीं">नहीं</option><option value="old age">वृद्धा</option><option value="vidhwa">विधवा</option> <option value="divang">विकलांग</option></select></span></div><div><label for="pmksn' + nums + '" >प्रधानमंत्री किसान सम्मान निधि  :</label><span><select id="pmksn' + nums + '" name="pmksn' + nums + '" class="pmksn"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div><div><label for="pmjay' + nums + '" >आयुष्मान भारत योजना  :</label><span><select id="pmjay' + nums + '" name="pmjay' + nums + '" class="pmjay"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div><div><label for="mksy' + nums + '" >मुख्यमंत्री कन्या सुमंगला योजना :</label><span><select id="mksy' + nums + '" name="mksy' + nums + '" class="mksy"><option value="नहीं">नहीं</option><option value="हा">हा </option></select></span></div></div><br>';
    document.getElementById("NO").value=nums;
    nums = nums + 1;
  }
}
//funtion for delete member
function remove() {
  if (nums > 1) {
    nums = nums - 1;
    document.getElementById("NO").value=nums;
    document.getElementById("ankit" + nums + "").innerHTML = "";
    document.getElementById("NO").value=nums-1;
  }
}
*/