/**
 * Created by revelation on 10/20/19.
 */

//top bar progress bar
NProgress.configure({showSpinner: false, minimum: 0.5});
NProgress.set(0.5);
NProgress.start(); //start top progress bar
setTimeout(function () {
    NProgress.done();
}, 500);

//json filter
function JsonSanitizer(data) {
    let filtered = [];
    if (typeof (data) === "object" && data !== null) {
        //if is empty return early
        if (Object.keys(data).length < 1) {
            return false;
        }
        //iterate
        for (var key in data) {
            if (data.hasOwnProperty(key) && ((!/^\s*$/.test(data[key])))) {
                filtered.push(true);
            } else {
                filtered.push(false);
            }
        }
    } else {
        return false;
    }
    //finalized
    return !filtered.includes(false);
}

//progress setter
let clearText;

function setProgress(vue, msg, load) {
    if (load) {
        vue.$data.disabled = load;
        NProgress.start();
        vue.$data.info = msg;
        clearTimeout(clearText);
    } else {
        clearTimeout(clearText);
        NProgress.done();
        vue.$data.disabled = load;
        vue.$data.info = msg;
        clearText = setTimeout(function () {
            vue.$data.info = "";
        }, 8000);
    }
}

function setProgressAlert(vue, msg, load, type) {
    if (load) {
        vue.$data.disabled = load;
        NProgress.start();
        vue.$data.info = msg;
        clearTimeout(clearText);
    } else {
        clearTimeout(clearText);
        NProgress.done();
        vue.$data.disabled = load;
        vue.$data.info = msg;
        clearText = setTimeout(function () {
            vue.$data.info = "";
        }, 8000);
    }
    $.notify(msg, type);
}

//get base64
function getBase64(file, limit, cbk) {
    //check file limit
    var size = Math.floor(file.size / 1024);
    if (size > limit) {
        cbk(1);
        logs("File size is larger then expected...");
        return;
    }
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
        cbk(reader.result.split(',')[1]);
        return reader.result.split(',')[1];
    };
    reader.onerror = function (error) {
        logs(error);
        cbk(0);
        return false;
    };
}

//show alert function
function showAlert(msg, type) {
    let t = "";
    type = parseInt(type);
    switch (type) {
        case 0:
            type = "danger";
            t = "Error";
            break;
        case 1:
            type = "success";
            t = "Success";
            break;
        case 2:
            type = "warning";
            t = "Warning";
            break;
        default:
            type = 0;
            break;
    }
    Topper({
        title: t,
        text: msg,
        style: type,
        type: 'top',
        autoclose: true,
        autocloseAfter: 8000
    });
}

//logout
function logs(data) {
    console.log(data);
}