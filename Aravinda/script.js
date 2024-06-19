function EditEmail() {
  var uname = document.getElementById("uname").value;
  var email = document.getElementById("email").value;

  var f = new FormData();
  f.append("uname", uname);
  f.append("email", email);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "editsub.php", true);
  r.send(f);
}

function unsubscribe() {
  var uname = document.getElementById("uname").value;
  var email = document.getElementById("email").value;

  var f = new FormData();
  f.append("uname", uname);
  f.append("email", email);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
      window.location.reload();
    }
  };
  r.open("POST", "unsub.php", true);
  r.send(f);
}

function Subscribe() {
  var uname = document.getElementById("uname").value;
  var email = document.getElementById("email").value;

  var f = new FormData();
  f.append("uname", uname);
  f.append("email", email);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      alert(r.responseText);
    }
  };
  r.open("POST", "sub.php", true);
  r.send(f);
}


//Source : Stack OverFlow