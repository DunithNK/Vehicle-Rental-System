function EditDetails() {

  var fname = document.getElementById("fname").value;
  var un = document.getElementById("un").value;

  var lname = document.getElementById("lname").value;
  var password = document.getElementById("password").value;

  var contactNumber = document.getElementById("contactNumber").value;


  var f = new FormData();
  f.append("fname", fname);
  f.append("un", un);

  f.append("lname", lname);
  f.append("password", password);

  f.append("contactNumber", contactNumber);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
    }
  };
  r.open("POST", "EditInfo.php", true);
  r.send(f);
}

function Delete() {

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location = '../Aravinda/home.php';

    }
  };
  r.open("POST", "DeleteProfile.php", true);
  r.send();

}

function Logout() {

var r = new XMLHttpRequest();

r.onreadystatechange = function (){
  if(r.readyState == 4 && r.status == 200 ){
    alert(r.responseText);

  }
}

r.open("POST","logout.php",true);
r.send();


}

//Source : Stack Overflow