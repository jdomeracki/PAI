function isWhiteSpaceOrEmpty(str) {
  return /^[\s\t\r\n]*$/.test(str);
}

function checkIfEmailInvalid(str) {
  let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
  if (email.test(str)) return true;
  else {
    //alert("Podaj właściwy e-mail");
    return false;
  }
}

function checkStringAndFocus(obj, msg, val_func) {
  let str = obj.value;
  let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
  let status;
  if (val_func == false) {
    status = !checkIfEmailInvalid(str);
  } else {
    status = isWhiteSpaceOrEmpty(str);
  }
  if (status == true) {
    document.getElementById(errorFieldName).innerHTML = msg;
    obj.focus();
    return false;
  } else {
    document.getElementById(errorFieldName).innerHTML = "";
    return true;
  }
}

function validate(form) {
  let tab = ["f_imie", "f_nazwisko", "f_email", "f_kod", "f_ulica", "f_miasto"];
  let is_email = false;
  let err_it = 0;
  for (var i = 0; i < tab.length; i++) {
    if (tab[i] == "f_email") {
      is_email = true;
    } else {
      is_email = false;
    }
    if (
      !checkStringAndFocus(
        form.elements[tab[i]],
        "Popraw " + form.elements[tab[i]].name.substr(2, tab[i].length),
        is_email
      )
    ) {
      err_it++;
    }
  }
  if (err_it == 0) return true;
  else return false;
}

function showElement(e) {
  document.getElementById(e).style.visibility = "visible";
}

function hideElement(e) {
  document.getElementById(e).style.visibility = "hidden";
}

function nextNode(e) {
  while (e && e.nodeType != 1) {
    e = e.nextSibling;
  }
  return e;
}
function prevNode(e) {
  while (e && e.nodeType != 1) {
    e = e.previousSibling;
  }
  return e;
}
function swapRows(b) {
  let tab = prevNode(b.previousSibling);
  let tBody = nextNode(tab.firstChild);
  let lastNode = prevNode(tBody.lastChild);
  tBody.removeChild(lastNode);
  let firstNode = nextNode(tBody.firstChild);
  tBody.insertBefore(lastNode, firstNode);
}

function alterRows(i, e) {
  if (e) {
    if (i % 2 == 1) {
      e.setAttribute("style", "background-color: Aqua;");
    }
    e = e.nextSibling;
    while (e && e.nodeType != 1) {
      e = e.nextSibling;
    }
    alterRows(++i, e);
  }
}

function cnt(form, msg, maxSize) {
  if (form.value.length > maxSize)
    form.value = form.value.substring(0, maxSize);
  else msg.innerHTML = maxSize - form.value.length;
}

//Unused
/*function isEmpty(field_text){
    if (field_text.length == 0){
        return true;
    }
    else{
        return false;
    }
}

function checkString(str, msg){
    if (isWhiteSpaceOrEmpty(str)){
        alert(msg);
        return false;
    }
    else{
        return true;
    }
}

function checkEmailAndFocus(obj, msg) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (!checkEmail(str)) {
    document.getElementById(errorFieldName).innerHTML = msg;
    obj.focus();
    return false;
    }
    else {
    document.getElementById(errorFieldName).innerHTML = "";
    return true;
    }
}*/
