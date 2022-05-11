function isWhiteSpaceOrEmpty(str) {
    return /^[\s\t\r\n]*$/.test(str);
}

function validate(formularz) {
    let maniana = 0;
    if (checkStringAndFocus(formularz.elements["f_imie"], "Podaj imię")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_nazwisko"], "Podaj nazwisko")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_nazwisko_p"], "Podaj nazwisko panieńskie")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_email"], "Podaj właściwy e-mail")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_kod"], "Podaj kod pocztowy")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_ulica"], "Podaj ulicę")) {
        maniana = 1;
    }
    if (checkStringAndFocus(formularz.elements["f_miasto"], "Podaj miasto")) {
        maniana = 1;
    }
    if (maniana == 1){
        return false;
    }
    return true;
}

function checkStringAndFocus(obj, msg) {
    let str = obj.value;
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (errorFieldName == "e_mail" && !email.test(str) && !isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else if (isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "";
        return true;
    }
}

function showElement(e) {
    document.getElementById(e).style.visibility = 'visible';
}

function hideElement(e) {
    document.getElementById(e).style.visibility = 'hidden';
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

function cnt(form, msg, maxSize) {
    if (form.value.length > maxSize)
        form.value = form.value.substring(0, maxSize);
    else
        msg.innerHTML = maxSize - form.value.length;
}




